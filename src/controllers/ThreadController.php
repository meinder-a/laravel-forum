<?php

namespace MeinderA\LaravelForum\Src\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use MeinderA\LaravelForum\Models\Thread;
use Illuminate\Routing\Controller as Controller;

class ThreadController extends Controller
{
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

    public function delete(Thread $thread): Response
    {
        $thread->delete();

        return response(null, 200);
    }
}