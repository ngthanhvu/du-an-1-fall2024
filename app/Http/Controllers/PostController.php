<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index()
    {
        try {
            $posts = Post::with('user')->get();
            return response()->json([
                'message' => 'Posts fetched successfully',
                'posts' => $posts
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to fetch posts',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try {
            if (Post::titleExists($request->title)) {
                return response()->json([
                    'message' => 'Tiêu đề đã tồn tại. Vui lòng chọn một tiêu đề khác.'
                ], 400);
            }

            $validatedData = $request->validate([
                'title' => 'required|string',
                'content' => 'required|string',
                'image' => 'nullable|mimes:jpeg,png,jpg,gif|max:10002',
                'user_id' => 'required|exists:users,id',
            ]);

            if ($request->hasFile('image')) {
                $validatedData['image'] = $request->file('image')->store('images', 'public');
            }

            $post = Post::create($validatedData);

            return response()->json([
                'message' => 'Post created successfully',
                'post' => $post
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to create post',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    // In PostController.php

    public function checkTitleExists(Request $request)
    {
        $title = $request->query('title');

        if (!$title) {
            return response()->json([
                'message' => 'Tiêu đề không được để trống.'
            ], 400);
        }

        $exists = Post::titleExists($title);

        return response()->json(['exists' => $exists]);
    }


    public function show(string $id)
    {
        try {
            $post = Post::with('user')->findOrFail($id);

            return response()->json([
                'message' => 'Post fetched successfully',
                'post' => $post
            ], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Post not found',
                'error' => $e->getMessage()
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to fetch post',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function getRelatedArticles($categoryId)
    {
        $relatedArticles = Post::where('category_id', $categoryId)->limit(3)->get();
        return response()->json(['articles' => $relatedArticles]);
    }


    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        try {
            $post = Post::findOrFail($id);

            $validatedData = $request->validate([
                'title' => 'sometimes|required|string|max:255',  // Kiểm tra tiêu đề
                'content' => 'sometimes|required|string',  // Kiểm tra nội dung
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'  // Kiểm tra ảnh
            ]);

            if ($request->has('title')) {
                $post->title = $validatedData['title'];
            }

            if ($request->has('content')) {
                $post->content = $validatedData['content'];
            }

            if ($request->hasFile('image')) {
                if ($post->image && Storage::exists($post->image)) {
                    Storage::delete($post->image);
                }

                $post->image = $request->file('image')->store('images', 'public');
            }

            $post->save();

            $updateResult = $post->update($validatedData);

            if (!$updateResult) {
                return response()->json([
                    'message' => 'Cập nhật bài viết thất bại',
                    'data' => $validatedData
                ], 500);
            }

            $post->refresh();

            return response()->json([
                'message' => 'Bài viết đã được cập nhật thành công',
                'post' => $post
            ], 200);
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation error: ', $e->errors());
            return response()->json([
                'message' => 'Lỗi validate',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            Log::error('Error updating post: ', ['error' => $e->getMessage()]);
            return response()->json([
                'message' => 'Không thể cập nhật bài viết',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy(string $id)
    {
        try {
            $post = Post::findOrFail($id);
            if ($post->image && Storage::exists('public/images/' . $post->image)) {
                Storage::delete('public/images/' . $post->image);
            }

            $post->delete();

            return response()->json([
                'message' => 'Xóa bài viết thành công',
            ], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Không tìm thấy bài viết',
                'error' => $e->getMessage()
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Không thể xóa bài viết',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}