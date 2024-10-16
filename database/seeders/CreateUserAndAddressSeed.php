<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUserAndAddressSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
       DB::table("users")->insert([
        [
            "name" => "ENDREUS",
            "email" => "ENDREUS1@exemplo.com",
            "password" => Hash::make("123456"),
        ],
        [
            "name" => "END",
            "email" => "END@exemplo.com",
            "password" => Hash::make('1234567'),
        ],
    ]);
        DB::table('addresses')->insert([
        [
        "address" => "Rua dos sla n1"
        ],
        [
        "address" => "Rua dos sla n2"
        ]
        ]);

    }
}
