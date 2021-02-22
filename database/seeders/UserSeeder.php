<?php

namespace Database\Seeders;

use App\Models\User;
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
        # Usuario personalizado
        User::create([
            'name' => 'Jhon Fabio Cardona',
            'email' => 'test@test.com',
            'password' => bcrypt('12345678'),
        ]);

        # 99 usuarios de prueba
        User::factory(99)->create();
    }
}
