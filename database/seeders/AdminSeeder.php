<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = new Admin();
        $obj -> name = 'Admin';
        $obj -> email = 'admin@gmail.com';
        $obj -> password = Hash::make('123');
        $obj -> save();
    }
}
