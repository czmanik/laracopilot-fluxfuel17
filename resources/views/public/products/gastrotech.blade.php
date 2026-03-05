@extends('layouts.app')
@section('title', 'GastroTech – POS systém pro gastronomii | NOTM')
@section('content')
<div class="bg-gradient-to-br from-orange-900 via-amber-900 to-slate-900 text-white py-24 px-4">
    <div class="max-w-5xl mx-auto">
        <a href="{{ route('products') }}" class="text-orange-300 hover:text-white text-sm mb-6 inline-flex items-center gap-1">← Zpět na produkty</a>
        <div class="flex items-center gap-5 mb-8">
            <div class="w-20 h-20 bg-gradient-to-br from-orange-400 to-amber-500 rounded-3xl flex items-center justify-center text-4xl shadow-2xl">🍽️</div>
            <div>
                <h1 class="text-5xl font-black">GastroTech</h1>
                <p class="text-orange-300 text-lg mt-1">Kompletní POS systém pro gastronomii</p>
            </div>
        </div>
        <p class="text-xl text-slate-300 max-w-3xl leading-relaxed">Jediný systém, který potřebuje váš gastronomický podnik. Od webu a online menu přes rezervace a HACCP až po mzdy a věrnostní program.</p>
    </div>
</div>
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-slate-900 text-center mb-12">Moduly GastroTech</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-20">
            @foreach([
                ['🌐', 'Web a menu', 'Profesionální web s online menu, denní nabídkou a galeriemi. Vždy aktuální, vždy na mobilu.', 'orange'],
                ['📋', 'Rezervace', 'Online rezervace stolů a akcí. Automatická potvrzení, připomínky a správa kapacity.', 'amber'],
                ['👥', 'Personální modul', 'Docházka, výplaty, plánování směn. Kompletní HR agenda na dosah ruky.', 'yellow'],
                ['🦠', 'HACCP', 'Digitální HACCP dokumentace splňující všechny legislativní požadavky. Bez papírování.', 'lime'],
                ['📦', 'Sklad', 'Skladová evidence s automatickým odpisem po objednávce. Objednávky u dodavatelů.', 'green'],
                ['💳', 'Věrnostní program', 'Digitální věrnostní kartičky, body a slevy. Vracejte zákazníky zpět.', 'teal'],
            ] as [$icon, $title, $desc, $color])
            <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                <div class="text-3xl mb-4">{{ $icon }}</div>
                <h3 class="font-bold text-slate-800 mb-2">{{ $title }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
        <div class="bg-slate-900 text-white rounded-3xl p-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-4">Výsledky mluví za vše</h2>
                    <div class="grid grid-cols-2 gap-6 mb-6">
                        <div class="bg-slate-800 rounded-xl p-4 text-center"><p class="text-3xl font-black text-orange-400">-15h</p><p class="text-slate-400 text-xs mt-1">Ušetřených hodin týdně</p></div>
                        <div class="bg-slate-800 rounded-xl p-4 text-center"><p class="text-3xl font-black text-green-400">+12%</p><p class="text-slate-400 text-xs mt-1">Nárůst tržeb</p></div>
                        <div class="bg-slate-800 rounded-xl p-4 text-center"><p class="text-3xl font-black text-sky-400">0</p><p class="text-slate-400 text-xs mt-1">HACCP pokut</p></div>
                        <div class="bg-slate-800 rounded-xl p-4 text-center"><p class="text-3xl font-black text-pink-400">4.9★</p><p class="text-slate-400 text-xs mt-1">Spokojenost klientů</p></div>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="bg-slate-800 rounded-2xl p-6">
                        <p class="text-slate-400 text-sm mb-1">Základní plán od</p>
                        <p class="text-4xl font-black text-orange-400">2 490 Kč</p>
                        <p class="text-slate-400 text-sm">bez DPH / měsíc</p>
                    </div>
                    <a href="{{ route('contact') }}" class="block text-center bg-gradient-to-r from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white py-4 rounded-xl font-semibold transition-all">Sjednat demo prezentaci</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
