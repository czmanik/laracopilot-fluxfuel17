<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            ['name' => 'Fotáček – Marek Novák portfolio', 'client_id' => 1, 'description' => 'Kompletní webová prezentace fotografa s e-shopem a rezervačním systémem.', 'technology' => 'Laravel, Tailwind CSS, Alpine.js', 'status' => 'completed', 'start_date' => '2024-01-10', 'end_date' => '2024-03-15', 'budget' => 45000, 'url' => 'https://fotostudio-novak.cz'],
            ['name' => 'Fotáček – LPC Photography', 'client_id' => 2, 'description' => 'Portfolio web s online rezervací termínů a prodejem printů.', 'technology' => 'Laravel, Tailwind CSS', 'status' => 'active', 'start_date' => '2024-05-01', 'end_date' => '2024-07-30', 'budget' => 38000, 'url' => null],
            ['name' => 'Fotáček – Dvořák Fotografie', 'client_id' => 3, 'description' => 'Mobilně responzivní portfolio s e-shopem originálních fotografií.', 'technology' => 'Laravel, Vue.js', 'status' => 'active', 'start_date' => '2024-06-15', 'end_date' => null, 'budget' => 52000, 'url' => null],
            ['name' => 'GastroTech – Gastro Palace', 'client_id' => 5, 'description' => 'Kompletní nasazení GastroTech systému s moduly pro web, menu, rezervace a HACCP.', 'technology' => 'Laravel, Livewire, Tailwind', 'status' => 'completed', 'start_date' => '2023-09-01', 'end_date' => '2024-01-31', 'budget' => 120000, 'url' => 'https://gastropalace.cz'],
            ['name' => 'GastroTech – Bistro Malá', 'client_id' => 6, 'description' => 'Implementace systému s důrazem na věrnostní program a online rezervace.', 'technology' => 'Laravel, Livewire', 'status' => 'active', 'start_date' => '2024-03-01', 'end_date' => '2024-08-31', 'budget' => 85000, 'url' => null],
            ['name' => 'GastroTech – Pivnice Svoboda', 'client_id' => 7, 'description' => 'Personální modul a skladová evidence pro pivnici.', 'technology' => 'Laravel, Alpine.js', 'status' => 'planning', 'start_date' => '2024-08-01', 'end_date' => null, 'budget' => 65000, 'url' => null],
            ['name' => 'MaponCulture – Rock Festival', 'client_id' => 9, 'description' => 'Systém pro řízení festivalové akce s počítáním návštěvníků a programem.', 'technology' => 'Laravel, Livewire, PWA', 'status' => 'completed', 'start_date' => '2024-02-01', 'end_date' => '2024-05-01', 'budget' => 75000, 'url' => 'https://festivalrocks.cz'],
            ['name' => 'MaponCulture – Kulturní místo', 'client_id' => 10, 'description' => 'Aplikace pro organizaci kulturních akcí s registrací a programem.', 'technology' => 'Laravel, Vue.js', 'status' => 'active', 'start_date' => '2024-04-15', 'end_date' => '2024-09-30', 'budget' => 58000, 'url' => null],
            ['name' => 'Vývoj na míru – Fiala Tech', 'client_id' => 13, 'description' => 'Interní CRM systém na míru pro správu zákazníků a objednávek.', 'technology' => 'Laravel, React, PostgreSQL', 'status' => 'active', 'start_date' => '2024-01-15', 'end_date' => '2024-10-31', 'budget' => 250000, 'url' => null],
            ['name' => 'Vývoj na míru – Kratochvíl Logistika', 'client_id' => 14, 'description' => 'Systém pro řízení logistiky a sledování zásilek.', 'technology' => 'Laravel, Vue.js, MySQL', 'status' => 'planning', 'start_date' => '2024-09-01', 'end_date' => null, 'budget' => 180000, 'url' => null],
            ['name' => 'Interní nástroje NOTM', 'client_id' => null, 'description' => 'Vývoj interních nástrojů pro sledování projektů a klientů.', 'technology' => 'Laravel, Livewire', 'status' => 'active', 'start_date' => '2024-01-01', 'end_date' => null, 'budget' => null, 'url' => null],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}