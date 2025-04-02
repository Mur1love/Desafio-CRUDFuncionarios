<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Novo Funcionário') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('funcionarios.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label class="block text-gray-700">Nome</label>
                            <input type="text" name="nome" value="{{ old('nome') }}" 
                                   class="w-full border-gray-300 rounded-lg shadow-sm" required>
                            @error('nome')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700">CPF</label>
                            <input id = "cpf" type="text" name="cpf" value="{{ old('cpf') }}" 
                                   class="w-full border-gray-300 rounded-lg shadow-sm" 
                                   required placeholder="000-000-000-00">
                            @error('cpf')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700">Data de Nascimento</label>
                            <input type="date" name="data_nascimento" value="{{ old('data_nascimento') }}" 
                                   class="w-full border-gray-300 rounded-lg shadow-sm" required>
                            @error('data_nascimento')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700">Telefone</label>
                            <input id = "telefone" type="text" name="telefone" value="{{ old('telefone') }}" 
                                   class="w-full border-gray-300 rounded-lg shadow-sm" 
                                   required placeholder="DDD + número">
                            @error('telefone')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700">Gênero</label>
                            <select name="genero" class="w-full border-gray-300 rounded-lg shadow-sm" required>
                                <option value="">Selecione...</option>panel-82-38
                                <option value="Masculino" {{ old('genero') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                <option value="Feminino" {{ old('genero') == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                                <option value="Outro" {{ old('genero') == 'Outro' ? 'selected' : '' }}>Outro</option>
                            </select>
                            @error('genero')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end mt-6">

                            <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-700 mr-4">
                                Salvar
                            </button>
                            <a href="{{ route('funcionario.dashboard') }}" 
                               class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-700">
                                Cancelar
                            </a>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelector("form").addEventListener("submit", function () {
                let cpf = document.getElementById("cpf");
                let telefone = document.getElementById("telefone");

                if (cpf) cpf.value = cpf.value.replace(/\D/g, "");
                if (telefone) telefone.value = telefone.value.replace(/\D/g, "");
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    window.$ = window.jQuery = require('jquery');
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#cpf').mask('000.000.000-00');
            $('#telefone').mask('(00) 00000-0000');
        });
    </script>
    @endpush


</x-app-layout>