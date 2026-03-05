@extends('layouts.admin')
@section('title', 'Nový projekt')
@section('content')
<div class="mb-6">
    <a href="{{ route('admin.projects.index') }}" class="text-slate-500 hover:text-slate-700 text-sm flex items-center gap-1"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg> Zpět na projekty</a>
    <h1 class="text-2xl font-bold text-slate-800 mt-2">Nový projekt</h1>
</div>
<div class="bg-white rounded-xl shadow-sm border border-slate-100 p-8 max-w-3xl">
    <form action="{{ route('admin.projects.store') }}" method="POST" class="space-y-5">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-slate-700 mb-1.5">Název projektu <span class="text-red-500">*</span></label>
                <input type="text" name="name" value="{{ old('name') }}" required class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500 @error('name') border-red-400 @enderror">
                @error('name')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1.5">Klient</label>
                <select name="client_id" class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
                    <option value="">– bez klienta –</option>
                    @foreach($clients as $client)
                        <option value="{{ $client->id }}" {{ old('client_id') == $client->id ? 'selected' : '' }}>{{ $client->name }} @if($client->company)({{ $client->company }})@endif</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1.5">Stav <span class="text-red-500">*</span></label>
                <select name="status" required class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
                    <option value="planning" {{ old('status') === 'planning' ? 'selected' : '' }}>Plánování</option>
                    <option value="active" {{ old('status') === 'active' ? 'selected' : '' }}>Aktivní</option>
                    <option value="completed" {{ old('status') === 'completed' ? 'selected' : '' }}>Dokončeno</option>
                    <option value="paused" {{ old('status') === 'paused' ? 'selected' : '' }}>Pozastaveno</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1.5">Technologie</label>
                <input type="text" name="technology" value="{{ old('technology') }}" placeholder="Laravel, Tailwind CSS, Vue.js" class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1.5">Rozpočet (Kč)</label>
                <input type="number" name="budget" value="{{ old('budget') }}" step="1000" min="0" class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1.5">Datum zahájení</label>
                <input type="date" name="start_date" value="{{ old('start_date') }}" class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1.5">Datum ukončení</label>
                <input type="date" name="end_date" value="{{ old('end_date') }}" class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-slate-700 mb-1.5">URL webu</label>
                <input type="url" name="url" value="{{ old('url') }}" placeholder="https://" class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-slate-700 mb-1.5">Popis</label>
                <textarea name="description" rows="4" class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">{{ old('description') }}</textarea>
            </div>
        </div>
        <div class="flex justify-end gap-3 pt-2">
            <a href="{{ route('admin.projects.index') }}" class="px-5 py-2.5 border border-slate-200 text-slate-600 rounded-lg text-sm font-medium hover:bg-slate-50">Zrušit</a>
            <button type="submit" class="px-5 py-2.5 bg-sky-600 text-white rounded-lg text-sm font-semibold hover:bg-sky-700">Vytvořit projekt</button>
        </div>
    </form>
</div>
@endsection
