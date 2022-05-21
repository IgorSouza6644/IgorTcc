

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
    
    <div class="grid grid-cols-3 gap-0.1">
        <?php $__currentLoopData = $cvs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Cvs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex items-center h-screen w-full justify-center">

                <div class="max-w-xs">
                    <div class="bg-white shadow-xl rounded-lg py-3">
                        <div class="photo-wrapper p-2">
                            <img class="w-32 h-32 rounded-full mx-auto" src="https://icon-library.com/images/windows-8-user-icon/windows-8-user-icon-10.jpg">
                        </div>
                        <div class="p-3" >
                            <h3 class="text-center text-xl text-gray-900 font-medium leading-8"><?php echo e($Cvs->nome); ?></h3>
                            <div class="text-center text-gray-400 text-xs font-semibold">
                                <p><?php echo e($Cvs->formacao); ?></p>
                            </div>
                            <table class="text-xs my-3">
                                <tbody><tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold">Cidade-UF</td>
                                    <td class="px-2 py-2"><?php echo e($Cvs->localidade); ?></td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold">Contato</td>
                                    <td class="px-2 py-2"><?php echo e($Cvs->telefone); ?></td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold">Email</td>
                                    <td class="px-2 py-2"><?php echo e($Cvs->email); ?></td>
                                </tr>
                            </tbody></table>
                
                            <div class="text-center my-3">
                                <a class="text-xs text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="#">Currículo completo</a>
                            </div>
                
                        </div>
                    </div>
                </div>
                
                </div>            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>









<?php /**PATH C:\wamp64\www\projetoTcc\resources\views/cvs/index.blade.php ENDPATH**/ ?>