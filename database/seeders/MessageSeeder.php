<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;

class MessageSeeder extends Seeder
{
    public function run(): void
    {
        $messages = [
            ['name' => 'Petr Klement', 'email' => 'petr.klement@email.cz', 'phone' => '+420 721 111 222', 'subject' => 'Zájem o Fotáček.cz', 'message' => 'Dobrý den, jsem fotograf na volné noze a hledám systém pro správu svého portfolia a rezervací. Mohl bych dostat více informací o Fotáček.cz?', 'interest' => 'fotacek', 'read' => false],
            ['name' => 'Miroslava Benešová', 'email' => 'miroslava@benes-restaurace.cz', 'phone' => '+420 732 222 333', 'subject' => 'Dotaz na GastroTech', 'message' => 'Provozuji malou restauraci a zajímám se o GastroTech. Zajímalo by mě, jaké moduly jsou základní a jak probíhá implementace.', 'interest' => 'gastrotech', 'read' => false],
            ['name' => 'Jakub Sedláček', 'email' => 'jakub.sedlacek@gmail.com', 'phone' => null, 'subject' => 'Poptávka vývoje na míru', 'message' => 'Hledám partu vývojářů pro vývoj interního systému pro naši firmu. Máme přibližnou představu, rádi bychom se sešli a probrali možnosti.', 'interest' => 'custom', 'read' => false],
            ['name' => 'Renata Horáková', 'email' => 'renata@kulturniakce.cz', 'phone' => '+420 743 333 444', 'subject' => 'MaponCulture pro náš festival', 'message' => 'Organizujeme každoroční kulturní festival v Brně s cca 3000 návštěvníky. Rádi bychom nasadili systém pro správu programu a komunikaci s návštěvníky.', 'interest' => 'maponculture', 'read' => true],
            ['name' => 'David Procházka', 'email' => 'david.prochazka@techfirma.cz', 'phone' => '+420 754 444 555', 'subject' => 'Spolupráce - referral partnerství', 'message' => 'Jsme IT firma a rádi bychom navázali partnerství pro doporučování klientů. Máme zákazníky, kteří by mohli využít vaše produkty.', 'interest' => null, 'read' => true],
        ];

        foreach ($messages as $message) {
            Message::create($message);
        }
    }
}