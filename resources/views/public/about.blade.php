@extends('layouts.app')
@section('title', 'O nás – NOTM')
@section('content')
<div class="gradient-notm text-white py-20 px-4">
    <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-5xl font-black mb-6">O NOTM</h1>
        <p class="text-xl text-slate-300">Jsme tým Laravel nadšenců se sídlem v Praze, kteří věří, že správná technologie mění byznys.</p>
    </div>
</div>
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl font-bold text-slate-900 mb-6">Náš příběh</h2>
                <p class="text-slate-600 leading-relaxed mb-4">NOTM vznikl z jednoduché myšlenky: většina firem potřebuje spolehlivého technologického partnera, který nejen napíše kód, ale skutečně rozumí jejich byznysu.</p>
                <p class="text-slate-600 leading-relaxed mb-4">Specializujeme se výhradně na Laravel ekosystém. To nám umožňuje dosahovat výjimečné kvality a rychlosti vývoje, kterou jako generalistická agentura nikdy nedosáhneme.</p>
                <p class="text-slate-600 leading-relaxed">Vedle zakázkového vývoje jsme vytvořili tři vertikální produkty – Fotáček.cz, GastroTech a MaponCulture – které slouží specifickým odvětvím a neustále je vylepšujeme na základě zpětné vazby desítek klientů.</p>
            </div>
            <div class="space-y-6">
                <div class="bg-slate-50 rounded-2xl p-6">
                    <div class="flex items-center gap-4 mb-3">
                        <div class="w-12 h-12 bg-sky-100 rounded-xl flex items-center justify-center text-xl">🎯</div>
                        <h3 class="font-bold text-slate-800">Naše mise</h3>
                    </div>
                    <p class="text-slate-600 text-sm">Pomáhat firmám růst prostřednictvím digitálních produktů, které jsou spolehlivé, škálovatelné a snadno použitelné.</p>
                </div>
                <div class="bg-slate-50 rounded-2xl p-6">
                    <div class="flex items-center gap-4 mb-3">
                        <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center text-xl">👁️</div>
                        <h3 class="font-bold text-slate-800">Naše vize</h3>
                    </div>
                    <p class="text-slate-600 text-sm">Stát se referenční Laravel agenturou ve střední Evropě, na kterou se firmy obracejí, když chtějí skutečně kvalitní výsledky.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-16 bg-slate-50">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-slate-900 text-center mb-12">Náš tým</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-8 text-center border border-slate-100 shadow-sm">
                <div class="w-20 h-20 bg-gradient-to-br from-sky-400 to-indigo-500 rounded-full mx-auto mb-4 flex items-center justify-center text-white text-2xl font-black">J</div>
                <h3 class="font-bold text-slate-800 text-lg">Jan Novák</h3>
                <p class="text-sky-600 text-sm font-medium mb-3">Founder & Lead Developer</p>
                <p class="text-slate-500 text-sm">10 let zkušeností s Laravel. Předtím pracoval v pražském startupu jako CTO.</p>
            </div>
            <div class="bg-white rounded-2xl p-8 text-center border border-slate-100 shadow-sm">
                <div class="w-20 h-20 bg-gradient-to-br from-pink-400 to-rose-500 rounded-full mx-auto mb-4 flex items-center justify-center text-white text-2xl font-black">K</div>
                <h3 class="font-bold text-slate-800 text-lg">Klára Horáková</h3>
                <p class="text-sky-600 text-sm font-medium mb-3">Product Designer & Frontend</p>
                <p class="text-slate-500 text-sm">Specialistka na UI/UX a Tailwind CSS. Dbá na to, aby produkty NOTM byly nejen funkční, ale i krásné.</p>
            </div>
            <div class="bg-white rounded-2xl p-8 text-center border border-slate-100 shadow-sm">
                <div class="w-20 h-20 bg-gradient-to-br from-orange-400 to-amber-500 rounded-full mx-auto mb-4 flex items-center justify-center text-white text-2xl font-black">M</div>
                <h3 class="font-bold text-slate-800 text-lg">Michal Šimek</h3>
                <p class="text-sky-600 text-sm font-medium mb-3">Backend Developer</p>
                <p class="text-slate-500 text-sm">Laravel expert se zaměřením na výkon, bezpečnost a škálovatelné architektury.</p>
            </div>
        </div>
    </div>
</section>
@endsection
