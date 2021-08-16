<?php

    use App\User;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\Config;

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
                    'user_type' => Config::get('constants.user_types.admin_user')
                ]
            );

            User::create([
                    'name' => 'Gestor',
                    'email' => 'gestor@gmail.com',
                    'username' => 'gestor',
                    'password' => bcrypt('gestor'),
                    'user_type' => '2'
                ]
            );

            User::create([
                    'name' => 'Funcionário',
                    'email' => 'funcionario@gmail.com',
                    'username' => 'funcionário',
                    'password' => bcrypt('funcionario'),
                    'user_type' => '1'
                ]
            );
        }
    }
