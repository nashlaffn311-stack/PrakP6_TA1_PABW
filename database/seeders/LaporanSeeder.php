<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Laporan;
use Faker\Factory as Faker;

class LaporanSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $kecamatanBandung = [
            'Dayeuhkolot',
            'Baleendah',
            'Bojongsoang',
            'Rancaekek',
            'Majalaya',
            'Ciparay',
            'Kutawaringin'
        ];

        for ($i = 0; $i < 15; $i++) {
            Laporan::create([
                'nama_pelapor' => $faker->name,
                'lokasi' => $faker->randomElement($kecamatanBandung),
                'tinggi_genangan' => $faker->numberBetween(10, 150),
                'tanggal_kejadian' => $faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
            ]);
        }
    }
}
