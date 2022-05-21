

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
    <!-- component -->
<div class="h-screen w-48 px-4 border-r bg-white">
    <div class="h-3/4 flex flex-col justify-around text-gray-500">
       <h3 class="pl-1 text-sm flex items-center py-2 mb-2 hover:bg-gray-100 hover:text-gray-700 transition duration-200 ease-in">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="black">
             <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
          </svg>
          <a class="hover:text-black transition duration-200 ease-linear" href="<?php echo e(route('dashboard')); ?>">Inicio</a>
       </h3>
       <h3 class="pl-1 text-sm flex items-center py-2 mb-2 hover:bg-gray-100 hover:text-gray-700 transition duration-200 ease-in">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="black">
           <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
        </svg>
        <a class="hover:text-black transition duration-200 ease-linear" href="<?php echo e(route('cvs.meuscvs')); ?>">Meus CVS cadastrados</a>
     </h3>
     <h3 class="pl-1 text-sm flex items-center py-2 mb-2 hover:bg-gray-100 hover:text-gray-700 transition duration-200 ease-in">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="black">
           <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd" />
        </svg>
        <a class="hover:text-black transition duration-200 ease-linear" href="<?php echo e(route('vagas.minhasvagas')); ?>">Minhas vagas cadastradas</a>
     </h3>
       <h3 class="pl-1 text-sm flex items-center py-2 mb-2 hover:bg-gray-100 hover:text-gray-700 transition duration-200 ease-in">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="black">
           <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
        </svg>
        <a class="hover:text-black transition duration-200 ease-linear" href="#">Dashboard</a>
     </h3>
       <h3>
       </h3>
       <h3>
    </h3>
    <h3>
    </h3>    
    </div>
 </div>




     <?php $__env->slot('header', null, []); ?> 
        
        
        <h2 class="bg-white px-8 pt-2">
            <div class="-mb-px flex justify-center">
                
                <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-semibold text-xs py-3 mr-8" href="<?php echo e(route('cvs.create')); ?>"> Registrar um currículo
                    
                </a>

                
                <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-semibold text-xs py-3 mr-8" href="<?php echo e(route('vagas.create')); ?>">Registrar uma vaga


                <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-semibold text-xs py-3 mr-8" href="<?php echo e(route('cvs.index')); ?>"> Visualizar candidatos disponíveis   
                </a>

                <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-semibold text-xs py-3" href="<?php echo e(route('vagas.index')); ?>">Visualizar vagas disponíveis
                    
                </a>
            </div>
        </h2>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
    

<?php /**PATH C:\wamp64\www\projetoTcc\resources\views/dashboard.blade.php ENDPATH**/ ?>