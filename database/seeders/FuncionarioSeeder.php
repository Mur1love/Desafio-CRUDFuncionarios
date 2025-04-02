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
                'cpf' => '123.456.789-00',
                'data_nascimento' => '1990-05-15',
                'telefone' => '(11) 98765-4321',
                'genero' => 'Masculino',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Maria Oliveira',
                'cpf' => '987.654.321-00',
                'data_nascimento' => '1988-10-22',
                'telefone' => '(11) 92345-6789',
                'genero' => 'Feminino',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Carlos Souza',
                'cpf' => '555.666.777-88',
                'data_nascimento' => '1995-07-30',
                'telefone' => '(11) 93456-7890',
                'genero' => 'Masculino',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
