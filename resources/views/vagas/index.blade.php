

 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
  </head>



  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{route('dashboard')}}">Voltar</a>
        </h2>
    </x-slot>



    
<div class="min-h-screen flex items-center justify-center px-4">
 
    
    @foreach ($vagas as $Vagas)         
         
    
    <div class="max-w-4xl  bg-white w-full rounded-lg shadow-xl">
        <div class="p-3 border-b">
                    <div class="photo-wrapper p-2">
                        @if($Vagas->image)
                        <img class="w-32 h-32 rounded-full mx-auto" src="{{ url("storage/vagas{$Vagas->image}") }}">
                    
                        @else
                        <img class="w-32 h-32 rounded-full mx-auto" src="{{ url("storage/generic/empresa.jpg") }}">
                    @endif 
                    {{$Vagas->image}}
                    </div>

            <h2 class="text-2xl ">
                Informações da Vaga
            </h2>
        </div>
        <div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Nome da Empresa
                </p>
                <p>
                    {{  $Vagas->nomeempresa}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                   Localidade
                </p>
                <p>
                    {{  $Vagas->localidadevaga}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Cargo
                </p>
                <p>
                    {{  $Vagas->nomevaga}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Remuneração
                </p>
                <p>
                    {{  $Vagas->salariovaga}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                
                <p class="text-gray-600">
                    Descrição.
                </p>
                <p>
                    {{$Vagas->descricaovaga}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Atividades
                </p>
                <p>
                    {{  $Vagas->respvaga}}                
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Requisitos
                </p>
                <p>
                    {{  $Vagas->reqvaga}}

                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Informações adicionais
                </p>
                <p>
                   {{  $Vagas->infoadcvaga}}               
                </p>
            </div>
            
                        @endforeach  
                        <br><br>  
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div>
</x-app-layout>








{{-- <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            
            <form action="{{route('vagas.index') }}" method="get">
                <input type="text" name="search" placeholder="Pesquisar"> 
                <button>Buscar</button>
        </div>
{{  $Vagas->descricaovaga}} 
        tentativa de um filtro
 --}}
 