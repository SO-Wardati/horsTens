<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MassageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('massages')->insert([
            [
                'image_path' => 'images\massage.webp',

                'name' => 'Massage assis',

                'description' => 'Le massage assis a de nombreux bienfaits même s’il s’agit d’un massage considéré comme non médical.
                Il permet au massé de se relaxer et d’éliminer les effets du stress particulièrement néfastes pour l’organisme.
                Le praticien cible également des zones stratégiques du corps pour dénouer les tensions, réguler le flux énergétique et soulager les maux du dos.
                Apaisé et calmé, le massé retire des effets bénéfiques sur le long terme puisque le massage assis améliore le sommeil.
                D’un point de vue plus psychologique, le massage sur chaise aiderait aussi à mieux gérer le stress et améliorerait l’estime de soi.',

                'slogan' => 'Votre santé commence ici',

                'timer' => '15 min',

                'price' => 20

            ],

            [
                'image_path' => 'images\massageTable.jpg',

                'name' => 'Massage sur table',

                'description' => 'Cette prestation, dont la durée peut aller d\'une à une heure et 30 minutes, s\'effectue à l\'huile d\'argan cosmétique, avec un mélange de verveine, dont les vertus relaxantes sont reconnues. Elle est pratiquée sur l\'ensemble du corps, ce qui permet aux manœuvres d\'avoir un effet plus intéressant sur les muscles.
                Les mouvements se composent de palpers-roulers, d\'un pétrissage énergique des différentes zones du corps, ainsi que de pressions et de percussions.
                Il est généralement possible de profiter seul comme en duo de cet instant bien-être particulier.',

                'slogan' => 'Tout ce dont vous avez besoin',

                'timer' => '45 min',

                'price' => 50

            ],

        ]);
    }
}
