<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();

        $client->name="Ivan";
        $client->phone_number = "6121081619";
        $client->email="ivan17@gmail.com";
        $client->save();

        $client = new Client();

        $client->name="Martin";
        $client->phone_number = "6121081555";
        $client->email="matin@gmail.com";
        $client->save();
    }
}
