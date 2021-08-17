<?php

    use App\Credenciada;
    use Illuminate\Database\Seeder;

class CredenciadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Credenciada::create([
            'cnpj' => '67.939.110/0001-94',
            'inscricao_estadual' => '15-603528-6',
            'razao_social' => 'Razão Social LTDA',
            'telefone'=> '(93) 9200-0000',
            'email' => 'razao_social_ltda@razaosocial.com',
            'endereco' => 'Rua Teste, 700 Santarém',
            'active' => true,
            'user_id' => 2
        ]);
    }
}
