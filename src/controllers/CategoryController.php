<?php

namespace MeinderA\LaravelForum\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use MeinderA\LaravelForum\Models\Category;
use Illuminate\Routing\Controller as Controller;

class CategoryController extends Controller
{
    public function index(): JsonResponse
    {
        $categories = Category::paginate(10);

        return response()->json($categories);
    }

    public function show(Request $request): JsonResponse
    {
        $category = Category::find($request->category);

        return response()->json($category);
    }

    public function store(Request $request): JsonResponse
    {
        $category = Category::create($request);

        return response()->json($category);
    }

    public function update(Request $request, Category $category): JsonResponse
    {
        $category->update($request->all());

        return response()->json($category);
    }

    public function destroy(Request $request): Response
    {
        $category = Category::find($request->category);
        $category->delete();

        return response(null, 200);
    }
}