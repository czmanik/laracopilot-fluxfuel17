<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'NOTM – Laravel Development Agency')</title>
    <meta name="description" content="@yield('description', 'NOTM je přední česká agentura specializující se na vývoj Laravel aplikací. Tvoříme Fotáček.cz, GastroTech, MaponCulture a software na míru.')">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .gradient-notm { background: linear-gradient(135deg, #0f172a 0%, #1e3a5f 50%, #0f172a 100%); }
        .gradient-text { background: linear-gradient(135deg, #38bdf8, #818cf8); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .card-hover { transition: all 0.3s ease; }
        .card-hover:hover { transform: translateY(-4px); box-shadow: 0 20px 40px rgba(0,0,0,0.15); }
    </style>
    @yield('head')
</head>
<body class="bg-white text-gray-900">

<!-- Navigation -->
<nav class="bg-slate-900 border-b border-slate-800 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-gradient-to-br from-sky-400 to-indigo-500 rounded-lg flex items-center justify-center">
                        <span class="text-white font-black text-sm">N</span>
                    </div>
                    <span class="text-white font-bold text-xl tracking-tight">NOTM</span>
                </a>
            </div>
            <div class="hidden md:flex items-center space-x-1">
                <a href="{{ route('home') }}" class="text-slate-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors">Domů</a>
                <a href="{{ route('about') }}" class="text-slate-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors">O nás</a>
                <div class="relative group">
                    <a href="{{ route('products') }}" class="text-slate-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors flex items-center gap-1">Produkty <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></a>
                    <div class="absolute top-full left-0 mt-1 w-56 bg-slate-800 rounded-lg shadow-xl border border-slate-700 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        <a href="{{ route('products.fotacek') }}" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:text-white hover:bg-slate-700 rounded-t-lg text-sm"><span class="text-lg">📷</span> Fotáček.cz</a>
                        <a href="{{ route('products.gastrotech') }}" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:text-white hover:bg-slate-700 text-sm"><span class="text-lg">🍽️</span> GastroTech</a>
                        <a href="{{ route('products.maponculture') }}" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:text-white hover:bg-slate-700 text-sm"><span class="text-lg">🎪</span> MaponCulture</a>
                        <a href="{{ route('products.custom') }}" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:text-white hover:bg-slate-700 rounded-b-lg text-sm"><span class="text-lg">⚙️</span> Vývoj na míru</a>
                    </div>
                </div>
                <a href="{{ route('services') }}" class="text-slate-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors">Služby</a>
                <a href="{{ route('references') }}" class="text-slate-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors">Reference</a>
                <a href="{{ route('blog') }}" class="text-slate-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors">Blog</a>
                <a href="{{ route('contact') }}" class="ml-4 bg-gradient-to-r from-sky-500 to-indigo-500 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:from-sky-600 hover:to-indigo-600 transition-all duration-200 shadow-lg">Kontakt</a>
            </div>
            <!-- Mobile menu button -->
            <button id="mobile-menu-btn" class="md:hidden text-slate-300 hover:text-white p-2">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden pb-4">
            <a href="{{ route('home') }}" class="block text-slate-300 hover:text-white px-3 py-2 text-sm">Domů</a>
            <a href="{{ route('about') }}" class="block text-slate-300 hover:text-white px-3 py-2 text-sm">O nás</a>
            <a href="{{ route('products') }}" class="block text-slate-300 hover:text-white px-3 py-2 text-sm">Produkty</a>
            <a href="{{ route('products.fotacek') }}" class="block text-slate-400 hover:text-white px-6 py-2 text-sm">↳ Fotáček.cz</a>
            <a href="{{ route('products.gastrotech') }}" class="block text-slate-400 hover:text-white px-6 py-2 text-sm">↳ GastroTech</a>
            <a href="{{ route('products.maponculture') }}" class="block text-slate-400 hover:text-white px-6 py-2 text-sm">↳ MaponCulture</a>
            <a href="{{ route('products.custom') }}" class="block text-slate-400 hover:text-white px-6 py-2 text-sm">↳ Vývoj na míru</a>
            <a href="{{ route('services') }}" class="block text-slate-300 hover:text-white px-3 py-2 text-sm">Služby</a>
            <a href="{{ route('references') }}" class="block text-slate-300 hover:text-white px-3 py-2 text-sm">Reference</a>
            <a href="{{ route('blog') }}" class="block text-slate-300 hover:text-white px-3 py-2 text-sm">Blog</a>
            <a href="{{ route('contact') }}" class="block text-slate-300 hover:text-white px-3 py-2 text-sm">Kontakt</a>
        </div>
    </div>
</nav>

@yield('content')

<!-- Footer -->
<footer class="bg-slate-900 text-slate-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 grid grid-cols-1 md:grid-cols-4 gap-10">
        <div>
            <div class="flex items-center space-x-2 mb-4">
                <div class="w-8 h-8 bg-gradient-to-br from-sky-400 to-indigo-500 rounded-lg flex items-center justify-center">
                    <span class="text-white font-black text-sm">N</span>
                </div>
                <span class="text-white font-bold text-xl">NOTM</span>
            </div>
            <p class="text-sm leading-relaxed">Česká agentura specializující se na vývoj moderních Laravel aplikací. Pomáháme firmám růst prostřednictvím digitálních řešení.</p>
        </div>
        <div>
            <h4 class="text-white font-semibold mb-4">Produkty</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ route('products.fotacek') }}" class="hover:text-white transition-colors">📷 Fotáček.cz</a></li>
                <li><a href="{{ route('products.gastrotech') }}" class="hover:text-white transition-colors">🍽️ GastroTech</a></li>
                <li><a href="{{ route('products.maponculture') }}" class="hover:text-white transition-colors">🎪 MaponCulture</a></li>
                <li><a href="{{ route('products.custom') }}" class="hover:text-white transition-colors">⚙️ Vývoj na míru</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-white font-semibold mb-4">Firma</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ route('about') }}" class="hover:text-white transition-colors">O nás</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">Služby</a></li>
                <li><a href="{{ route('references') }}" class="hover:text-white transition-colors">Reference</a></li>
                <li><a href="{{ route('blog') }}" class="hover:text-white transition-colors">Blog</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors">Kontakt</a></li>
                <li><a href="{{ route('filament.admin.auth.login') }}" class="hover:text-white transition-colors">Admin</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-white font-semibold mb-4">Kontakt</h4>
            <ul class="space-y-2 text-sm">
                <li class="flex items-start gap-2"><span>📍</span> Václavské náměstí 1,<br>110 00 Praha 1</li>
                <li class="flex items-center gap-2"><span>📧</span> <a href="mailto:info@notm.cz" class="hover:text-white transition-colors">info@notm.cz</a></li>
                <li class="flex items-center gap-2"><span>📞</span> <a href="tel:+420800100200" class="hover:text-white transition-colors">+420 800 100 200</a></li>
            </ul>
        </div>
    </div>
    <div class="border-t border-slate-800 py-6 text-center text-sm text-slate-500">
        <p>© {{ date('Y') }} NOTM s.r.o. Všechna práva vyhrazena.</p>
        <p class="mt-1">Made with ❤️ by <a href="https://laracopilot.com/" target="_blank" class="hover:text-slate-300 transition-colors">LaraCopilot</a></p>
    </div>
</footer>

<script>
    document.getElementById('mobile-menu-btn')?.addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
@yield('scripts')
</body>
</html>
