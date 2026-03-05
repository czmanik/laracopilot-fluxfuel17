<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogPost;

class BlogPostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Jak Fotáček.cz mění způsob práce fotografů',
                'slug' => 'jak-fotacek-cz-meni-zpusob-prace-fotografu',
                'excerpt' => 'Fotáček.cz je komplexní platforma, která fotografům umožňuje prezentovat portfolio, přijímat rezervace a prodávat fotografie online.',
                'content' => '<p>V digitální době je online přítomnost pro fotografy klíčová. Fotáček.cz vznikl jako odpověď na potřeby moderních fotografů, kteří chtějí mít vše na jednom místě.</p><h2>Hlavní funkce Fotáček.cz</h2><p>Systém nabízí responzivní webové prezentace optimalizované pro mobilní zařízení, integrovaný rezervační systém a plnohodnotný e-shop pro prodej originálních fotografií i printů.</p><p>Fotograf si může snadno spravovat svůj kalendář dostupnosti, přijímat online platby a komunikovat s klienty přímo přes platformu.</p><h2>Výhody pro fotografy</h2><p>Úspora času, profesionální prezentace a nové příjmy z prodeje fotografií jsou hlavními benefity, které naši klienti zmiňují nejčastěji.</p>',
                'category' => 'Produkty',
                'author' => 'admin',
                'published' => true,
                'featured' => true
            ],
            [
                'title' => 'GastroTech: Kompletní řešení pro váš gastronomický podnik',
                'slug' => 'gastrotech-kompletni-reseni-pro-vas-gastronomicky-podnik',
                'excerpt' => 'GastroTech nabízí moderní POS systém s komplexními moduly pro správu webu, menu, rezervací, personálu a skladu.',
                'content' => '<p>Gastronomický průmysl stojí před výzvou digitalizace. GastroTech je náš vlajkový produkt navržený přesně pro potřeby restaurací, kaváren a gastronomických podniků.</p><h2>Moduly GastroTech</h2><p>Systém se skládá z modulů pro tvorbu webu a menu, denní nabídku, správu rezervací, personální evidenci včetně docházky a výplat, HACCP dokumentaci, skladovou evidenci a věrnostní program.</p><p>Každý modul lze aktivovat samostatně, takže platíte jen za to, co skutečně potřebujete.</p><h2>Přínosy pro podnikatele</h2><p>Naši klienti hlásí průměrnou úsporu 15 hodin týdně na administrativě a nárůst tržeb o 12 % díky věrnostnímu programu a online rezervacím.</p>',
                'category' => 'Produkty',
                'author' => 'admin',
                'published' => true,
                'featured' => true
            ],
            [
                'title' => 'MaponCulture: Jak organizovat festival ve 21. století',
                'slug' => 'maponculture-jak-organizovat-festival-ve-21-stoleti',
                'excerpt' => 'MaponCulture zjednodušuje organizaci festivalů a kulturních akcí – od registrace návštěvníků přes program až po počítání a komunikaci.',
                'content' => '<p>Organizovat festival nebo kulturní akci je náročné. MaponCulture vznikl, abychom organizátorům práci co nejvíce usnadnili.</p><h2>Co MaponCulture nabízí</h2><p>Aplikace poskytuje kompletní systém pro registraci návštěvníků, tvorbu a publikaci programu, sledování otevírací doby jednotlivých areálů a zón, inteligentní počítání návštěvníků v reálném čase a přímou komunikaci s účastníky přes push notifikace.</p><h2>Pro koho je MaponCulture vhodný</h2><p>Systém je ideální pro festivaly od 500 návštěvníků výše, městské slavnosti, kulturní akce a jakékoli události, kde je klíčová koordinace a komunikace s návštěvníky.</p>',
                'category' => 'Produkty',
                'author' => 'admin',
                'published' => true,
                'featured' => true
            ],
            [
                'title' => 'Laravel 11: Co přináší nová verze a jak ji využíváme',
                'slug' => 'laravel-11-co-prinasi-nova-verze',
                'excerpt' => 'Laravel 11 přinesl řadu vylepšení v oblasti výkonu, bezpečnosti a vývojářského komfortu. V NOTM ho již nasazujeme na nových projektech.',
                'content' => '<p>Každá nová verze Laravelu přináší vzrušení do naší každodenní práce. Laravel 11 není výjimkou a my jsme se nemohli dočkat, kdy ho začneme využívat na projektech.</p><h2>Klíčové novinky</h2><p>Zjednodušená adresářová struktura, nové minimalistické scaffolding, vylepšená Artisan konzola a nativní podpora pro SQLite v testování jsou jen některé z novinek.</p><p>Pro nás vývojáře je velmi vítané zjednodušení bootstrappingu aplikace a přehlednější konfigurace.</p>',
                'category' => 'Technologie',
                'author' => 'admin',
                'published' => true,
                'featured' => false
            ],
            [
                'title' => 'Proč stavíme naše produkty na Laravelu',
                'slug' => 'proc-stavime-nase-produkty-na-laravelu',
                'excerpt' => 'Laravel je náš framework volby pro všechny projekty. Přečtěte si, proč jsme si ho vybrali a jak nám pomáhá budovat spolehlivé aplikace.',
                'content' => '<p>Otázka výběru frameworku je jednou z nejdůležitějších technických rozhodnutí v začátku každého projektu. My jsme si vybrali Laravel a nelitujeme.</p><h2>Ekosystém a komunita</h2><p>Laravel disponuje bohatým ekosystémem – od Laravela Forge přes Vapor až po Cashier. Komunita je obrovská, dokumentace vynikající a balíčků je nepřeberné množství.</p><h2>Rychlost vývoje</h2><p>Eloquent ORM, Blade šablony, artisan příkazy a built-in autentifikace nám umožňují dodávat projekty rychleji bez kompromisů v kvalitě.</p>',
                'category' => 'Technologie',
                'author' => 'developer',
                'published' => true,
                'featured' => false
            ],
            [
                'title' => 'Jak přistupujeme k vývoji softwaru na míru',
                'slug' => 'jak-pristupujeme-k-vyvoji-softwaru-na-miru',
                'excerpt' => 'Vývoj na míru je naší silnou stránkou. Přinášíme pohled do zákulisí našeho procesu od první schůzky až po předání projektu.',
                'content' => '<p>Každý projekt na míru je jiný a to je přesně to, co na naší práci milujeme. Žádná dvě zadání nejsou stejná a každé si žádá unikátní přístup.</p><h2>Náš proces</h2><p>Začínáme důkladnou analýzou potřeb klienta, pokračujeme návrhem architektury, iterativním vývojem s pravidelnými demo prezentacemi a zakončujeme důkladným testováním a předáním.</p><h2>Technologie</h2><p>Používáme především Laravel jako backend základ, k tomu Vue.js nebo React pro komplexní frontendové části a Tailwind CSS pro moderní UI. Vše stavíme s ohledem na škálovatelnost a dlouhodobou udržitelnost.</p>',
                'category' => 'Služby',
                'author' => 'manager',
                'published' => true,
                'featured' => false
            ],
            [
                'title' => 'Case study: Jak jsme postavili systém pro Rock Festival',
                'slug' => 'case-study-jak-jsme-postavili-system-pro-rock-festival',
                'excerpt' => 'Sdílíme zkušenosti z vývoje MaponCulture pro jeden z největších rockových festivalů v Čechách.',
                'content' => '<p>Rock Festival je akce s více než 15 000 návštěvníky každý rok. Organizátoři nás oslovili s potřebou zefektivnit registraci, komunikaci a sledování kapacity areálu.</p><h2>Výzvy projektu</h2><p>Hlavní výzvy byly real-time sledování obsazenosti, offline funkčnost pro zóny bez signálu, škálovatelnost při nárazovém náporu uživatelů a snadná obsluha pro dobrovolníky bez technického zázemí.</p><h2>Výsledek</h2><p>Nasadili jsme MaponCulture s custom moduly pro specifické potřeby festivalu. Systém zvládl nápor bez výpadků, organizátoři ušetřili odhadem 200 hodin práce a návštěvníci hodnotili komunikaci jako výrazně lepší než předchozí roky.</p>',
                'category' => 'Case Study',
                'author' => 'admin',
                'published' => true,
                'featured' => false
            ],
            [
                'title' => 'Tailwind CSS v. 4: Připravujeme se na budoucnost',
                'slug' => 'tailwind-css-v4-pripravujeme-se-na-budoucnost',
                'excerpt' => 'Tailwind CSS 4 přináší radikální změny v konfiguraci a výkonu. Jak se na přechod připravujeme v NOTM.',
                'content' => '<p>Tailwind CSS je neodmyslitelnou součástí našeho tech stacku. Verze 4 přináší přepracovanou konfiguraci, výrazně rychlejší build a nové utility třídy.</p><h2>Co se mění</h2><p>Konfigurace přechází z JavaScript souboru do CSS, což výrazně zjednodušuje setup projektu. Engine byl přepsán do Rustu a build je až 5x rychlejší.</p><h2>Naše příprava</h2><p>Aktuálně testujeme Tailwind 4 na interních projektech a připravujeme migrační manuál pro klientské aplikace. Cílujeme na postupný přechod v průběhu roku 2025.</p>',
                'category' => 'Technologie',
                'author' => 'developer',
                'published' => false,
                'featured' => false
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::create($post);
        }
    }
}