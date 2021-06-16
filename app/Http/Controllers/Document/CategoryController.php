<?php

namespace App\Http\Controllers\Document;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(): Factory|View|Application
    {
        return view('Category.index');
    }

    public function create(Request $request)
    {
        $request->validate([
            'denomination' => 'required|max:256',
            'base_symbol' => 'required'
        ]);

        Category::query()->create($request->all());
        return redirect()->back();
    }
}
