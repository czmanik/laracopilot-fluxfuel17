<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        $clients = [
            ['name' => 'Marek Novák', 'email' => 'marek@fotostudio.cz', 'phone' => '+420 601 234 567', 'company' => 'FotoStudio Novák', 'type' => 'fotacek', 'address' => 'Václavské náměstí 1, Praha'],
            ['name' => 'Lucie Procházková', 'email' => 'lucie@lpcfoto.cz', 'phone' => '+420 602 345 678', 'company' => 'LPC Photography', 'type' => 'fotacek', 'address' => 'Masarykova 12, Brno'],
            ['name' => 'Tomáš Dvořák', 'email' => 'tomas@dvofoto.cz', 'phone' => '+420 603 456 789', 'company' => 'Dvořák Fotografie', 'type' => 'fotacek', 'address' => 'Hlavní 5, Ostrava'],
            ['name' => 'Jana Veselá', 'email' => 'jana@janavedela.com', 'phone' => '+420 604 567 890', 'company' => 'Jana Veselá Photography', 'type' => 'fotacek', 'address' => 'Smetanova 3, Plzeň'],
            ['name' => 'Pavel Horák', 'email' => 'pavel@gastropalace.cz', 'phone' => '+420 605 678 901', 'company' => 'Gastro Palace s.r.o.', 'type' => 'gastrotech', 'address' => 'Náměstí Republiky 7, Praha'],
            ['name' => 'Kateřina Malá', 'email' => 'katerina@bistromala.cz', 'phone' => '+420 606 789 012', 'company' => 'Bistro Malá', 'type' => 'gastrotech', 'address' => 'Londýnská 22, Praha'],
            ['name' => 'Jiří Svoboda', 'email' => 'jiri@pivnice-svoboda.cz', 'phone' => '+420 607 890 123', 'company' => 'Pivnice Svoboda', 'type' => 'gastrotech', 'address' => 'Náměstí Svobody 15, Brno'],
            ['name' => 'Eva Černá', 'email' => 'eva@restauraceeva.cz', 'phone' => '+420 608 901 234', 'company' => 'Restaurace Eva', 'type' => 'gastrotech', 'address' => 'Husova 8, České Budějovice'],
            ['name' => 'Martin Havel', 'email' => 'martin@festivalrocks.cz', 'phone' => '+420 609 012 345', 'company' => 'Rock Festival s.r.o.', 'type' => 'maponculture', 'address' => 'Letenské náměstí 2, Praha'],
            ['name' => 'Petra Horáková', 'email' => 'petra@kulturnimisto.cz', 'phone' => '+420 610 123 456', 'company' => 'Kulturní místo', 'type' => 'maponculture', 'address' => 'Divadelní 11, Brno'],
            ['name' => 'Ondřej Blažek', 'email' => 'ondrej@mestskefestivaly.cz', 'phone' => '+420 611 234 567', 'company' => 'Městské Festivaly', 'type' => 'maponculture', 'address' => 'Radniční 4, Olomouc'],
            ['name' => 'Alena Kopecká', 'email' => 'alena@alena-events.cz', 'phone' => '+420 612 345 678', 'company' => 'Alena Events', 'type' => 'maponculture', 'address' => 'Palackého 19, Pardubice'],
            ['name' => 'Radek Fiala', 'email' => 'radek@fialatechsolutions.cz', 'phone' => '+420 613 456 789', 'company' => 'Fiala Tech Solutions', 'type' => 'custom', 'address' => 'Technická 1, Praha'],
            ['name' => 'Simona Kratochvílová', 'email' => 'simona@logistika-krato.cz', 'phone' => '+420 614 567 890', 'company' => 'Kratochvíl Logistika', 'type' => 'custom', 'address' => 'Průmyslová 34, Liberec'],
            ['name' => 'Vladimír Navrátil', 'email' => 'vladimir@navratil-holding.cz', 'phone' => '+420 615 678 901', 'company' => 'Navrátil Holding a.s.', 'type' => 'custom', 'address' => 'Obchodní 56, Zlín'],
        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}