<?php

    use App\User;
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
        User::create([
            'name' => 'Divisa',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'user_type' => '3'
        ]
    );
    
        User::create([
            'name' => 'Gestor',
            'email' => 'gestor@gmail.com',
            'password' => bcrypt('gestor'),
            'user_type' => '2'
        ]
    );

        User::create([
            'name' => 'Funcionário',
            'email' => 'funcionario@gmail.com',
            'password' => bcrypt('funcionario'),
            'user_type' => '1'
        ]
    );
    }
}