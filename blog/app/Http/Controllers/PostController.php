<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PostController extends Controller
{
    use AuthorizesRequests;

    /**
     * Display a listing of posts.
     */
    public function index()
    {
        $posts = Post::with('user')
            ->published()
            ->latest('published_at')
            ->paginate(10);

        return view('posts.index', compact('posts'));
    }

    /**
     * Display the user's posts.
     */
    public function myPosts()
    {
        $posts = Post::where('user_id', auth()->id())
            ->latest()
            ->paginate(10);

        return view('posts.my-posts', compact('posts'));
    }

    /**
     * Show the form for creating a new post.
     */
    public function create()
    {
        $this->authorize('create', Post::class);

        return view('posts.create');
    }

    /**
     * Store a newly created post.
     */
    public function store(Request $request)
    {
        $this->authorize('create', Post::class);

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'content' => ['required', 'string'],
            'published' => ['boolean'],
        ]);

        $post = auth()->user()->posts()->create([
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']) . '-' . Str::random(6),
            'excerpt' => $validated['excerpt'],
            'content' => $validated['content'],
            'published_at' => $request->boolean('published') ? now() : null,
        ]);

        return redirect()->route('posts.show', $post)
            ->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified post.
     */
    public function show(Post $post)
    {
        $this->authorize('view', $post);

        $post->load('user');

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified post.
     */
    public function edit(Post $post)
    {
        $this->authorize('update', $post);

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified post.
     */
    public function update(Request $request, Post $post)
    {
        $this->authorize('update', $post);

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'content' => ['required', 'string'],
            'published' => ['boolean'],
        ]);

        $post->update([
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']) . '-' . Str::random(6),
            'excerpt' => $validated['excerpt'],
            'content' => $validated['content'],
            'published_at' => $request->boolean('published') ? ($post->published_at ?? now()) : null,
        ]);

        return redirect()->route('posts.show', $post)
            ->with('success', 'Post updated successfully!');
    }

    /**
     * Remove the specified post.
     */
    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();

        return redirect()->route('posts.my-posts')
            ->with('success', 'Post deleted successfully!');
    }
}
