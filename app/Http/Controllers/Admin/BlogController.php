<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');
        $posts = BlogPost::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.blog.index', compact('posts'));
    }

    public function create()
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'category' => 'required|string|max:100',
            'published' => 'boolean',
            'featured' => 'boolean'
        ]);
        $validated['slug'] = Str::slug($validated['title']) . '-' . time();
        $validated['published'] = $request->has('published');
        $validated['featured'] = $request->has('featured');
        $validated['author'] = session('admin_user');
        BlogPost::create($validated);
        return redirect()->route('admin.blog.index')->with('success', 'Článek byl úspěšně vytvořen.');
    }

    public function edit($id)
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');
        $post = BlogPost::findOrFail($id);
        return view('admin.blog.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'category' => 'required|string|max:100',
            'published' => 'boolean',
            'featured' => 'boolean'
        ]);
        $validated['published'] = $request->has('published');
        $validated['featured'] = $request->has('featured');
        $post = BlogPost::findOrFail($id);
        $post->update($validated);
        return redirect()->route('admin.blog.index')->with('success', 'Článek byl úspěšně upraven.');
    }

    public function destroy($id)
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');
        BlogPost::findOrFail($id)->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Článek byl smazán.');
    }
}