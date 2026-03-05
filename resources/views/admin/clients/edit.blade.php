@extends('layouts.admin')
@section('title', 'Upravit klienta')
@section('content')
<div class="mb-6">
    <a href="{{ route('admin.clients.index') }}" class="text-slate-500 hover:text-slate-700 text-sm flex items-center gap-1"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg> Zpět na klienty</a>
    <h1 class="text-2xl font-bold text-slate-800 mt-2">Upravit klienta</h1>
    <p class="text-slate-500 text-sm">{{ $client->name }}</p>
</div>
<div class="bg-white rounded-xl shadow-sm border border-slate-100 p-8 max-w-2xl">
    <form action="{{ route('admin.clients.update', $client->id) }}" method="POST" class="space-y-5">
        @csrf @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1.5">Jméno <span class="text-red-500">*</span></label>
                <input type="text" name="name" value="{{ old('name', $client->name) }}" required class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1.5">Firma</label>
                <input type="text" name="company" value="{{ old('company', $client->company) }}" class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1.5">E-mail <span class="text-red-500">*</span></label>
                <input type="email" name="email" value="{{ old('email', $client->email) }}" required class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1.5">Telefon</label>
                <input type="text" name="phone" value="{{ old('phone', $client->phone) }}" class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1.5">Web</label>
                <input type="url" name="website" value="{{ old('website', $client->website) }}" class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1.5">Produkt <span class="text-red-500">*</span></label>
                <select name="type" required class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
                    <option value="fotacek" {{ old('type', $client->type) === 'fotacek' ? 'selected' : '' }}>Fotáček.cz</option>
                    <option value="gastrotech" {{ old('type', $client->type) === 'gastrotech' ? 'selected' : '' }}>GastroTech</option>
                    <option value="maponculture" {{ old('type', $client->type) === 'maponculture' ? 'selected' : '' }}>MaponCulture</option>
                    <option value="custom" {{ old('type', $client->type) === 'custom' ? 'selected' : '' }}>Vývoj na míru</option>
                    <option value="other" {{ old('type', $client->type) === 'other' ? 'selected' : '' }}>Ostatní</option>
                </select>
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-slate-700 mb-1.5">Adresa</label>
                <input type="text" name="address" value="{{ old('address', $client->address) }}" class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-slate-700 mb-1.5">Poznámka</label>
                <textarea name="note" rows="3" class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">{{ old('note', $client->note) }}</textarea>
            </div>
        </div>
        <div class="flex justify-end gap-3 pt-2">
            <a href="{{ route('admin.clients.index') }}" class="px-5 py-2.5 border border-slate-200 text-slate-600 rounded-lg text-sm font-medium hover:bg-slate-50">Zrušit</a>
            <button type="submit" class="px-5 py-2.5 bg-sky-600 text-white rounded-lg text-sm font-semibold hover:bg-sky-700">Uložit změny</button>
        </div>
    </form>
</div>
@endsection
