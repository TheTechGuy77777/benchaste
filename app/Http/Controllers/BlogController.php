<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(Request $request): View
    {
        $posts = Post::published()
            ->with('category')
            ->latest('published_at')
            ->paginate(9);

        $categories = Category::has('posts')->get();

        return view('blog.index', compact('posts', 'categories'));
    }

    public function show(Post $post): View
    {
        abort_unless($post->is_published, 404);

        $relatedPosts = Post::published()
            ->where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->limit(3)
            ->get();

        return view('blog.show', compact('post', 'relatedPosts'));
    }
}
