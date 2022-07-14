<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Deseases;
use App\Models\Symptoms;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'name'=> 'Falah Insan Pratama',
            'email'=> 'falahinsan4@gmail.com',
            'level'=> 'Admin',
            'password' => Hash::make('FalahInsan')
        ]);

        Deseases::Create([
            'kodepenyakit'=>'P001',
            'namapenyakit'=>'HIV Stadium I'
        ]);
        Deseases::Create([
            'kodepenyakit'=>'P002',
            'namapenyakit'=>'HIV Stadium II'
        ]);
        Deseases::Create([
            'kodepenyakit'=>'P003',
            'namapenyakit'=>'HIV Stadium III'
        ]);
        Deseases::Create([
            'kodepenyakit'=>'P004',
            'namapenyakit'=>'AIDS'
        ]);


        Symptoms::Create([
            'kodegejala'=>'G001',
            'namagejala'=>'Kelompok resiko tinggi (seks bebas, pekerja seks(PS), gay, waria, pelanggan PS, pengguna narkoba suntik, anak punk, suntik, tato, tindik menggunakan alat tidak steril)'
        ]);
        Symptoms::Create([
            'kodegejala'=>'G002',
            'namagejala'=>'Pasangan kelompok resiko tinggi/ pasangan ODHA (orang yang terkena HIV/AIDS)'
        ]);
        Symptoms::Create([
            'kodegejala'=>'G003',
            'namagejala'=>'Memiliki garis keturunan HIV/AIDS'
        ]);
        Symptoms::Create([
            'kodegejala'=>'G004',
            'namagejala'=>'Terjadi penurunan berat badan lebih dari 10% dari berat badan semula dengan diare kronis yang berlangsung selama 1 bulan'
        ]);
        Symptoms::Create([
            'kodegejala'=>'G005',
            'namagejala'=>'Sering berkeringat pada malam hari tanpa sebab dalam jangka waktu yang lama'
        ]);
        Symptoms::Create([
            'kodegejala'=>'G006',
            'namagejala'=>'Terjadi pembengkakan kelenjar tanpa sebab'
        ]);
        Symptoms::Create([
            'kodegejala'=>'G007',
            'namagejala'=>'Lelah/lesu secara berkelanjutan tanpa diketahui penyebabnya'
        ]);
        Symptoms::Create([
            'kodegejala'=>'G008',
            'namagejala'=>'Timbul luka disekitar mulut dan sariawan yang terus berulang'
        ]);
        Symptoms::Create([
            'kodegejala'=>'G009',
            'namagejala'=>'Muncul bintil berisi air pada tubuh dan terasa nyeri dalam waktu yang lama (Herpes Zoster)'
        ]);
        Symptoms::Create([
            'kodegejala'=>'G010',
            'namagejala'=>'Mengalami infeksi saluran pernafasan yang terus berulang (sinusitis, tonsilitis, otitis media, faringitis) dan mengalami batuk berdarah (TB Paru)'
        ]);
        Symptoms::Create([
            'kodegejala'=>'G011',
            'namagejala'=>'Mengalami anemia tanpa diketahui penyababnya'
        ]);
        Symptoms::Create([
            'kodegejala'=>'G012',
            'namagejala'=>'Muncul bercak putih pada rongga mulut, kemerahan, perasaan seperti kapas dimulut, nyeri saat makan atau menelan, dan adanya retak atau kemerahan di sudut mulut (oral hairy leukoplakia)'
        ]);
        Symptoms::Create([
            'kodegejala'=>'G013',
            'namagejala'=>'Demam tanpa sebab selama lebih dari 1 bulan'
        ]);
        Symptoms::Create([
            'kodegejala'=>'G014',
            'namagejala'=>'Mengalami gangguan syarat (kesulitan berkonsentrasi/hilang ingatan)'
        ]);
        Symptoms::Create([
            'kodegejala'=>'G015',
            'namagejala'=>'Nyeri pada sendi/otot secara berkelanjutan tanpa diketahui penyebabnya. Kemudian mengalami keringat dingin, badan terasa lemas, mual'
        ]);
        Symptoms::Create([
            'kodegejala'=>'G016',
            'namagejala'=>'Mudah memar/berdarah tanpa sebab'
        ]);
    }
}
