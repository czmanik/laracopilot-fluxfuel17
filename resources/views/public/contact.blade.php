@extends('layouts.app')
@section('title', 'Kontakt – NOTM')
@section('content')
<div class="gradient-notm text-white py-20 px-4">
    <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-5xl font-black mb-6">Kontaktujte nás</h1>
        <p class="text-xl text-slate-300">Ozveme se do 24 hodin. Rádi probereme váš projekt nebo odpovíme na dotazy.</p>
    </div>
</div>
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Contact info -->
            <div class="space-y-8">
                <div>
                    <h2 class="text-2xl font-bold text-slate-900 mb-6">Kontaktní údaje</h2>
                    <div class="space-y-5">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-sky-100 rounded-xl flex items-center justify-center flex-shrink-0">📍</div>
                            <div><p class="font-semibold text-slate-800">Adresa</p><p class="text-slate-500 text-sm">Václavské náměstí 1<br>110 00 Praha 1</p></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-sky-100 rounded-xl flex items-center justify-center flex-shrink-0">📧</div>
                            <div><p class="font-semibold text-slate-800">E-mail</p><a href="mailto:info@notm.cz" class="text-sky-600 hover:underline text-sm">info@notm.cz</a></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-sky-100 rounded-xl flex items-center justify-center flex-shrink-0">📞</div>
                            <div><p class="font-semibold text-slate-800">Telefon</p><a href="tel:+420800100200" class="text-sky-600 hover:underline text-sm">+420 800 100 200</a></div>
                        </div>
                    </div>
                </div>
                <div class="bg-slate-50 rounded-2xl p-6">
                    <h3 class="font-bold text-slate-800 mb-3">Pracovní doba</h3>
                    <div class="space-y-1 text-sm text-slate-600">
                        <div class="flex justify-between"><span>Pondělí – Pátek</span><span class="font-medium">9:00 – 18:00</span></div>
                        <div class="flex justify-between"><span>Sobota – Neděle</span><span class="text-slate-400">Zavřeno</span></div>
                    </div>
                </div>
            </div>
            <!-- Contact form -->
            <div class="lg:col-span-2">
                @if(session('success'))
                    <div class="mb-6 bg-green-100 border border-green-300 text-green-700 px-5 py-4 rounded-xl flex items-center gap-3">
                        <span class="text-2xl">✅</span>
                        <p>{{ session('success') }}</p>
                    </div>
                @endif
                <div class="bg-slate-50 rounded-2xl p-8">
                    <h2 class="text-2xl font-bold text-slate-900 mb-6">Napište nám</h2>
                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">Jméno <span class="text-red-500">*</span></label>
                                <input type="text" name="name" value="{{ old('name') }}" required class="w-full bg-white border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500 @error('name') border-red-400 @enderror">
                                @error('name')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">E-mail <span class="text-red-500">*</span></label>
                                <input type="email" name="email" value="{{ old('email') }}" required class="w-full bg-white border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500 @error('email') border-red-400 @enderror">
                                @error('email')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">Telefon</label>
                                <input type="text" name="phone" value="{{ old('phone') }}" class="w-full bg-white border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">Zájem o produkt</label>
                                <select name="interest" class="w-full bg-white border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
                                    <option value="">– vyberte –</option>
                                    <option value="fotacek" {{ old('interest') === 'fotacek' ? 'selected' : '' }}>📷 Fotáček.cz</option>
                                    <option value="gastrotech" {{ old('interest') === 'gastrotech' ? 'selected' : '' }}>🍽️ GastroTech</option>
                                    <option value="maponculture" {{ old('interest') === 'maponculture' ? 'selected' : '' }}>🎪 MaponCulture</option>
                                    <option value="custom" {{ old('interest') === 'custom' ? 'selected' : '' }}>⚙️ Vývoj na míru</option>
                                    <option value="jine" {{ old('interest') === 'jine' ? 'selected' : '' }}>Jiné</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">Předmět <span class="text-red-500">*</span></label>
                            <input type="text" name="subject" value="{{ old('subject') }}" required class="w-full bg-white border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500 @error('subject') border-red-400 @enderror">
                            @error('subject')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">Zpráva <span class="text-red-500">*</span></label>
                            <textarea name="message" rows="5" required class="w-full bg-white border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500 @error('message') border-red-400 @enderror">{{ old('message') }}</textarea>
                            @error('message')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>
                        <button type="submit" class="w-full bg-gradient-to-r from-sky-500 to-indigo-500 hover:from-sky-600 hover:to-indigo-600 text-white py-3.5 rounded-xl font-semibold text-sm transition-all shadow-lg">Odeslat zprávu →</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
