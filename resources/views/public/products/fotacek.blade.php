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
        <!-- Pricing & Comparison -->
        <div class="mb-20">
            <h2 class="text-3xl font-bold text-slate-900 text-center mb-12">Vyberte si svůj plán</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Lite -->
                <div class="bg-white rounded-2xl border border-slate-200 p-8 flex flex-col shadow-sm">
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Lite</h3>
                    <p class="text-slate-500 text-sm mb-6">Pro začínající fotografy</p>
                    <div class="mb-6">
                        <span class="text-4xl font-black text-slate-900">490 Kč</span>
                        <span class="text-slate-500 text-sm">/ měsíc</span>
                    </div>
                    <ul class="space-y-4 mb-8 flex-grow text-sm text-slate-600">
                        <li class="flex items-center gap-2">✅ Portfolio web</li>
                        <li class="flex items-center gap-2">✅ 5 galerií</li>
                        <li class="flex items-center gap-2">✅ Základní SEO</li>
                        <li class="flex items-center gap-2 text-slate-300">❌ Rezervační systém</li>
                        <li class="flex items-center gap-2 text-slate-300">❌ E-shop</li>
                    </ul>
                    <a href="{{ route('contact', ['interest' => 'Fotáček Lite']) }}" class="block text-center py-3 rounded-xl border-2 border-pink-500 text-pink-600 font-bold hover:bg-pink-50 transition-colors">Začít zdarma</a>
                </div>
                <!-- Pro -->
                <div class="bg-slate-900 rounded-2xl border-2 border-pink-500 p-8 flex flex-col shadow-xl scale-105 z-10 relative">
                    <div class="absolute top-0 right-8 -translate-y-1/2 bg-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Populární</div>
                    <h3 class="text-xl font-bold text-white mb-2">Pro</h3>
                    <p class="text-slate-400 text-sm mb-6">Vše, co potřebuje profík</p>
                    <div class="mb-6">
                        <span class="text-4xl font-black text-white">990 Kč</span>
                        <span class="text-slate-400 text-sm">/ měsíc</span>
                    </div>
                    <ul class="space-y-4 mb-8 flex-grow text-sm text-slate-300">
                        <li class="flex items-center gap-2">✅ Neomezené galerie</li>
                        <li class="flex items-center gap-2">✅ Rezervační systém</li>
                        <li class="flex items-center gap-2">✅ SMS notifikace</li>
                        <li class="flex items-center gap-2">✅ Základní E-shop</li>
                        <li class="flex items-center gap-2">✅ Vlastní doména</li>
                    </ul>
                    <a href="{{ route('contact', ['interest' => 'Fotáček Pro']) }}" class="block text-center py-3 rounded-xl bg-pink-500 text-white font-bold hover:bg-pink-600 transition-colors shadow-lg shadow-pink-500/30">Vybrat Pro</a>
                </div>
                <!-- Agency -->
                <div class="bg-white rounded-2xl border border-slate-200 p-8 flex flex-col shadow-sm">
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Agency</h3>
                    <p class="text-slate-500 text-sm mb-6">Pro týmy a studia</p>
                    <div class="mb-6">
                        <span class="text-4xl font-black text-slate-900">2 490 Kč</span>
                        <span class="text-slate-500 text-sm">/ měsíc</span>
                    </div>
                    <ul class="space-y-4 mb-8 flex-grow text-sm text-slate-600">
                        <li class="flex items-center gap-2">✅ Více uživatelů</li>
                        <li class="flex items-center gap-2">✅ Pokročilý E-shop</li>
                        <li class="flex items-center gap-2">✅ Multi-licence</li>
                        <li class="flex items-center gap-2">✅ VIP podpora</li>
                        <li class="flex items-center gap-2">✅ API přístup</li>
                    </ul>
                    <a href="{{ route('contact', ['interest' => 'Fotáček Agency']) }}" class="block text-center py-3 rounded-xl border-2 border-slate-800 text-slate-800 font-bold hover:bg-slate-50 transition-colors">Kontaktovat</a>
                </div>
            </div>
        </div>

        <div class="bg-slate-50 rounded-3xl p-12 border border-slate-100">
            <h2 class="text-3xl font-bold text-slate-900 text-center mb-12">Srovnání funkcí</h2>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-slate-200">
                            <th class="py-4 px-2 text-slate-500 font-medium">Funkce</th>
                            <th class="py-4 px-2 text-center text-slate-800 font-bold">Lite</th>
                            <th class="py-4 px-2 text-center text-pink-600 font-bold">Pro</th>
                            <th class="py-4 px-2 text-center text-slate-800 font-bold">Agency</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <tr>
                            <td class="py-4 px-2 text-slate-700">Webová prezentace</td>
                            <td class="py-4 px-2 text-center text-green-500">✓</td>
                            <td class="py-4 px-2 text-center text-green-500">✓</td>
                            <td class="py-4 px-2 text-center text-green-500">✓</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-2 text-slate-700">Počet fotografií</td>
                            <td class="py-4 px-2 text-center text-slate-600">100 ks</td>
                            <td class="py-4 px-2 text-center text-slate-600">Neomezeně</td>
                            <td class="py-4 px-2 text-center text-slate-600">Neomezeně</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-2 text-slate-700">Rezervační kalendář</td>
                            <td class="py-4 px-2 text-center text-red-400">×</td>
                            <td class="py-4 px-2 text-center text-green-500">✓</td>
                            <td class="py-4 px-2 text-center text-green-500">✓</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-2 text-slate-700">Prodej fotek (E-shop)</td>
                            <td class="py-4 px-2 text-center text-red-400">×</td>
                            <td class="py-4 px-2 text-center text-green-500">✓</td>
                            <td class="py-4 px-2 text-center text-green-500">✓</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-2 text-slate-700">Vlastní doména</td>
                            <td class="py-4 px-2 text-center text-slate-600">notm.cz/vaše</td>
                            <td class="py-4 px-2 text-center text-green-500">✓</td>
                            <td class="py-4 px-2 text-center text-green-500">✓</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
