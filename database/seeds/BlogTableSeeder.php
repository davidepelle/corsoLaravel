<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;


class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $id = $users[0]->id;

        DB::table('blog')->insert([[
            'titolo' => "ciao com'è?",
            'contenuto' => ' fg hd ghfd gh fghfgh fg',
            'user_id' => $id,
        ], [
            'titolo' => "ciao comsegsrtyè?",
            'contenuto' => ' fg hd ghfdstrhdthjeer gh fghfgh fg',
            'user_id' => $id,
        ], [
            'titolo' => "cisehserhywerygywhgrthertom'è?",
            'contenuto' => ' fg hdehrterhjeyetfghfgh fg',
            'user_id' => $id,
        ]]);
    }
}
