<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;
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
        $admin = new Admin();
        $admin->name = "superadmin";
        $admin->username = "superadmin";
        $admin->email = "superadmin@gmail.com";
        $admin->password = Hash::make('superadmin123');
        $admin->save();
        $admin->assignRole('superadmin');
    }
}