@extends('layouts.admin')
@section('title', 'Klienti')
@section('content')
<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-slate-800">Klienti</h1>
        <p class="text-slate-500 text-sm mt-1">Správa klientů agentury</p>
    </div>
    <a href="{{ route('admin.clients.create') }}" class="bg-sky-600 hover:bg-sky-700 text-white px-4 py-2.5 rounded-lg text-sm font-semibold transition-colors flex items-center gap-2">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
        Přidat klienta
    </a>
</div>
<div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
    <table class="min-w-full">
        <thead class="bg-slate-50 border-b border-slate-100">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Klient</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Kontakt</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Produkt</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Projekty</th>
                <th class="px-6 py-3 text-right text-xs font-semibold text-slate-500 uppercase tracking-wider">Akce</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-50">
            @forelse($clients as $client)
            <tr class="hover:bg-slate-50 transition-colors">
                <td class="px-6 py-4">
                    <p class="font-semibold text-slate-800 text-sm">{{ $client->name }}</p>
                    <p class="text-slate-400 text-xs">{{ $client->company }}</p>
                </td>
                <td class="px-6 py-4">
                    <p class="text-sm text-slate-600">{{ $client->email }}</p>
                    <p class="text-xs text-slate-400">{{ $client->phone }}</p>
                </td>
                <td class="px-6 py-4">
                    <span class="px-2.5 py-1 rounded-full text-xs font-medium
                        @if($client->type === 'fotacek') bg-pink-100 text-pink-700
                        @elseif($client->type === 'gastrotech') bg-orange-100 text-orange-700
                        @elseif($client->type === 'maponculture') bg-purple-100 text-purple-700
                        @elseif($client->type === 'custom') bg-sky-100 text-sky-700
                        @else bg-slate-100 text-slate-600 @endif">
                        {{ $client->type_label }}
                    </span>
                </td>
                <td class="px-6 py-4 text-sm text-slate-600">{{ $client->projects_count }}</td>
                <td class="px-6 py-4 text-right">
                    <a href="{{ route('admin.clients.edit', $client->id) }}" class="text-sky-600 hover:text-sky-800 text-sm font-medium mr-4">Upravit</a>
                    <form action="{{ route('admin.clients.destroy', $client->id) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Opravdu smazat klienta?')" class="text-red-500 hover:text-red-700 text-sm font-medium">Smazat</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="5" class="px-6 py-12 text-center text-slate-400">Žádní klienti. <a href="{{ route('admin.clients.create') }}" class="text-sky-600 hover:underline">Přidat prvního</a></td></tr>
            @endforelse
        </tbody>
    </table>
    <div class="px-6 py-4 border-t border-slate-100">{{ $clients->links() }}</div>
</div>
@endsection
