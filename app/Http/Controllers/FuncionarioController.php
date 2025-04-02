<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionario.dashboard', compact('funcionarios'));
    }

    public function create()
    {
        return view('funcionario.create');
    }


    public function store(Request $request)
    {

        $request->merge([
            'cpf' => preg_replace('/\D/', '', $request->cpf),
            'telefone' => preg_replace('/\D/', '', $request->telefone),
        ]);

        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|unique:funcionarios,cpf|regex:/^\d{11}$/',
            'data_nascimento' => 'required|date',
            'telefone' => 'required|regex:/^\d{10,11}$/',
            'genero' => 'required|in:Masculino,Feminino,Outro',
        ], [
            'cpf.required' => 'O CPF é obrigatório.',
            'cpf.unique' => 'Este CPF já está cadastrado.',
            'cpf.regex' => 'O CPF deve conter exatamente 11 números.',
        ]);

        Funcionario::create($request->all());

        return redirect()->route('funcionario.dashboard')->with('success', 'Funcionário cadastrado com sucesso!');
    }

    public function edit(Funcionario $funcionario)
    {
        return view('funcionario.edit', compact('funcionario'));
    }

    public function update(Request $request, Funcionario $funcionario)
    {
        $request->merge([
            'cpf' => preg_replace('/\D/', '', $request->cpf),
            'telefone' => preg_replace('/\D/', '', $request->telefone),
        ]);

        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|unique:funcionarios,cpf,' . $funcionario->id . '|regex:/^\d{11}$/',
            'data_nascimento' => 'required|date',
            'telefone' => 'required|regex:/^\d{10,11}$/',
            'genero' => 'required|in:Masculino,Feminino,Outro',
        ]);

        $funcionario->update($request->all());
    

        return redirect()->route('funcionario.dashboard')->with('success', 'Funcionário atualizado!');
    }

    public function destroy(Funcionario $funcionario)
    {
        $funcionario->delete();
        return redirect()->route('funcionario.dashboard')->with('success', 'Funcionário removido!');
    }
}
