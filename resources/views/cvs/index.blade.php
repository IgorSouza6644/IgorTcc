

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
    
    <div class="grid grid-cols-3 gap-0.1">
        @foreach ($cvs as $Cvs)
            <div class="flex items-center h-screen w-full justify-center">

                <div class="max-w-xs">
                    <div class="bg-white shadow-xl rounded-lg py-3">
                        <div class="photo-wrapper p-2">
                            <img class="w-32 h-32 rounded-full mx-auto" src="https://icon-library.com/images/windows-8-user-icon/windows-8-user-icon-10.jpg">
                        </div>
                        <div class="p-3" >
                            <h3 class="text-center text-xl text-gray-900 font-medium leading-8">{{  $Cvs->nome}}</h3>
                            <div class="text-center text-gray-400 text-xs font-semibold">
                                <p>{{  $Cvs->formacao}}</p>
                            </div>
                            <table class="text-xs my-3">
                                <tbody><tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold">Cidade-UF</td>
                                    <td class="px-2 py-2">{{  $Cvs->localidade}}</td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold">Contato</td>
                                    <td class="px-2 py-2">{{  $Cvs->telefone}}</td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold">Email</td>
                                    <td class="px-2 py-2">{{  $Cvs->email}}</td>
                                </tr>
                            </tbody></table>
                
                            <div class="text-center my-3">
                                <a class="text-xs text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="#">Currículo completo</a>
                            </div>
                
                        </div>
                    </div>
                </div>
                
                </div>            
        @endforeach 
        </div>
    </div>

</x-app-layout>









{{--             
                {{  $Cvs->nome}}
                {{  $Cvs->localidade}}
                {{  $Cvs->email}}
                {{  $Cvs->telefone}}
                {{  $Cvs->idade}}
                {{  $Cvs->formacao}}
                {{  $Cvs->experienciauser}}
                {{  $Cvs->interesseuser}}
                {{  $Cvs->salariouser}} --}}