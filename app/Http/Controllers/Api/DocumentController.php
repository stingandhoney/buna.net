<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $categories = Category::all();
        return response()->json($categories);
    }
}
