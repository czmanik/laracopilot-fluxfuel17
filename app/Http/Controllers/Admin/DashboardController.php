<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Client;
use App\Models\BlogPost;
use App\Models\Message;

class DashboardController extends Controller
{
    public function index()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $totalProjects = Project::count();
        $activeProjects = Project::where('status', 'active')->count();
        $totalClients = Client::count();
        $totalPosts = BlogPost::count();
        $publishedPosts = BlogPost::where('published', true)->count();
        $unreadMessages = Message::where('read', false)->count();
        $totalMessages = Message::count();

        $recentProjects = Project::with('client')->orderBy('created_at', 'desc')->take(5)->get();
        $recentMessages = Message::orderBy('created_at', 'desc')->take(5)->get();
        $recentClients = Client::orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.dashboard', compact(
            'totalProjects', 'activeProjects', 'totalClients',
            'totalPosts', 'publishedPosts', 'unreadMessages',
            'totalMessages', 'recentProjects', 'recentMessages', 'recentClients'
        ));
    }
}