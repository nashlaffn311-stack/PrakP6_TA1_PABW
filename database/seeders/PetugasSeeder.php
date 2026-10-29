<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class PetugasSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        User::create([
            'name'     => 'Admin BPBD Bandung',
            'email'    => 'admin@bpbd.bandungkab.go.id',
            'password' => Hash::make('password123'),
        ]);

        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name'     => $faker->name(),
                'email'    => $faker->unique()->safeEmail(),
                'password' => Hash::make('petugas123'),
            ]);
        }
    }
}