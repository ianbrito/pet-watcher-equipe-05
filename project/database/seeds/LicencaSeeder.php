<?php

    use App\Licenca;
    use Illuminate\Database\Seeder;

    class LicencaSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //
            Licenca::create([
                'credenciada_id' => '1',
                'emissao' => '2021-07-01',
                'validade' => '2021-12-30',
                'active' => true
            ]);
        }
    }
