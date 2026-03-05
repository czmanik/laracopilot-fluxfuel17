<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Message;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $featuredPosts = BlogPost::where('published', true)->where('featured', true)->orderBy('created_at', 'desc')->take(3)->get();
        return view('public.home', compact('featuredPosts'));
    }

    public function about()
    {
        return view('public.about');
    }

    public function services()
    {
        return view('public.services');
    }

    public function products()
    {
        return view('public.products');
    }

    public function fotacek()
    {
        return view('public.products.fotacek');
    }

    public function gastrotech()
    {
        return view('public.products.gastrotech');
    }

    public function maponculture()
    {
        return view('public.products.maponculture');
    }

    public function custom()
    {
        return view('public.products.custom');
    }

    public function blog()
    {
        $posts = BlogPost::where('published', true)->orderBy('created_at', 'desc')->paginate(9);
        return view('public.blog', compact('posts'));
    }

    public function blogPost($slug)
    {
        $post = BlogPost::where('slug', $slug)->where('published', true)->firstOrFail();
        $related = BlogPost::where('published', true)->where('id', '!=', $post->id)->where('category', $post->category)->take(3)->get();
        return view('public.blog-post', compact('post', 'related'));
    }

    public function contact()
    {
        return view('public.contact');
    }

    public function references()
    {
        $projects = \App\Models\Project::where('status', 'completed')->orWhere('status', 'active')->orderBy('created_at', 'desc')->get();
        return view('public.references', compact('projects'));
    }

    public function contactStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
            'interest' => 'nullable|string|max:100'
        ]);
        Message::create($validated);
        return back()->with('success', 'Vaše zpráva byla úspěšně odeslána. Ozveme se vám co nejdříve!');
    }
}