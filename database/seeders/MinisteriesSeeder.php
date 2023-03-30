<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MinisteriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ministeries')->insert([
            'initials'    => 'MAA',
            'name'        => 'Ministério de Adoração e Arte',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et fugit optio est expedita temporibus fuga excepturi laborum quos. Praesentium consectetur placeat excepturi aliquid, minus laudantium animi ipsa odio! Natus, doloribus.',
            'image'       => 'http://pibinga.test/img/ministries/worship.jpg',
            'leader'      => 'MM João Marcos'
        ]);
        DB::table('ministeries')->insert([
            'initials'    => 'MCM',
            'name'        => 'Mulher Cristã em Missão',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et fugit optio est expedita temporibus fuga excepturi laborum quos. Praesentium consectetur placeat excepturi aliquid, minus laudantium animi ipsa odio! Natus, doloribus.',
            'image'       => 'http://pibinga.test/img/ministries/worship.jpg',
            'leader'      => 'MM João Marcos'
        ]);
        DB::table('ministeries')->insert([
            'initials'    => 'UMHB',
            'name'        => 'União Missionária de Homens Batistas',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et fugit optio est expedita temporibus fuga excepturi laborum quos. Praesentium consectetur placeat excepturi aliquid, minus laudantium animi ipsa odio! Natus, doloribus.',
            'image'       => 'http://pibinga.test/img/ministries/worship.jpg',
            'leader'      => 'MM João Marcos'
        ]);
        DB::table('ministeries')->insert([
            'initials'    => 'JC',
            'name'        => 'Juventude Conecta',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et fugit optio est expedita temporibus fuga excepturi laborum quos. Praesentium consectetur placeat excepturi aliquid, minus laudantium animi ipsa odio! Natus, doloribus.',
            'image'       => 'http://pibinga.test/img/ministries/worship.jpg',
            'leader'      => 'MM João Marcos'
        ]);
        DB::table('ministeries')->insert([
            'initials'    => 'ER',
            'name'        => 'Embaixadores do Rei',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et fugit optio est expedita temporibus fuga excepturi laborum quos. Praesentium consectetur placeat excepturi aliquid, minus laudantium animi ipsa odio! Natus, doloribus.',
            'image'       => 'http://pibinga.test/img/ministries/worship.jpg',
            'leader'      => 'MM João Marcos'
        ]);
        DB::table('ministeries')->insert([
            'initials'    => 'SAG',
            'name'        => 'Serviço de Atendimento à Gestante',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et fugit optio est expedita temporibus fuga excepturi laborum quos. Praesentium consectetur placeat excepturi aliquid, minus laudantium animi ipsa odio! Natus, doloribus.',
            'image'       => 'http://pibinga.test/img/ministries/worship.jpg',
            'leader'      => 'MM João Marcos'
        ]);
        DB::table('ministeries')->insert([
            'initials'    => 'UB',
            'name'        => 'Universidade Bíblia',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et fugit optio est expedita temporibus fuga excepturi laborum quos. Praesentium consectetur placeat excepturi aliquid, minus laudantium animi ipsa odio! Natus, doloribus.',
            'image'       => 'http://pibinga.test/img/ministries/worship.jpg',
            'leader'      => 'MM João Marcos'
        ]);
    }
}
