<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Invitado',
            'email' => Str::random(10).'@gmail.com',
            'identification_type' => 'identification_card',
            'identification_number' => '123456789',
            'role' => 'useruam',
            'phone' => '123456789',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Karen',
            'email' => Str::random(10).'@gmail.com',
            'identification_type' => 'identification_card',
            'identification_number' => '123456789',
            'role' => 'useruam',
            'phone' => '123456789',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Pablo',
            'email' => Str::random(10).'@gmail.com',
            'identification_type' => 'identification_card',
            'identification_number' => '123456789',
            'role' => 'useruam',
            'phone' => '123456789',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Sergio',
            'email' => Str::random(10).'@gmail.com',
            'identification_type' => 'identification_card',
            'identification_number' => '123456789',
            'role' => 'useruam',
            'phone' => '123456789',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Luisa',
            'email' => Str::random(10).'@gmail.com',
            'identification_type' => 'identification_card',
            'identification_number' => '123456789',
            'role' => 'useruam',
            'phone' => '123456789',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Santiago',
            'email' => Str::random(10).'@gmail.com',
            'identification_type' => 'identification_card',
            'identification_number' => '123456789',
            'role' => 'useruam',
            'phone' => '123456789',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Maria Paz',
            'email' => Str::random(10).'@gmail.com',
            'identification_type' => 'identification_card',
            'identification_number' => '123456789',
            'role' => 'useruam',
            'phone' => '123456789',
            'password' => Hash::make('password'),
        ]);
    }
}
