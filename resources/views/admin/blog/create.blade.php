@extends('layouts.admin')
@section('title', 'Nový článek')
@section('content')
<div class="mb-6">
    <a href="{{ route('admin.blog.index') }}" class="text-slate-500 hover:text-slate-700 text-sm flex items-center gap-1"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg> Zpět na blog</a>
    <h1 class="text-2xl font-bold text-slate-800 mt-2">Nový článek</h1>
</div>
<div class="bg-white rounded-xl shadow-sm border border-slate-100 p-8 max-w-3xl">
    <form action="{{ route('admin.blog.store') }}" method="POST" class="space-y-5">
        @csrf
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1.5">Titulek <span class="text-red-500">*</span></label>
            <input type="text" name="title" value="{{ old('title') }}" required class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500 @error('title') border-red-400 @enderror">
            @error('title')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
        </div>
        <div class="grid grid-cols-2 gap-5">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1.5">Kategorie <span class="text-red-500">*</span></label>
                <select name="category" required class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
                    <option value="Produkty" {{ old('category') === 'Produkty' ? 'selected' : '' }}>Produkty</option>
                    <option value="Technologie" {{ old('category') === 'Technologie' ? 'selected' : '' }}>Technologie</option>
                    <option value="Služby" {{ old('category') === 'Služby' ? 'selected' : '' }}>Služby</option>
                    <option value="Case Study" {{ old('category') === 'Case Study' ? 'selected' : '' }}>Case Study</option>
                    <option value="Novinky" {{ old('category') === 'Novinky' ? 'selected' : '' }}>Novinky</option>
                </select>
            </div>
            <div class="flex items-end gap-6">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="published" class="rounded border-slate-300 text-sky-600" {{ old('published') ? 'checked' : '' }}>
                    <span class="text-sm text-slate-700">Publikovat</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="featured" class="rounded border-slate-300 text-yellow-500" {{ old('featured') ? 'checked' : '' }}>
                    <span class="text-sm text-slate-700">⭐ Doporučit</span>
                </label>
            </div>
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1.5">Krátký popis</label>
            <textarea name="excerpt" rows="2" class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">{{ old('excerpt') }}</textarea>
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1.5">Obsah článku <span class="text-red-500">*</span></label>
            <textarea name="content" rows="12" required class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500 font-mono @error('content') border-red-400 @enderror">{{ old('content') }}</textarea>
            <p class="text-xs text-slate-400 mt-1">HTML je podporováno.</p>
            @error('content')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
        </div>
        <div class="flex justify-end gap-3 pt-2">
            <a href="{{ route('admin.blog.index') }}" class="px-5 py-2.5 border border-slate-200 text-slate-600 rounded-lg text-sm font-medium hover:bg-slate-50">Zrušit</a>
            <button type="submit" class="px-5 py-2.5 bg-sky-600 text-white rounded-lg text-sm font-semibold hover:bg-sky-700">Vytvořit článek</button>
        </div>
    </form>
</div>
@endsection
