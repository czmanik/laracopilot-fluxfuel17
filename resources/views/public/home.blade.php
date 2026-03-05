@extends('layouts.app')
@section('title', 'NOTM – Laravel Development Agency')
@section('description', 'NOTM vytváří moderní Laravel aplikace. Fotáček.cz pro fotografy, GastroTech pro gastronomii, MaponCulture pro kulturní akce a software na míru.')
@section('content')

<!-- Hero -->
<section class="gradient-notm text-white py-28 px-4 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-10 w-72 h-72 bg-sky-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-indigo-500 rounded-full blur-3xl"></div>
    </div>
    <div class="max-w-6xl mx-auto text-center relative z-10">
        <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 text-sm mb-8">
            <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
            Česká Laravel agentura
        </div>
        <h1 class="text-5xl md:text-7xl font-black leading-tight mb-6">
            Stavíme aplikace<br>
            <span class="gradient-text">které fungují.</span>
        </h1>
        <p class="text-xl text-slate-300 max-w-3xl mx-auto mb-10 leading-relaxed">
            NOTM je přední česká agentura specializující se na vývoj Laravel aplikací. Od hotových produktů pro fotografy, gastronomii a kulturní akce až po software přesně na míru vašich potřeb.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('products') }}" class="bg-gradient-to-r from-sky-500 to-indigo-500 hover:from-sky-600 hover:to-indigo-600 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-200 shadow-2xl hover:shadow-sky-500/25">
                Prozkoumat produkty
            </a>
            <a href="{{ route('contact') }}" class="bg-white/10 hover:bg-white/20 border border-white/30 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-200">
                Kontaktovat nás
            </a>
        </div>
    </div>
</section>

