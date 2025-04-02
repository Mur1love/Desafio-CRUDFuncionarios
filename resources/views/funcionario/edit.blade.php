<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Funcionário') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label class="block text-black-700">Nome</label>
                            <input type="text" name="nome" value="{{ $funcionario->nome }}" class="w-full border-gray-300 rounded-lg shadow-sm" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-black-700">CPF</label>
                            <input id = "cpf" type="text" name="cpf" value="{{ $funcionario->cpf }}" class="w-full border-gray-300 rounded-lg shadow-sm" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-black-700">Data de Nascimento</label>
                            <input type="date" name="data_nascimento" value="{{ $funcionario->data_nascimento }}" class="w-full border-gray-300 rounded-lg shadow-sm" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-black-700">Telefone</label>
                            <input id="telefone" type="text" name="telefone" value="{{ $funcionario->telefone }}" class="w-full border-gray-300 rounded-lg shadow-sm" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-black-700">Gênero</label>
                            <select name="genero" class="w-full border-gray-300 rounded-lg shadow-sm" required>
                                <option value="Masculino" @if($funcionario->genero == 'Masculino') selected @endif>Masculino</option>
                                <option value="Feminino" @if($funcionario->genero == 'Feminino') selected @endif>Feminino</option>
                                <option value="Outro" @if($funcionario->genero == 'Outro') selected @endif>Outro</option>
                            </select>
                        </div>

                        <button type="submit" class="inline-flex justify-center items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700">
                            Atualizar
                        </button>

                        <a href="{{ route('funcionario.dashboard') }}" class=" inline-flex justify-center items-center ml-4 px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-700">
                            Cancelar
                        </a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#cpf').mask('000.000.000-00');
            $('#telefone').mask('(00) 00000-0000');
        });
    </script>
    @endpush
</x-app-layout>
