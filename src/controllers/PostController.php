<?php

namespace MeinderA\LaravelForum\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use MeinderA\LaravelForum\Models\Post;
use Illuminate\Routing\Controller as Controller;

class PostController extends Controller
{
    public function index(): JsonResponse
    {
        $posts = Post::paginate(10);

        return response()->json($posts);
    }

    public function show(Request $request): JsonResponse
    {
        $post = Post::findOrFail($request->post);

        return response()->json($post);
    }

    public function store(Request $request): JsonResponse
    {
        $post = Post::create($request);

        return response()->json($post);
    }

    public function update(Request $request, Post $post): JsonResponse
    {
        $post->update($request->all());

        return response()->json($post);
    }

    public function destroy(Request $request): Response
    {
        $post = Post::findOrFail($request->post);
        $post->delete();

        return response(null, 200);
    }
}