<!-- Products Overview -->
<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-slate-900 mb-4">Naše produkty</h2>
            <p class="text-xl text-slate-500 max-w-2xl mx-auto">Čtyři hotová řešení pro specifické odvětví – nebo vám vytvoříme přesně to, co potřebujete.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Fotacek -->
            <a href="{{ route('products.fotacek') }}" class="group bg-white rounded-2xl p-8 border border-slate-100 shadow-sm card-hover">
                <div class="w-14 h-14 bg-gradient-to-br from-pink-400 to-rose-500 rounded-2xl flex items-center justify-center text-2xl mb-6">📷</div>
                <h3 class="text-2xl font-bold text-slate-800 mb-3 group-hover:text-sky-600 transition-colors">Fotáček.cz</h3>
                <p class="text-slate-500 leading-relaxed mb-4">Kompletní systém pro fotografy. Portfolio web, rezervační systém a e-shop originálních fotografií i printů v jednom.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-xs bg-pink-50 text-pink-600 px-2.5 py-1 rounded-full font-medium">Portfolio web</span>
                    <span class="text-xs bg-pink-50 text-pink-600 px-2.5 py-1 rounded-full font-medium">Rezervace</span>
                    <span class="text-xs bg-pink-50 text-pink-600 px-2.5 py-1 rounded-full font-medium">E-shop</span>
                </div>
            </a>
            <!-- GastroTech -->
            <a href="{{ route('products.gastrotech') }}" class="group bg-white rounded-2xl p-8 border border-slate-100 shadow-sm card-hover">
                <div class="w-14 h-14 bg-gradient-to-br from-orange-400 to-amber-500 rounded-2xl flex items-center justify-center text-2xl mb-6">🍽️</div>
                <h3 class="text-2xl font-bold text-slate-800 mb-3 group-hover:text-sky-600 transition-colors">GastroTech</h3>
                <p class="text-slate-500 leading-relaxed mb-4">Kompletní POS systém pro gastronomii. Web, menu, rezervace, personální modul, HACCP, sklad a věrnostní program.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-xs bg-orange-50 text-orange-600 px-2.5 py-1 rounded-full font-medium">POS systém</span>
                    <span class="text-xs bg-orange-50 text-orange-600 px-2.5 py-1 rounded-full font-medium">HACCP</span>
                    <span class="text-xs bg-orange-50 text-orange-600 px-2.5 py-1 rounded-full font-medium">Věrnostní program</span>
                </div>
            </a>
            <!-- MaponCulture -->
            <a href="{{ route('products.maponculture') }}" class="group bg-white rounded-2xl p-8 border border-slate-100 shadow-sm card-hover">
                <div class="w-14 h-14 bg-gradient-to-br from-purple-400 to-indigo-500 rounded-2xl flex items-center justify-center text-2xl mb-6">🎪</div>
                <h3 class="text-2xl font-bold text-slate-800 mb-3 group-hover:text-sky-600 transition-colors">MaponCulture</h3>
                <p class="text-slate-500 leading-relaxed mb-4">Systém pro organizátory festivalů a kulturních akcí. Program, registrace, počítání návštěvníků a přímá komunikace.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-xs bg-purple-50 text-purple-600 px-2.5 py-1 rounded-full font-medium">Festivaly</span>
                    <span class="text-xs bg-purple-50 text-purple-600 px-2.5 py-1 rounded-full font-medium">Registrace</span>
                    <span class="text-xs bg-purple-50 text-purple-600 px-2.5 py-1 rounded-full font-medium">Real-time</span>
                </div>
            </a>
            <!-- Custom -->
            <a href="{{ route('products.custom') }}" class="group bg-white rounded-2xl p-8 border border-slate-100 shadow-sm card-hover">
                <div class="w-14 h-14 bg-gradient-to-br from-sky-400 to-cyan-500 rounded-2xl flex items-center justify-center text-2xl mb-6">⚙️</div>
                <h3 class="text-2xl font-bold text-slate-800 mb-3 group-hover:text-sky-600 transition-colors">Vývoj na míru</h3>
                <p class="text-slate-500 leading-relaxed mb-4">Máte specifické požadavky? Navrhneme a postavíme přesně to, co vaše firma potřebuje. Od CRM po komplexní ERP systémy.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-xs bg-sky-50 text-sky-600 px-2.5 py-1 rounded-full font-medium">Laravel</span>
                    <span class="text-xs bg-sky-50 text-sky-600 px-2.5 py-1 rounded-full font-medium">Vue.js / React</span>
                    <span class="text-xs bg-sky-50 text-sky-600 px-2.5 py-1 rounded-full font-medium">Na míru</span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Why NOTM -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-4xl font-bold text-slate-900 mb-6">Proč si vybrat NOTM?</h2>
                <p class="text-lg text-slate-500 mb-8">Jsme tým zkušených Laravel vývojářů s hlubokým porozuměním konkrétních odvětví. Nevytváříme jen kód – vytváříme řešení, která generují výsledky.</p>
                <div class="space-y-5">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">✓</div>
                        <div><h4 class="font-semibold text-slate-800">Laravel specialisté</h4><p class="text-slate-500 text-sm">100 % projektů postavených na Laravelu. Jsme odborníci, ne generalisté.</p></div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">🚀</div>
                        <div><h4 class="font-semibold text-slate-800">Rychlé nasazení</h4><p class="text-slate-500 text-sm">Hotové produkty spustíte do týdnů, ne měsíců. Vývoj na míru zahájíme do 2 týdnů.</p></div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">🔧</div>
                        <div><h4 class="font-semibold text-slate-800">Dlouhodobá podpora</h4><p class="text-slate-500 text-sm">Jsme partneři, ne jen dodavatelé. Pomáháme vám růst i po spuštění.</p></div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-6">
                <div class="bg-slate-900 text-white rounded-2xl p-6 text-center">
                    <p class="text-4xl font-black text-sky-400">50+</p>
                    <p class="text-slate-300 text-sm mt-1">Dokončených projektů</p>
                </div>
                <div class="bg-slate-900 text-white rounded-2xl p-6 text-center mt-6">
                    <p class="text-4xl font-black text-indigo-400">3</p>
                    <p class="text-slate-300 text-sm mt-1">Vlastní produkty</p>
                </div>
                <div class="bg-slate-900 text-white rounded-2xl p-6 text-center">
                    <p class="text-4xl font-black text-green-400">100%</p>
                    <p class="text-slate-300 text-sm mt-1">Laravel stack</p>
                </div>
                <div class="bg-slate-900 text-white rounded-2xl p-6 text-center mt-6">
                    <p class="text-4xl font-black text-pink-400">5★</p>
                    <p class="text-slate-300 text-sm mt-1">Hodnocení klientů</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog teaser -->
@if($featuredPosts->count() > 0)
<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex items-center justify-between mb-12">
            <h2 class="text-3xl font-bold text-slate-900">Z našeho blogu</h2>
            <a href="{{ route('blog') }}" class="text-sky-600 hover:text-sky-700 font-medium flex items-center gap-1">Všechny články →</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($featuredPosts as $post)
            <a href="{{ route('blog.post', $post->slug) }}" class="group bg-white rounded-2xl border border-slate-100 shadow-sm card-hover overflow-hidden">
                <div class="bg-gradient-to-br from-slate-800 to-slate-900 h-36 flex items-center justify-center">
                    <span class="text-slate-400 text-sm font-medium">{{ $post->category }}</span>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-slate-800 group-hover:text-sky-600 transition-colors mb-2">{{ $post->title }}</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">{{ $post->excerpt }}</p>
                    <p class="text-slate-400 text-xs mt-4">{{ $post->created_at->format('d.m.Y') }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- CTA -->
<section class="gradient-notm py-24 px-4">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl font-black text-white mb-6">Připraveni zahájit projekt?</h2>
        <p class="text-xl text-slate-300 mb-10">Ozvěte se nám a do 24 hodin se vám ozveme zpět s návrhem řešení.</p>
        <a href="{{ route('contact') }}" class="inline-block bg-gradient-to-r from-sky-500 to-indigo-500 hover:from-sky-600 hover:to-indigo-600 text-white px-10 py-4 rounded-xl font-semibold text-lg transition-all duration-200 shadow-2xl">
            Zahájit spolupráci
        </a>
    </div>
</section>
@endsection
