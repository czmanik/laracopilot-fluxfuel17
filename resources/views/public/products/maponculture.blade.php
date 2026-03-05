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
        <!-- Pricing -->
        <div class="mb-20">
            <h2 class="text-3xl font-bold text-slate-900 text-center mb-12">Ceník pro organizátory</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Single Event -->
                <div class="bg-white rounded-2xl border border-slate-200 p-8 flex flex-col shadow-sm">
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Single Event</h3>
                    <p class="text-slate-500 text-sm mb-6">Jednorázová akce do 1 000 lidí</p>
                    <div class="mb-6">
                        <span class="text-4xl font-black text-slate-900">4 900 Kč</span>
                        <span class="text-slate-500 text-sm">/ akce</span>
                    </div>
                    <ul class="space-y-4 mb-8 flex-grow text-sm text-slate-600">
                        <li class="flex items-center gap-2">✅ Mobilní program</li>
                        <li class="flex items-center gap-2">✅ 1 scéna / areál</li>
                        <li class="flex items-center gap-2">✅ Registrace účastníků</li>
                        <li class="flex items-center gap-2 text-slate-300">❌ Real-time počítání</li>
                        <li class="flex items-center gap-2 text-slate-300">❌ Push notifikace</li>
                    </ul>
                    <a href="{{ route('contact', ['interest' => 'MaponCulture Single']) }}" class="block text-center py-3 rounded-xl border-2 border-purple-500 text-purple-600 font-bold hover:bg-purple-50 transition-colors">Objednat akci</a>
                </div>
                <!-- Festival -->
                <div class="bg-slate-900 rounded-2xl border-2 border-purple-500 p-8 flex flex-col shadow-xl scale-105 z-10 relative">
                    <div class="absolute top-0 right-8 -translate-y-1/2 bg-purple-500 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Doporučujeme</div>
                    <h3 class="text-xl font-bold text-white mb-2">Festival</h3>
                    <p class="text-slate-400 text-sm mb-6">Pro větší akce a festivaly</p>
                    <div class="mb-6">
                        <span class="text-4xl font-black text-white">12 900 Kč</span>
                        <span class="text-slate-400 text-sm">/ akce</span>
                    </div>
                    <ul class="space-y-4 mb-8 flex-grow text-sm text-slate-300">
                        <li class="flex items-center gap-2">✅ Neomezené scény</li>
                        <li class="flex items-center gap-2">✅ Real-time počítání</li>
                        <li class="flex items-center gap-2">✅ Push notifikace</li>
                        <li class="flex items-center gap-2">✅ Interaktivní mapa</li>
                        <li class="flex items-center gap-2">✅ Ticket integrace</li>
                    </ul>
                    <a href="{{ route('contact', ['interest' => 'MaponCulture Festival']) }}" class="block text-center py-3 rounded-xl bg-purple-500 text-white font-bold hover:bg-purple-600 transition-colors shadow-lg shadow-purple-500/30">Vybrat Festival</a>
                </div>
                <!-- Professional -->
                <div class="bg-white rounded-2xl border border-slate-200 p-8 flex flex-col shadow-sm">
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Professional</h3>
                    <p class="text-slate-500 text-sm mb-6">Celoroční podpora agentur</p>
                    <div class="mb-6">
                        <span class="text-4xl font-black text-slate-900">Individuálně</span>
                    </div>
                    <ul class="space-y-4 mb-8 flex-grow text-sm text-slate-600">
                        <li class="flex items-center gap-2">✅ Neomezeně akcí</li>
                        <li class="flex items-center gap-2">✅ Whitelabel řešení</li>
                        <li class="flex items-center gap-2">✅ Vlastní mobilní appka</li>
                        <li class="flex items-center gap-2">✅ Dedikovaný manažer</li>
                        <li class="flex items-center gap-2">✅ SLA podpora</li>
                    </ul>
                    <a href="{{ route('contact', ['interest' => 'MaponCulture Pro']) }}" class="block text-center py-3 rounded-xl border-2 border-slate-800 text-slate-800 font-bold hover:bg-slate-50 transition-colors">Poptat řešení</a>
                </div>
            </div>
        </div>

        <div class="bg-slate-900 text-white rounded-3xl p-12 mb-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Ideální pro</h2>
                    <ul class="space-y-3 text-slate-300">
                        @foreach(['Hudební a kulturní festivaly (500+ návštěvníků)', 'Městské slavnosti a jarmarky', 'Sportovní a společenské akce', 'Veletrhy a výstavy', 'Vzdělávací konference a kongresy'] as $item)
                        <li class="flex items-center gap-3"><span class="w-6 h-6 bg-purple-500 rounded-full flex items-center justify-center text-xs">✓</span> {{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="text-center">
                    <p class="text-xl text-slate-300 mb-8">Pořádáte akci a nevíte, který plán zvolit? Rádi vám poradíme.</p>
                    <a href="{{ route('contact', ['interest' => 'MaponCulture Konzultace']) }}" class="inline-block bg-gradient-to-r from-purple-500 to-indigo-500 hover:from-purple-600 hover:to-indigo-600 text-white px-10 py-4 rounded-xl font-semibold text-lg transition-all shadow-xl shadow-purple-500/20">Konzultace zdarma</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
