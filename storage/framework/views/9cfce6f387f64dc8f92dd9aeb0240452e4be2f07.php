

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
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="<?php echo e(route('dashboard')); ?>">Voltar</a>
        </h2>
     <?php $__env->endSlot(); ?>



    
<div class="min-h-screen flex items-center justify-center px-4">
 
    
    <?php $__currentLoopData = $vagas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Vagas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>         
         
    
    <div class="max-w-4xl  bg-white w-full rounded-lg shadow-xl">
        <div class="p-3 border-b">
                    <div class="photo-wrapper p-2">
                        <?php if($Vagas->image): ?>
                        <img class="w-32 h-32 rounded-full mx-auto" src="<?php echo e(url("storage/vagas{$Vagas->image}")); ?>">
                    
                        <?php else: ?>
                        <img class="w-32 h-32 rounded-full mx-auto" src="<?php echo e(url("storage/generic/empresa.jpg")); ?>">
                    <?php endif; ?> 
                    <?php echo e($Vagas->image); ?>

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
                    <?php echo e($Vagas->nomeempresa); ?>

                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                   Localidade
                </p>
                <p>
                    <?php echo e($Vagas->localidadevaga); ?>

                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Cargo
                </p>
                <p>
                    <?php echo e($Vagas->nomevaga); ?>

                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Remuneração
                </p>
                <p>
                    <?php echo e($Vagas->salariovaga); ?>

                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                
                <p class="text-gray-600">
                    Descrição.
                </p>
                <p>
                    <?php echo e($Vagas->descricaovaga); ?>

                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Atividades
                </p>
                <p>
                    <?php echo e($Vagas->respvaga); ?>                
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Requisitos
                </p>
                <p>
                    <?php echo e($Vagas->reqvaga); ?>


                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Informações adicionais
                </p>
                <p>
                   <?php echo e($Vagas->infoadcvaga); ?>               
                </p>
            </div>
            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                        <br><br>  
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>









 <?php /**PATH C:\wamp64\www\projetoTcc\resources\views/vagas/index.blade.php ENDPATH**/ ?>