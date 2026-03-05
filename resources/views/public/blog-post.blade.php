@extends('layouts.app')
@section('title', $post->title . ' – NOTM Blog')
@section('description', $post->excerpt)
@section('content')
<div class="gradient-notm text-white py-20 px-4">
    <div class="max-w-3xl mx-auto">
        <a href="{{ route('blog') }}" class="text-slate-300 hover:text-white text-sm mb-6 inline-flex items-center gap-1">← Zpět na blog</a>
        <div class="flex items-center gap-3 mb-4">
            <span class="bg-sky-600 text-white text-xs px-3 py-1 rounded-full font-medium">{{ $post->category }}</span>
            @if($post->featured)<span class="bg-yellow-500 text-slate-900 text-xs px-3 py-1 rounded-full font-semibold">⭐ Doporučeno</span>@endif
        </div>
        <h1 class="text-4xl md:text-5xl font-black leading-tight mb-6">{{ $post->title }}</h1>
        <div class="flex items-center gap-4 text-slate-400 text-sm">
            <span>Autor: <span class="text-slate-200">{{ $post->author }}</span></span>
            <span>•</span>
            <span>{{ $post->created_at->format('d. F Y') }}</span>
        </div>
    </div>
</div>
<section class="py-16 bg-white">
    <div class="max-w-3xl mx-auto px-4">
        @if($post->excerpt)
        <p class="text-xl text-slate-600 border-l-4 border-sky-500 pl-6 mb-10 leading-relaxed">{{ $post->excerpt }}</p>
        @endif
        <div class="prose prose-slate prose-lg max-w-none">{!! $post->content !!}</div>
    </div>
</section>
@if($related->count() > 0)
<section class="py-16 bg-slate-50">
    <div class="max-w-5xl mx-auto px-4">
        <h2 class="text-2xl font-bold text-slate-900 mb-8">Podobné články</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($related as $relPost)
            <a href="{{ route('blog.post', $relPost->slug) }}" class="group bg-white rounded-xl p-6 border border-slate-100 shadow-sm card-hover">
                <span class="text-xs text-sky-600 font-medium">{{ $relPost->category }}</span>
                <h3 class="font-bold text-slate-800 group-hover:text-sky-600 transition-colors mt-2 leading-tight">{{ $relPost->title }}</h3>
                <p class="text-slate-400 text-xs mt-3">{{ $relPost->created_at->format('d.m.Y') }}</p>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
