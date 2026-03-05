@extends('layouts.app')
@section('title', 'Produkty – NOTM')
@section('content')
<div class="gradient-notm text-white py-20 px-4">
    <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-5xl font-black mb-6">Naše produkty</h1>
        <p class="text-xl text-slate-300">Hotová SaaS řešení pro specifická odvětví, nebo vývoj přesně podle vašich požadavků.</p>
    </div>
</div>
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-10">
        <a href="{{ route('products.fotacek') }}" class="group bg-white rounded-3xl p-10 border border-slate-100 shadow-sm card-hover">
            <div class="w-16 h-16 bg-gradient-to-br from-pink-400 to-rose-500 rounded-2xl flex items-center justify-center text-3xl mb-8">📷</div>
            <h2 class="text-3xl font-bold text-slate-800 mb-4 group-hover:text-sky-600 transition-colors">Fotáček.cz</h2>
            <p class="text-slate-500 leading-relaxed mb-6">Kompletní webová platforma pro fotografy. Zahrnuje responzivní portfolio web, integrovaný rezervační kalendář a plnohodnotný e-shop pro prodej originálních fotografií i printů.</p>
            <ul class="space-y-2 text-sm text-slate-600">
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> Responzivní portfolio web</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> Rezervační systém s kalendářem</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> E-shop fotografií a printů</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> Online platby</li>
            </ul>
        </a>
        <a href="{{ route('products.gastrotech') }}" class="group bg-white rounded-3xl p-10 border border-slate-100 shadow-sm card-hover">
            <div class="w-16 h-16 bg-gradient-to-br from-orange-400 to-amber-500 rounded-2xl flex items-center justify-center text-3xl mb-8">🍽️</div>
            <h2 class="text-3xl font-bold text-slate-800 mb-4 group-hover:text-sky-600 transition-colors">GastroTech</h2>
            <p class="text-slate-500 leading-relaxed mb-6">Komplexní POS a řídící systém pro restaurace, kavárny a gastronomické podniky všech velikostí. Vše od webu po HACCP na jednom místě.</p>
            <ul class="space-y-2 text-sm text-slate-600">
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> Web, menu a denní nabídka</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> Rezervace a online objednávky</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> Personální modul (docházka, výplaty)</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> HACCP, sklad, věrnostní program</li>
            </ul>
        </a>
        <a href="{{ route('products.maponculture') }}" class="group bg-white rounded-3xl p-10 border border-slate-100 shadow-sm card-hover">
            <div class="w-16 h-16 bg-gradient-to-br from-purple-400 to-indigo-500 rounded-2xl flex items-center justify-center text-3xl mb-8">🎪</div>
            <h2 class="text-3xl font-bold text-slate-800 mb-4 group-hover:text-sky-600 transition-colors">MaponCulture</h2>
            <p class="text-slate-500 leading-relaxed mb-6">Jednoduchá a výkonná aplikace pro organizátory festivalů a městských kulturních akcí. Od programu po real-time počítání návštěvníků.</p>
            <ul class="space-y-2 text-sm text-slate-600">
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> Program a otevírací doby</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> Registrace návštěvníků</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> Počítání návštěvníků v reálném čase</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> Push notifikace a komunikace</li>
            </ul>
        </a>
        <a href="{{ route('products.custom') }}" class="group bg-white rounded-3xl p-10 border border-slate-100 shadow-sm card-hover">
            <div class="w-16 h-16 bg-gradient-to-br from-sky-400 to-cyan-500 rounded-2xl flex items-center justify-center text-3xl mb-8">⚙️</div>
            <h2 class="text-3xl font-bold text-slate-800 mb-4 group-hover:text-sky-600 transition-colors">Vývoj na míru</h2>
            <p class="text-slate-500 leading-relaxed mb-6">Máte specifické požadavky, které hotový produkt nesplňuje? Postavíme vám aplikaci od základu přesně podle vašich potřeb a procesů.</p>
            <ul class="space-y-2 text-sm text-slate-600">
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> CRM, ERP, interní systémy</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> Laravel + Vue.js / React</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> API a integrace</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> Dlouhodobá podpora</li>
            </ul>
        </a>
    </div>
</section>
@endsection
