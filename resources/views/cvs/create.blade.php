
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xs py-3 mr-8">
            <a href="{{route('dashboard')}}"> Voltar</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="text-2xl text-gray-700 font-bold md:text-4xl text-center ...">Registrando um currículo</p>
                </div>
            </div>
            <br>


           <form action="{{ route('cvs.store') }}" method="post">
                @csrf

            <div class="grid gap-6 mb-6 lg:grid-cols-2">
             <div>             
                <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome</label>
                <input type="text" name="nome" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div>             
                <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cidade-UF</label>
                <input type="text" name="localidade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div>             
                <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">E-mail</label>
                <input type="text" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div>             
                <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Contato</label>
                <input type="text" name="telefone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div>             
                <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Data de Nascimento</label>
                <input type="text" name="idade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div>             
                <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Formação Acadêmica</label>
                <input type="text" name="formacao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div>             
                <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pretenção Salarial</label>
                <input type="text" name="salariouser" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <br><br>
        </div>
        <div>
            <div>             
                <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Experiência Profissional</label>
                <textarea  type="text" name="experienciauser" class=" description bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
            </div>
            <div>             
                <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Buscas e Interesses</label>
                <textarea type="text" name="interesseuser" class="description bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
            </div>
             
            <br>
               
             <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Salvar</button>
           </form>
        </div>
    </div>
</x-app-layout>







