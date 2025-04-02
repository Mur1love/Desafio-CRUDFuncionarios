<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('funcionarios')->insert([
            [
                'nome' => 'João Silva',
                'cpf' => '12345678900',
                'data_nascimento' => '1990-05-15',
                'telefone' => '1198765-4321',
                'genero' => 'Masculino',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Maria Oliveira',
                'cpf' => '98765432100',
                'data_nascimento' => '1988-10-22',
                'telefone' => '11923456789',
                'genero' => 'Feminino',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Carlos Souza',
                'cpf' => '55566677788',
                'data_nascimento' => '1995-07-30',
                'telefone' => '11934567890',
                'genero' => 'Masculino',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
