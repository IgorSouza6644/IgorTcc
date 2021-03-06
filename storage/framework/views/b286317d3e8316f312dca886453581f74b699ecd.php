
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
  </head>


  <?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xs py-3 mr-8">
            <a href="<?php echo e(route('dashboard')); ?>"> Voltar</a>
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="text-2xl text-gray-700 font-bold md:text-4xl text-center ...">Registrando uma nova vaga</p>
                </div>
            </div>
            <br>



        <form action="<?php echo e(route('vagas.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

            <div class="grid gap-6 mb-6 lg:grid-cols-2">


                <label class="w-64 flex flex-col items-center px-1 py-1 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                    </svg>
                    <span class="mt-2 text-base leading-normal">Foto do Perfil</span>
                    <input type='file' name='image' class="hidden" />
                </label>
                <div>
                </div>  


                <div>             
                       <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome Empresa</label>
                       <input type="text" name="nomeempresa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                
                    </div>
                <div>             
                       <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Localiza????o da Vaga</label>
                       <input type="text" name="localidadevaga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>             
                       <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cargo</label>
                       <input type="text" name="nomevaga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <div>             
                     <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remunera????o</label>
                     <input type="text" name="salariovaga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              </div>
              
            </div>
            <div>
                <div>             
                    <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Descri????o</label>
                    <textarea  type="text" name="descricaovaga" class=" description bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    
             </div>
              <div>             
                     <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Atividades</label>
                     <textarea  type="text" name="respvaga" class=" description bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                     
              </div>
              

                <div>             
                     <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Requisitos</label>
                     <textarea  type="text" name="reqvaga" class=" description bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                     
              </div>
               
               
              <div>             
                     <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Informa????es Adicionais</label>
                     <textarea  type="text" name="infoadcvaga" class=" description bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    <br>
                </div>
                <div>
              </div>    

                   <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Salvar</button>
           </form>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>


<?php /**PATH C:\wamp64\www\projetoTcc\resources\views/vagas/create.blade.php ENDPATH**/ ?>