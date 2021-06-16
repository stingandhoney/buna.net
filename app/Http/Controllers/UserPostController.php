<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    /**
     * @param User $user
     * @return Application|Factory|View
     */
    public function index(User $user): View|Factory|Application
    {
        $posts = $user->posts()->with(['user', 'likes'])->paginate(20);
        return view('users.posts.index', compact('user', 'posts'));
    }
}
