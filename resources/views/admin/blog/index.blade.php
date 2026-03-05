@extends('layouts.admin')
@section('title', 'Blog')
@section('content')
<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-slate-800">Blog</h1>
        <p class="text-slate-500 text-sm mt-1">Správa blogových článků</p>
    </div>
    <a href="{{ route('admin.blog.create') }}" class="bg-sky-600 hover:bg-sky-700 text-white px-4 py-2.5 rounded-lg text-sm font-semibold transition-colors flex items-center gap-2">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
        Nový článek
    </a>
</div>
<div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
    <table class="min-w-full">
        <thead class="bg-slate-50 border-b border-slate-100">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Titulek</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Kategorie</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Autor</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Stav</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Datum</th>
                <th class="px-6 py-3 text-right text-xs font-semibold text-slate-500 uppercase tracking-wider">Akce</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-50">
            @forelse($posts as $post)
            <tr class="hover:bg-slate-50 transition-colors">
                <td class="px-6 py-4">
                    <p class="font-semibold text-slate-800 text-sm">{{ $post->title }}</p>
                    @if($post->featured)<span class="text-xs bg-yellow-100 text-yellow-700 px-1.5 py-0.5 rounded">⭐ Doporučeno</span>@endif
                </td>
                <td class="px-6 py-4 text-sm text-slate-600">{{ $post->category }}</td>
                <td class="px-6 py-4 text-sm text-slate-500">{{ $post->author }}</td>
                <td class="px-6 py-4">
                    @if($post->published)
                        <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Publikováno</span>
                    @else
                        <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-slate-100 text-slate-600">Koncept</span>
                    @endif
                </td>
                <td class="px-6 py-4 text-sm text-slate-500">{{ $post->created_at->format('d.m.Y') }}</td>
                <td class="px-6 py-4 text-right">
                    @if($post->published)
                        <a href="{{ route('blog.post', $post->slug) }}" target="_blank" class="text-slate-400 hover:text-slate-600 text-sm mr-3">Náhled</a>
                    @endif
                    <a href="{{ route('admin.blog.edit', $post->id) }}" class="text-sky-600 hover:text-sky-800 text-sm font-medium mr-4">Upravit</a>
                    <form action="{{ route('admin.blog.destroy', $post->id) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Smazat článek?')" class="text-red-500 hover:text-red-700 text-sm font-medium">Smazat</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="6" class="px-6 py-12 text-center text-slate-400">Žádné články. <a href="{{ route('admin.blog.create') }}" class="text-sky-600 hover:underline">Napsat první</a></td></tr>
            @endforelse
        </tbody>
    </table>
    <div class="px-6 py-4 border-t border-slate-100">{{ $posts->links() }}</div>
</div>
@endsection
