<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Funcionários') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Lista de Funcionários</h3>

                    @if(session('success'))
                        <div class="mb-4 text-green-600 font-medium">{{ session('success') }}</div>
                    @endif

                    <a href="{{ route('funcionarios.create') }}" 
                        class="inline-block mb-4 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-800">
                     Novo Funcionário
                    </a>



                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-300">
                            <thead class="bg-gray-100 border-b">
                                <tr>
                                    <th class="px-4 py-2 text-left">Nome</th>
                                    <th class="px-4 py-2 text-left">CPF</th>
                                    <th class="px-4 py-2 text-left">Data de Nascimento</th>
                                    <th class="px-4 py-2 text-left">Telefone</th>
                                    <th class="px-4 py-2 text-left">Gênero</th>
                                    <th class="px-4 py-2 text-left">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($funcionarios as $funcionario)
                                    <tr class="border-b">
                                        <td class="px-4 py-2">{{ $funcionario->nome }}</td>
                                        <td class="px-4 py-2">{{ $funcionario->cpf }}</td>
                                        <td class="px-4 py-2">{{ $funcionario->data_nascimento }}</td>
                                        <td class="px-4 py-2">{{ $funcionario->telefone }}</td>
                                        <td class="px-4 py-2">{{ $funcionario->genero }}</td>
                                        <td class="px-4 py-2">
                                        <a href="{{ route('funcionarios.edit', $funcionario->id) }}" 
                                            class="inline-flex justify-center items-center px-2 py-1 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 mr-2">
                                            Editar
                                        </a>
                                            <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="inline-flex justify-center items-center px-2 py-1 bg-red-600 text-white rounded-lg hover:bg-red-700"
                                                    onclick="return confirm('Tem certeza que deseja excluir?')">
                                                    Excluir
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
