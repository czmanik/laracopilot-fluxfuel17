@extends('layouts.app')
@section('title', 'MaponCulture – Systém pro kulturní akce | NOTM')
@section('content')
<div class="bg-gradient-to-br from-purple-900 via-indigo-900 to-slate-900 text-white py-24 px-4">
    <div class="max-w-5xl mx-auto">
        <a href="{{ route('products') }}" class="text-purple-300 hover:text-white text-sm mb-6 inline-flex items-center gap-1">← Zpět na produkty</a>
        <div class="flex items-center gap-5 mb-8">
            <div class="w-20 h-20 bg-gradient-to-br from-purple-400 to-indigo-500 rounded-3xl flex items-center justify-center text-4xl shadow-2xl">🎪</div>
            <div>
                <h1 class="text-5xl font-black">MaponCulture</h1>
                <p class="text-purple-300 text-lg mt-1">Pro organizátory festivalů a kulturních akcí</p>
            </div>
        </div>
        <p class="text-xl text-slate-300 max-w-3xl leading-relaxed">Jednoduchá, ale výkonná aplikace, která zjednodušuje organizaci kulturních akcí – od registrace návštěvníků přes program až po real-time počítání a komunikaci.</p>
    </div>
</div>
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20">
            <div class="bg-purple-50 rounded-2xl p-8">
                <div class="text-4xl mb-4">🗓️</div>
                <h3 class="font-bold text-slate-800 text-xl mb-3">Program a otevírací doby</h3>
                <p class="text-slate-500">Snadno spravujte program akce, otevírací doby areálů a scén. Návštěvníci vidí vše aktuálně v mobilu.</p>
            </div>
            <div class="bg-indigo-50 rounded-2xl p-8">
                <div class="text-4xl mb-4">📱</div>
                <h3 class="font-bold text-slate-800 text-xl mb-3">Registrace a vstupenky</h3>
                <p class="text-slate-500">Registrace účastníků s QR kódy pro vstup. Správa kapacit a prodej vstupenek online.</p>
            </div>
            <div class="bg-violet-50 rounded-2xl p-8">
                <div class="text-4xl mb-4">👥</div>
                <h3 class="font-bold text-slate-800 text-xl mb-3">Počítání návštěvníků</h3>
                <p class="text-slate-500">Real-time sledování obsazenosti zón a celého areálu. Okamžitý přehled pro pořadatele i bezpečnostní složky.</p>
            </div>
            <div class="bg-purple-50 rounded-2xl p-8">
                <div class="text-4xl mb-4">📢</div>
                <h3 class="font-bold text-slate-800 text-xl mb-3">Komunikace s návštěvníky</h3>
                <p class="text-slate-500">Push notifikace, změny programu v reálném čase, bezpečnostní upozornění. Vždy v kontaktu s publikem.</p>
            </div>
        </div>
        <div class="bg-slate-900 text-white rounded-3xl p-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Ideální pro</h2>
                    <ul class="space-y-3 text-slate-300">
                        @foreach(['Hudební a kulturní festivaly (500+ návštěvníků)', 'Městské slavnosti a jarmarky', 'Sportovní a společenské akce', 'Veletrhy a výstavy', 'Vzdělávací konference a kongresy'] as $item)
                        <li class="flex items-center gap-3"><span class="w-6 h-6 bg-purple-500 rounded-full flex items-center justify-center text-xs">✓</span> {{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="space-y-4">
                    <div class="bg-slate-800 rounded-2xl p-6">
                        <p class="text-slate-400 text-sm mb-1">Cena za akci od</p>
                        <p class="text-4xl font-black text-purple-400">4 900 Kč</p>
                        <p class="text-slate-400 text-sm">jednorázově za akci</p>
                    </div>
                    <a href="{{ route('contact') }}" class="block text-center bg-gradient-to-r from-purple-500 to-indigo-500 hover:from-purple-600 hover:to-indigo-600 text-white py-4 rounded-xl font-semibold transition-all">Konzultace zdarma</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
