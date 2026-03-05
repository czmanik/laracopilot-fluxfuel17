<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login – NOTM</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-slate-900 min-h-screen flex items-center justify-center">
<div class="w-full max-w-md px-4">
    <div class="text-center mb-8">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-sky-400 to-indigo-500 rounded-2xl mb-4">
            <span class="text-white font-black text-2xl">N</span>
        </div>
        <h1 class="text-3xl font-bold text-white">NOTM Admin</h1>
        <p class="text-slate-400 mt-2">Přihlaste se do administrace</p>
    </div>

    @if($errors->any())
        <div class="mb-6 bg-red-900/50 border border-red-700 text-red-300 px-4 py-3 rounded-lg text-sm">
            {{ $errors->first() }}
        </div>
    @endif
    @if(session('success'))
        <div class="mb-6 bg-green-900/50 border border-green-700 text-green-300 px-4 py-3 rounded-lg text-sm">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-slate-800 rounded-2xl p-8 border border-slate-700 shadow-2xl">
        <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block text-slate-300 text-sm font-medium mb-2">E-mail</label>
                <input type="email" name="email" value="{{ old('email', 'admin@notm.cz') }}" required
                    class="w-full bg-slate-700 border border-slate-600 text-white rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent placeholder-slate-400"
                    placeholder="admin@notm.cz">
            </div>
            <div>
                <label class="block text-slate-300 text-sm font-medium mb-2">Heslo</label>
                <input type="password" name="password" value="admin123" required
                    class="w-full bg-slate-700 border border-slate-600 text-white rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent">
            </div>
            <button type="submit" class="w-full bg-gradient-to-r from-sky-500 to-indigo-500 hover:from-sky-600 hover:to-indigo-600 text-white font-semibold py-3 rounded-lg transition-all duration-200 shadow-lg">
                Přihlásit se
            </button>
        </form>
    </div>

    <!-- Credentials -->
    <div class="mt-6 bg-slate-800/50 rounded-xl p-5 border border-slate-700">
        <p class="text-slate-400 text-xs font-semibold uppercase tracking-wider mb-3">Testovací přístupy</p>
        <div class="space-y-2 text-xs">
            <div class="flex justify-between text-slate-300">
                <span>admin@notm.cz</span>
                <span class="font-mono bg-slate-700 px-2 py-0.5 rounded">admin123</span>
            </div>
            <div class="flex justify-between text-slate-300">
                <span>manager@notm.cz</span>
                <span class="font-mono bg-slate-700 px-2 py-0.5 rounded">manager123</span>
            </div>
            <div class="flex justify-between text-slate-300">
                <span>developer@notm.cz</span>
                <span class="font-mono bg-slate-700 px-2 py-0.5 rounded">dev123</span>
            </div>
        </div>
    </div>

    <div class="text-center mt-6">
        <a href="{{ route('home') }}" class="text-slate-500 hover:text-slate-300 text-sm transition-colors">← Zpět na web</a>
    </div>
</div>
</body>
</html>
