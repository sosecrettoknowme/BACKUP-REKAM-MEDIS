<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Ruang;
use App\Models\Obat;
use App\Models\Rekam;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Dokter::create([
            'name_dokter' => 'dr. YULI RILDA',
            'spesialis' => 'Dokter Umum',
            'alamat' => 'Koto Gadang',
            'no_telp' => '089328372823'
        ]);
        Dokter::create([
            'name_dokter' => 'drg. DINY RAHMAWATI',
            'spesialis' => 'Dokter Umum',
            'alamat' => 'Pasar Laban',
            'no_telp' => '08967282912'
        ]);
        Dokter::create([
            'name_dokter' => 'drg. ORI SUHANDA',
            'spesialis' => 'Dokter Umum',
            'alamat' => 'Jaruai',
            'no_telp' => '089628236232'
        ]);


        
        Pasien::create([
            'name_pasien' => 'INDRA SUTRISNA',
            'alamat_pasien' => 'Jaruai',
            'no_telp_pasien' => '089727616232',
            'jenis_kelamin_pasien' => 'Laki-Laki'
          ]);

          Pasien::create([
            'name_pasien' => 'AISYAH HASNA SHOFIYA',
            'alamat_pasien' => 'Timbalun',
            'no_telp_pasien' => '089129832883',
            'jenis_kelamin_pasien' => 'Perempuan'
          ]);

          Pasien::create([
            'name_pasien' => 'MONTIRNAR',
            'alamat_pasien' => 'Pasar Laban',
            'no_telp_pasien' => '089738173132',
            'jenis_kelamin_pasien' => 'Laki-Laki'
          ]);



          Ruang::create([
            'name_ruang' => 'UMUM',
            'ket_ruang' => 'Poli untuk umum'
          ]);

          Ruang::create([
            'name_ruang' => 'POLI ANAK',
            'ket_ruang' => 'Poli untuk anak-anak'
          ]);
          Ruang::create([
            'name_ruang' => 'POLI LANSIA',
            'ket_ruang' => 'Poli untuk lansia'
          ]);
          Ruang::create([
            'name_ruang' => 'GIGI',
            'ket_ruang' => 'Poli untuk pengeboatan gigi'
          ]);


          Obat::create([
            'name_obat' => 'Parasetamol tablet 500 mg',
            'ket_obat' => '-'
          ]);
          Obat::create([
            'name_obat' => 'Amlodipin 10 mg tablet',
            'ket_obat' => '-'
          ]);
          Obat::create([
            'name_obat' => 'Antasida DOEN tablet, kombinasi',
            'ket_obat' => '-'
          ]);
          Obat::create([
            'name_obat' => 'Ibuprofen tablet 400 mg',
            'ket_obat' => '-'
          ]);

          Rekam::create([
            'kd_rm' => '00288477',
            'tgl_periksa' => '10-01-2022',
            'pasien_id' => 1,
            'keluhan' => 'Batuk Flu Demam',
            'dokter_id' => 1,
            'diagnosa' => 'Acute upper respiratory infection, unspecified (J06.9)',
            'obat_id' => 1,
            'ruang_id' => 1
          ]);

          
    }
}
