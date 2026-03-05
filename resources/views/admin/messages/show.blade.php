@extends('layouts.admin')
@section('title', 'Zpráva')
@section('content')
<div class="mb-6">
    <a href="{{ route('admin.messages.index') }}" class="text-slate-500 hover:text-slate-700 text-sm flex items-center gap-1"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg> Zpět na zprávy</a>
    <h1 class="text-2xl font-bold text-slate-800 mt-2">Zpráva od {{ $message->name }}</h1>
</div>
<div class="max-w-2xl space-y-4">
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
        <div class="bg-slate-50 px-6 py-4 border-b border-slate-100 grid grid-cols-2 gap-4 text-sm">
            <div><span class="text-slate-400">Od:</span> <span class="text-slate-800 font-medium">{{ $message->name }}</span></div>
            <div><span class="text-slate-400">E-mail:</span> <a href="mailto:{{ $message->email }}" class="text-sky-600 hover:underline">{{ $message->email }}</a></div>
            @if($message->phone)<div><span class="text-slate-400">Telefon:</span> <span class="text-slate-800">{{ $message->phone }}</span></div>@endif
            @if($message->interest)<div><span class="text-slate-400">Zájem o:</span> <span class="text-slate-800 font-medium">{{ $message->interest }}</span></div>@endif
            <div class="col-span-2"><span class="text-slate-400">Předmět:</span> <span class="text-slate-800 font-semibold">{{ $message->subject }}</span></div>
            <div><span class="text-slate-400">Přijato:</span> <span class="text-slate-600">{{ $message->created_at->format('d.m.Y v H:i') }}</span></div>
        </div>
        <div class="px-6 py-6">
            <p class="text-slate-700 leading-relaxed whitespace-pre-wrap">{{ $message->message }}</p>
        </div>
    </div>
    <div class="flex gap-3">
        <a href="mailto:{{ $message->email }}?subject=Re: {{ $message->subject }}" class="bg-sky-600 hover:bg-sky-700 text-white px-5 py-2.5 rounded-lg text-sm font-semibold transition-colors">📧 Odpovědět e-mailem</a>
        <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST">
            @csrf @method('DELETE')
            <button onclick="return confirm('Smazat zprávu?')" class="bg-red-100 hover:bg-red-200 text-red-700 px-5 py-2.5 rounded-lg text-sm font-semibold transition-colors">Smazat</button>
        </form>
    </div>
</div>
@endsection
