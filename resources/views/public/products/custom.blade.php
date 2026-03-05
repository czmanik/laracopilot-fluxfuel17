@extends('layouts.app')
@section('title', 'Vývoj na míru – NOTM')
@section('content')
<div class="bg-gradient-to-br from-sky-900 via-cyan-900 to-slate-900 text-white py-24 px-4">
    <div class="max-w-5xl mx-auto">
        <a href="{{ route('products') }}" class="text-sky-300 hover:text-white text-sm mb-6 inline-flex items-center gap-1">← Zpět na produkty</a>
        <div class="flex items-center gap-5 mb-8">
            <div class="w-20 h-20 bg-gradient-to-br from-sky-400 to-cyan-500 rounded-3xl flex items-center justify-center text-4xl shadow-2xl">⚙️</div>
            <div>
                <h1 class="text-5xl font-black">Vývoj na míru</h1>
                <p class="text-sky-300 text-lg mt-1">Software přesně pro vaše potřeby</p>
            </div>
        </div>
        <p class="text-xl text-slate-300 max-w-3xl leading-relaxed">Když hotový produkt nestačí, vytvoříme vám řešení od základu. Používáme Laravel a moderní frontend technologie pro rychlé a spolehlivé aplikace.</p>
    </div>
</div>
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-slate-900 text-center mb-12">Náš vývojový proces</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-20">
            @foreach([
                ['1', 'Analýza', 'Detailně zmapujeme vaše potřeby, procesy a cíle projektu.'],
                ['2', 'Návrh', 'Vytvoříme wireframy a architekturu řešení. Vše schválíte před vývojem.'],
                ['3', 'Vývoj', 'Iterativní vývoj s pravidelnými demo prezentacemi. Vždy víte, kde jsme.'],
                ['4', 'Předání', 'Důkladné testování, školení týmu a podpora po spuštění.'],
            ] as [$num, $title, $desc])
            <div class="text-center">
                <div class="w-12 h-12 bg-sky-600 text-white rounded-full flex items-center justify-center text-xl font-black mx-auto mb-4">{{ $num }}</div>
                <h3 class="font-bold text-slate-800 mb-2">{{ $title }}</h3>
                <p class="text-slate-500 text-sm">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div>
                <h2 class="text-3xl font-bold text-slate-900 mb-6">Co umíme postavit</h2>
                <div class="space-y-3">
                    @foreach(['CRM systémy pro správu zákazníků', 'ERP systémy pro řízení firmy', 'Zákaznické portály a intranety', 'E-commerce platformy na míru', 'REST API a integrace třetích stran', 'Mobilní aplikace (PWA, React Native)', 'Automatizace a workflow systémy', 'Analytické dashboardy a reporty'] as $item)
                    <div class="flex items-center gap-3 bg-sky-50 rounded-xl px-4 py-3">
                        <span class="text-sky-500 font-bold">→</span>
                        <span class="text-slate-700 text-sm">{{ $item }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
            <div>
                <h2 class="text-3xl font-bold text-slate-900 mb-6">Technologie</h2>
                <div class="grid grid-cols-2 gap-4 mb-8">
                    @foreach(['Laravel 11', 'Livewire', 'Vue.js', 'React', 'Tailwind CSS', 'MySQL / PostgreSQL', 'Redis', 'Docker'] as $tech)
                    <div class="bg-slate-900 text-slate-300 rounded-xl px-4 py-3 text-sm font-mono text-center">{{ $tech }}</div>
                    @endforeach
                </div>
                <div class="bg-sky-600 text-white rounded-2xl p-6">
                    <h3 class="font-bold text-lg mb-2">Bezplatná konzultace</h3>
                    <p class="text-sky-100 text-sm mb-4">Řekneme vám upřímně, zda a jak váš projekt zvládneme. Bez závazků, zdarma.</p>
                    <a href="{{ route('contact') }}" class="block text-center bg-white text-sky-700 hover:bg-sky-50 py-3 rounded-xl font-semibold transition-all">Domluvit schůzku</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
