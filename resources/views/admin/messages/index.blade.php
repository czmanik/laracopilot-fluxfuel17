@extends('layouts.admin')
@section('title', 'Zprávy')
@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-slate-800">Zprávy</h1>
    <p class="text-slate-500 text-sm mt-1">Zprávy z kontaktního formuláře</p>
</div>
<div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
    <table class="min-w-full">
        <thead class="bg-slate-50 border-b border-slate-100">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider w-4"></th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Odesílatel</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Předmět</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Zájem</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-slate-500 uppercase tracking-wider">Datum</th>
                <th class="px-6 py-3 text-right text-xs font-semibold text-slate-500 uppercase tracking-wider">Akce</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-50">
            @forelse($messages as $message)
            <tr class="hover:bg-slate-50 transition-colors {{ !$message->read ? 'bg-sky-50/40' : '' }}">
                <td class="pl-6">@if(!$message->read)<span class="w-2 h-2 bg-sky-500 rounded-full inline-block"></span>@endif</td>
                <td class="px-6 py-4">
                    <p class="font-semibold text-slate-800 text-sm">{{ $message->name }}</p>
                    <p class="text-slate-400 text-xs">{{ $message->email }}</p>
                </td>
                <td class="px-6 py-4 text-sm text-slate-600">{{ Str::limit($message->subject, 50) }}</td>
                <td class="px-6 py-4">
                    @if($message->interest)
                    <span class="px-2 py-1 rounded text-xs bg-slate-100 text-slate-600">{{ $message->interest }}</span>
                    @endif
                </td>
                <td class="px-6 py-4 text-sm text-slate-500">{{ $message->created_at->format('d.m.Y H:i') }}</td>
                <td class="px-6 py-4 text-right">
                    <a href="{{ route('admin.messages.show', $message->id) }}" class="text-sky-600 hover:text-sky-800 text-sm font-medium mr-4">Číst</a>
                    <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Smazat zprávu?')" class="text-red-500 hover:text-red-700 text-sm font-medium">Smazat</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="6" class="px-6 py-12 text-center text-slate-400">Žádné zprávy zatím.</td></tr>
            @endforelse
        </tbody>
    </table>
    <div class="px-6 py-4 border-t border-slate-100">{{ $messages->links() }}</div>
</div>
@endsection
