<?php

    use App\Especie;
    use Illuminate\Database\Seeder;

class EspecieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Especie::create([
            'especie'=>'Gato'
        ]);
        Especie::create([
            'especie'=>'Bitpull'
        ]);
        Especie::create([
            'especie'=>'Cachorro Caramelo'
        ]);
        Especie::create([
            'especie'=>'Sabiá'
        ]);
        Especie::create([
            'especie'=>'Gato Persa'
        ]);
    }
}
