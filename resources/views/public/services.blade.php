@extends('layouts.app')
@section('title', 'Služby – NOTM')
@section('content')
<div class="gradient-notm text-white py-20 px-4">
    <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-5xl font-black mb-6">Naše služby</h1>
        <p class="text-xl text-slate-300">Od konzultace přes vývoj až po dlouhodobou správu a support.</p>
    </div>
</div>
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach([
            ['🔍', 'Analýza a konzultace', 'Pomůžeme vám zorientovat se v možnostech a vybrat nejlepší cestu. Bezplatná první konzultace.'],
            ['🏗️', 'Architektura systémů', 'Návrh škálovatelné, bezpečné a udržitelné architektury pro vaše projekty.'],
            ['💻', 'Vývoj Laravel aplikací', 'Backend i frontend vývoj v Laravel ekosystému. Čistý kód, testy, dokumentace.'],
            ['🎨', 'UI/UX Design', 'Moderní, intuitivní rozhraní v Tailwind CSS. Prototypy schválíte ještě před vývojem.'],
            ['🔗', 'API a integrace', 'Napojení na platební brány, CRM, ERP a libovolné třetí strany přes REST nebo GraphQL API.'],
            ['🚀', 'Nasazení a DevOps', 'Správa serverů, CI/CD pipelines, monitoring a škálování. Staráme se, aby vám vše běželo.'],
            ['🛡️', 'Bezpečnostní audity', 'Procházíme váš kód a infrastrukturu s cílem odhalit zranitelnosti dříve, než to udělají jiní.'],
            ['📊', 'Analytika a reporty', 'Nasazení analytics nástrojů, dashboardy a reporting pro informované rozhodování.'],
            ['🎓', 'Školení a mentoring', 'Vzdělávání vašeho týmu v Laravelu, best practices a moderních přístupech k vývoji.'],
        ] as [$icon, $title, $desc])
        <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100 card-hover">
            <div class="text-4xl mb-4">{{ $icon }}</div>
            <h3 class="font-bold text-slate-800 text-lg mb-3">{{ $title }}</h3>
            <p class="text-slate-500 text-sm leading-relaxed">{{ $desc }}</p>
        </div>
        @endforeach
    </div>
</section>
<section class="gradient-notm py-20 px-4">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-white mb-6">Nezávazná konzultace zdarma</h2>
        <p class="text-slate-300 mb-8">Popište nám váš projekt a my vám do 24 hodin odpovíme s prvním návrhem přístupu.</p>
        <a href="{{ route('contact') }}" class="inline-block bg-gradient-to-r from-sky-500 to-indigo-500 hover:from-sky-600 hover:to-indigo-600 text-white px-10 py-4 rounded-xl font-semibold text-lg transition-all">Kontaktovat nás</a>
    </div>
</section>
@endsection
