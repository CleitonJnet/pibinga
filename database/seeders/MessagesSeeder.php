<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 120; $i++) {
            DB::table('messages')->insert([
                'name' => 'Título da mensagem',
                'link' => 'https://www.youtube.com/watch?v=y5xGeUy_qP0',
            ]);
        }
    }
}
