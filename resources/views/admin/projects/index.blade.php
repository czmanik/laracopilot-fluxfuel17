@extends('layouts.admin')
@section('title', 'Projekty')
@section('content')
<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-slate-800">Projekty</h1>
        <p class="text-slate-500 text-sm mt-1">Správa všech projektů agentury</p>
    </div>
    <a href="{{ route('admin.projects.create') }}" class="bg-sky-600 hover:bg-sky-700 text-white px-4 py-2.5 rounded-lg text-sm font-semibold transition-colors flex items-center gap-2">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
        Nový projekt
    </a>
</div>
<div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
    <table class="min-w-full">
        <thead class="bg-slate-50 border-b border-slate-100">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Projekt</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Klient</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Technologie</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Stav</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Rozpočet</th>
                <th class="px-6 py-3 text-right text-xs font-semibold text-slate-500 uppercase tracking-wider">Akce</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-50">
            @forelse($projects as $project)
            <tr class="hover:bg-slate-50 transition-colors">
                <td class="px-6 py-4">
                    <p class="font-semibold text-slate-800 text-sm">{{ $project->name }}</p>
                    @if($project->url)<a href="{{ $project->url }}" target="_blank" class="text-sky-500 text-xs hover:underline">{{ $project->url }}</a>@endif
                </td>
                <td class="px-6 py-4 text-sm text-slate-600">{{ $project->client?->name ?? '–' }}</td>
                <td class="px-6 py-4 text-sm text-slate-500">{{ $project->technology ?? '–' }}</td>
                <td class="px-6 py-4">
                    <span class="px-2.5 py-1 rounded-full text-xs font-medium
                        @if($project->status === 'active') bg-green-100 text-green-700
                        @elseif($project->status === 'completed') bg-slate-100 text-slate-600
                        @elseif($project->status === 'planning') bg-blue-100 text-blue-700
                        @else bg-yellow-100 text-yellow-700 @endif">
                        {{ $project->status_label }}
                    </span>
                </td>
                <td class="px-6 py-4 text-sm text-slate-600">{{ $project->budget ? number_format($project->budget, 0, ',', ' ') . ' Kč' : '–' }}</td>
                <td class="px-6 py-4 text-right">
                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="text-sky-600 hover:text-sky-800 text-sm font-medium mr-4">Upravit</a>
                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Opravdu smazat tento projekt?')" class="text-red-500 hover:text-red-700 text-sm font-medium">Smazat</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="6" class="px-6 py-12 text-center text-slate-400">Zatím žádné projekty. <a href="{{ route('admin.projects.create') }}" class="text-sky-600 hover:underline">Přidat první projekt</a></td></tr>
            @endforelse
        </tbody>
    </table>
    <div class="px-6 py-4 border-t border-slate-100">{{ $projects->links() }}</div>
</div>
@endsection
