@extends('layouts.app')
@section('title', 'Fotáček.cz – Systém pro fotografy | NOTM')
@section('content')
<div class="bg-gradient-to-br from-pink-900 via-rose-900 to-slate-900 text-white py-24 px-4">
    <div class="max-w-5xl mx-auto">
        <a href="{{ route('products') }}" class="text-pink-300 hover:text-white text-sm mb-6 inline-flex items-center gap-1">← Zpět na produkty</a>
        <div class="flex items-center gap-5 mb-8">
            <div class="w-20 h-20 bg-gradient-to-br from-pink-400 to-rose-500 rounded-3xl flex items-center justify-center text-4xl shadow-2xl">📷</div>
            <div>
                <h1 class="text-5xl font-black">Fotáček.cz</h1>
                <p class="text-pink-300 text-lg mt-1">Systém pro moderní fotografy</p>
            </div>
        </div>
        <p class="text-xl text-slate-300 max-w-3xl leading-relaxed">Komplexní webová platforma, která fotografům umožňuje prezentovat portfolio, přijímat rezervace a prodávat fotografie online – vše v jednom přehledném systému.</p>
    </div>
</div>
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
            <div class="text-center p-8 rounded-2xl bg-pink-50">
                <div class="text-4xl mb-4">🌐</div>
                <h3 class="font-bold text-slate-800 text-lg mb-3">Portfolio web</h3>
                <p class="text-slate-500 text-sm">Krásný, responzivní web optimalizovaný pro mobilní i desktopová zařízení. Prezentujte svou práci profesionálně.</p>
            </div>
            <div class="text-center p-8 rounded-2xl bg-rose-50">
                <div class="text-4xl mb-4">📅</div>
                <h3 class="font-bold text-slate-800 text-lg mb-3">Rezervační systém</h3>
                <p class="text-slate-500 text-sm">Klienti si sami rezervují termíny focení přes online kalendář. Žádné telefonování, žádné emaily tam a zpátky.</p>
            </div>
            <div class="text-center p-8 rounded-2xl bg-red-50">
                <div class="text-4xl mb-4">🛒</div>
                <h3 class="font-bold text-slate-800 text-lg mb-3">E-shop fotografií</h3>
                <p class="text-slate-500 text-sm">Prodávejte digitální fotografie i fyzické printy. Integrace s platební bránou, automatické doručení digitálních souborů.</p>
            </div>
        </div>
        <div class="bg-slate-900 text-white rounded-3xl p-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Vše, co fotograf potřebuje</h2>
                    <ul class="space-y-4">
                        @foreach(['Responzivní portfolio s galeriemi', 'Online rezervace termínů s SMS potvrzením', 'E-shop s digitálními i fyzickými produkty', 'Správa klientů a jejich objednávek', 'SEO optimalizace pro vyhledávače', 'Integrace s Instagram a Google Business', 'Vlastní doména a SSL certifikát', 'Technická podpora v češtině'] as $feature)
                        <li class="flex items-center gap-3 text-slate-300"><span class="w-5 h-5 bg-pink-500 rounded-full flex items-center justify-center text-xs flex-shrink-0">✓</span> {{ $feature }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="space-y-4">
                    <div class="bg-slate-800 rounded-2xl p-6">
                        <p class="text-slate-400 text-sm mb-1">Měsíční předplatné od</p>
                        <p class="text-4xl font-black text-pink-400">990 Kč</p>
                        <p class="text-slate-400 text-sm">bez DPH / měsíc</p>
                    </div>
                    <a href="{{ route('contact') }}" class="block text-center bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white py-4 rounded-xl font-semibold transition-all">Získat demo zdarma</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
