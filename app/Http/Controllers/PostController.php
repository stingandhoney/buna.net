<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    public function index(): Factory|View|Application
    {
        $posts = Post::query()->latest()->with(['user', 'likes'])->paginate(2);
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function store(Request $request): RedirectResponse|string
    {
        try {
            $this->validate($request, ['body' => "required"]);
        } catch (ValidationException $e) {
            return $e->getMessage();
        }

        $request->user()->posts()->create(
            $request->only('body')
        );

        return back();
    }

    public function destroy(Post $post): RedirectResponse
    {
        $this->authorize('delete', $post);

        $post->delete();
        return back();
    }
}
