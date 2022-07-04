<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\ManagementAccess\Role;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User id->1 (Super Admin) mendapat Role id->1 (Super Admin)
        //sync mensinkronisasi data dalam tabel dengan parameter id
        //sync akan hanya menyisakan data (otomatis menambah/mengurangi) sesuai id yang dimasukkan
        //docs: collection
        User::findOrFail(1)->role()->sync(1);
    }
}
