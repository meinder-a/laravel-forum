<?php

namespace MeinderA\LaravelForum\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use MeinderA\LaravelForum\Models\Thread;
use Illuminate\Routing\Controller as Controller;

class ThreadController extends Controller
{
    public function index(): JsonResponse
    {
        $threads = Thread::paginate(10);

        return response()->json($threads);
    }

    public function show(Request $request): JsonResponse
    {
        $thread = Thread::findOrFail($request->thread);

        return response()->json($thread);
    }

    public function store(Request $request): JsonResponse
    {
        $thread = Thread::create($request);

        return response()->json($thread);
    }

    public function update(Request $request, Thread $thread): JsonResponse
    {
        $thread->update($request->all());

        return response()->json($thread);
    }

    public function destroy(Request $request): Response
    {
        $thread = Thread::findOrFail($request->thread);
        $thread->delete();

        return response(null, 200);
    }
}