@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<div class="mb-8">
    <h1 class="text-2xl font-bold text-slate-800">Dashboard</h1>
    <p class="text-slate-500 mt-1">Vítejte zpět, <span class="font-semibold text-slate-700">{{ session('admin_user') }}</span>! Přehled agentury NOTM.</p>
</div>

<!-- KPI Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-sky-100 rounded-xl flex items-center justify-center text-2xl">📁</div>
            <span class="text-xs font-medium text-green-600 bg-green-100 px-2 py-1 rounded-full">{{ $activeProjects }} aktivních</span>
        </div>
        <p class="text-3xl font-bold text-slate-800">{{ $totalProjects }}</p>
        <p class="text-slate-500 text-sm mt-1">Celkem projektů</p>
    </div>
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center text-2xl">👥</div>
        </div>
        <p class="text-3xl font-bold text-slate-800">{{ $totalClients }}</p>
        <p class="text-slate-500 text-sm mt-1">Klientů</p>
    </div>
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center text-2xl">✍️</div>
            <span class="text-xs font-medium text-indigo-600 bg-indigo-100 px-2 py-1 rounded-full">{{ $publishedPosts }} publikováno</span>
        </div>
        <p class="text-3xl font-bold text-slate-800">{{ $totalPosts }}</p>
        <p class="text-slate-500 text-sm mt-1">Blogových článků</p>
    </div>
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center text-2xl">💬</div>
            @if($unreadMessages > 0)
                <span class="text-xs font-medium text-red-600 bg-red-100 px-2 py-1 rounded-full">{{ $unreadMessages }} nové</span>
            @endif
        </div>
        <p class="text-3xl font-bold text-slate-800">{{ $totalMessages }}</p>
        <p class="text-slate-500 text-sm mt-1">Zpráv z kontaktního formuláře</p>
    </div>
</div>

<!-- Recent Activity -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Recent Projects -->
    <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-slate-100">
        <div class="flex items-center justify-between px-6 py-4 border-b border-slate-100">
            <h2 class="font-semibold text-slate-800">Poslední projekty</h2>
            <a href="{{ route('admin.projects.index') }}" class="text-sky-600 hover:text-sky-700 text-sm font-medium">Zobrazit vše →</a>
        </div>
        <div class="divide-y divide-slate-50">
            @forelse($recentProjects as $project)
            <div class="px-6 py-4 flex items-center justify-between">
                <div>
                    <p class="font-medium text-slate-800 text-sm">{{ $project->name }}</p>
                    <p class="text-slate-400 text-xs mt-0.5">{{ $project->client?->name ?? 'Interní projekt' }} · {{ $project->technology }}</p>
                </div>
                <span class="px-2.5 py-1 rounded-full text-xs font-medium
                    @if($project->status === 'active') bg-green-100 text-green-700
                    @elseif($project->status === 'completed') bg-slate-100 text-slate-600
                    @elseif($project->status === 'planning') bg-blue-100 text-blue-700
                    @else bg-yellow-100 text-yellow-700 @endif">
                    {{ $project->status_label }}
                </span>
            </div>
            @empty
            <p class="px-6 py-4 text-slate-400 text-sm">Žádné projekty zatím.</p>
            @endforelse
        </div>
    </div>

    <!-- Recent Messages -->
    <div class="bg-white rounded-xl shadow-sm border border-slate-100">
        <div class="flex items-center justify-between px-6 py-4 border-b border-slate-100">
            <h2 class="font-semibold text-slate-800">Nové zprávy</h2>
            <a href="{{ route('admin.messages.index') }}" class="text-sky-600 hover:text-sky-700 text-sm font-medium">Vše →</a>
        </div>
        <div class="divide-y divide-slate-50">
            @forelse($recentMessages as $msg)
            <a href="{{ route('admin.messages.show', $msg->id) }}" class="block px-6 py-4 hover:bg-slate-50 transition-colors">
                <div class="flex items-start gap-2">
                    @if(!$msg->read)<span class="w-2 h-2 bg-sky-500 rounded-full mt-1.5 flex-shrink-0"></span>@else<span class="w-2 h-2 rounded-full mt-1.5 flex-shrink-0"></span>@endif
                    <div>
                        <p class="font-medium text-slate-800 text-xs">{{ $msg->name }}</p>
                        <p class="text-slate-400 text-xs">{{ Str::limit($msg->subject, 30) }}</p>
                        <p class="text-slate-300 text-xs">{{ $msg->created_at->diffForHumans() }}</p>
                    </div>
                </div>
            </a>
            @empty
            <p class="px-6 py-4 text-slate-400 text-sm">Žádné zprávy.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
