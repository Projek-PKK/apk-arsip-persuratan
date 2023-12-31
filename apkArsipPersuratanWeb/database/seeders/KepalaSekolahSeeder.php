<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KepalaSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kepala_sekolah')->insert([
            [
                'id_kepala_sekolah' => '01',
                'nama_kepala_sekolah' => 'Agus Priyatmono Nugroho,S.Pd.M.Si',
                'golongan_kepala_sekolah' => 'Pembina Tk.1',
                'nip_kepala_sekolah' => '196708311990031003',
                'tanda_tangan' => 'ttd.png',
            ],
        ]);
    }
}
