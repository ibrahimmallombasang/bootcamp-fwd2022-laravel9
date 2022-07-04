<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//panggil modelnya agar bisa akses tabel
use App\Models\MasterData\ConfigPayment;

//untuk mengakses fungsi DB (insert)
use illuminate\Support\Facades\DB;

class ConfigPaymentSeeder extends Seeder
{
    public function run()
    {
        //buat data
        $config_payment = [
            [
                'fee' => '150000',
                'vat' => '20', // %
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        //objek ConfigPayment dari model
        ConfigPayment::insert($config_payment);
    }
}
