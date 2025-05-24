<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller implements HasMiddleware
{
    public static function middleware() {
        return [
            new Middleware('auth:sanctum', except: ['index', 'show'])
        ];
    }

    public function index()
    {
        return Post::with('user')->orderBy('updated_at', 'desc')->get();
    }

    public function store(Request $request)
    {
        $fields = $request->validate([
            'title' => 'required|max:225',
            'body' => 'required'
        ]);
        $post = $request->user()->posts()->create($fields);
        return $post;
    }

    public function show(Post $post)
    {
        $userName = $post->user->name;

        return response()->json([
            'post' => $post,
            'name' => $userName
        ]);
    }

    public function update(Request $request, Post $post)
    {
        Gate::authorize('modify', $post);
        $fields = $request->validate([
            'title' => 'required|max:225',
            'body' => 'required'
        ]);
        $post->update($fields);
        return $post;
    }

    public function destroy(Post $post)
    {
        Gate::authorize('modify', $post);
        $post->delete();
        return [ 'message' => 'The post was deleted' ];
    }
}
