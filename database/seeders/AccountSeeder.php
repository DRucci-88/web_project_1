<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Account::create([
            'role_id' => 1,
            'first_name' => 'admin',
            'middle_name'=> '',
            'last_name'=>'',
            'gender_id'=>1,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin12345'),
            'display_picture_link'=>'admin.png',

        ]);
        Account::create([
            'role_id' => 2,
            'first_name' => 'Levi',
            'middle_name'=> '',
            'last_name'=>'Ackerman',
            'gender_id'=> 1,
            'email' => 'levi@gmail.com',
            'password' => Hash::make('levi1234'),
            'display_picture_link'=>'levi.jpg',
        ]);

        Account::create([
            'role_id' => 2,
            'first_name' => 'Hanji',
            'middle_name'=> '',
            'last_name'=>'Gemas',
            'gender_id'=>2,
            'email' => 'hanji@gmail.com',
            'password' => Hash::make('hanji123'),
            'display_picture_link'=>'hanji.jpg',
        ]);

    }
}
