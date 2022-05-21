


<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
      </head>

    <body class="antialiased">
        
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <?php if(Route::has('login')): ?>
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/dashboard')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Entrar</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrar</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
                
 
                    <div class="py-16 bg-white">
                        <div class="container m-auto px-6 space-y-8 md:px-12 lg:px-56">
                            <div class="m-auto text-center lg:w-7/12">
                                <h2 class="text-2xl text-gray-700 font-bold md:text-4xl">Empresas que possuem vagas aqui.</h2>
                            </div>
                            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4">
                                <div class="p-4">
                                    <img src="https://tailus.io/sources/blocks/company-site/preview/images/clients/airbnb.svg" class="" alt="">
                                </div>
                                <div class="p-4">
                                    <img src="https://tailus.io/sources/blocks/company-site/preview/images/clients/client-8.png" class="w-32 " alt="">
                                </div>
                                <div class="p-4">
                                    <img src="https://tailus.io/sources/blocks/company-site/preview/images/clients/client-3.png" class="w-32 " alt="">
                                </div>
                                <div class="p-4">
                                    <img src="https://tailus.io/sources/blocks/company-site/preview/images/clients/client-1.png" class="w-32 " alt="">
                                </div>
                                <div class="p-4">
                                    <img src="https://tailus.io/sources/blocks/company-site/preview/images/clients/tailus.svg" class="w-32" alt="">
                                </div>
                                <div class="p-4">
                                    <img src="https://tailus.io/sources/blocks/company-site/preview/images/clients/microsoft.svg" class="w-32" alt="">
                                </div>
                                <div class="p-4">
                                    <img src="https://tailus.io/sources/blocks/company-site/preview/images/clients/coty.svg" class="w-20" alt="">
                                </div>
                                <div class="p-4">
                                    <img src="https://tailus.io/sources/blocks/company-site/preview/images/clients/client-4.png" class="w-24" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="py-16 white">  
                    <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                        <h2 class="mb-12 text-center text-2xl text-gray-900 font-bold md:text-4xl">What's our customers say</h2>
                        <div class="grid gap-8 md:grid-rows-2 lg:grid-cols-2">
                          <div class="row-span-2 p-6 border border-gray-100 rounded-xl bg-gray-50 text-center sm:p-8">
                            <div class="h-full flex flex-col justify-center space-y-4">
                              <img class="w-20 h-20 mx-auto rounded-full" src="images/avatars/second_user.webp" alt="user avatar" height="220" width="220" loading="lazy">
                              <p class="text-gray-600 md:text-xl"> <span class="font-serif">"</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat repellat perspiciatis excepturi est. Non ipsum iusto aliquam consequatur repellat provident, omnis ut, sapiente voluptates veritatis cum deleniti repudiandae ad doloribus. <span class="font-serif">"</span></p>
                              <div>
                                  <h6 class="text-lg font-semibold leading-none">Jane Doe</h6>
                                  <span class="text-xs text-gray-500">Product Designer</span>
                              </div>
                            </div>
                          </div>
                
                          <div class="p-6 border border-gray-100 rounded-xl bg-gray-50 sm:flex sm:space-x-8 sm:p-8">
                            <img class="w-20 h-20 mx-auto rounded-full" src="images/avatars/first_user.webp" alt="user avatar" height="220" width="220" loading="lazy">
                            <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                              <p class="text-gray-600"> <span class="font-serif">"</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat repellat perspiciatis excepturi est. Non ipsum iusto aliquam consequatur repellat provident, omnis ut, sapiente voluptates veritatis cum deleniti repudiandae ad doloribus. <span class="font-serif">"</span></p>
                              <div>
                                  <h6 class="text-lg font-semibold leading-none">Jane Doe</h6>
                                  <span class="text-xs text-gray-500">Product Designer</span>
                              </div>
                            </div>
                          </div>
                          <div class="p-6 border border-gray-100 rounded-xl bg-gray-50 sm:flex sm:space-x-8 sm:p-8">
                            <img class="w-20 h-20 mx-auto rounded-full" src="images/avatars/third_user.webp" alt="user avatar" height="220" width="220" loading="lazy">
                            <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                              <p class="text-gray-600"> <span class="font-serif">"</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat repellat perspiciatis excepturi est. Non ipsum iusto aliquam consequatur repellat provident, omnis ut, sapiente voluptates veritatis cum deleniti repudiandae ad doloribus. <span class="font-serif">"</span></p>
                              <div>
                                  <h6 class="text-lg font-semibold leading-none">Jane Doe</h6>
                                  <span class="text-xs text-gray-500">Product Designer</span>
                              </div>
                            </div>
                          </div>
                          <div class="p-6 border border-gray-100 rounded-xl bg-gray-50 sm:flex sm:space-x-8 sm:p-8">
                            <img class="w-20 h-20 mx-auto rounded-full" src="images/avatars/first_user.webp" alt="user avatar" height="220" width="220" loading="lazy">
                            <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                              <p class="text-gray-600"> <span class="font-serif">"</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat repellat perspiciatis excepturi est. Non ipsum iusto aliquam consequatur repellat provident, omnis ut, sapiente voluptates veritatis cum deleniti repudiandae ad doloribus. <span class="font-serif">"</span></p>
                              <div>
                                  <h6 class="text-lg font-semibold leading-none">Jane Doe</h6>
                                  <span class="text-xs text-gray-500">Product Designer</span>
                              </div>
                            </div>
                          </div>
                          <div class="p-6 border border-gray-100 rounded-xl bg-gray-50 sm:flex sm:space-x-8 sm:p-8">
                            <img class="w-20 h-20 mx-auto rounded-full" src="images/avatars/first_user.webp" alt="user avatar" height="220" width="220" loading="lazy">
                            <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                              <p class="text-gray-600"> <span class="font-serif">"</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat repellat perspiciatis excepturi est. Non ipsum iusto aliquam consequatur repellat provident, omnis ut, sapiente voluptates veritatis cum deleniti repudiandae ad doloribus. <span class="font-serif">"</span></p>
                              <div>
                                  <h6 class="text-lg font-semibold leading-none">Jane Doe</h6>
                                  <span class="text-xs text-gray-500">Product Designer</span>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                                                
                
                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                       

                          
                            
                        </div>
                    </div>
                    

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v<?php echo e(Illuminate\Foundation\Application::VERSION); ?> (PHP v<?php echo e(PHP_VERSION); ?>)
                    </div>
                </div>
            </div>
        </div>
    </body>
</html><?php /**PATH C:\wamp64\www\projetoTcc\resources\views/welcome.blade.php ENDPATH**/ ?>