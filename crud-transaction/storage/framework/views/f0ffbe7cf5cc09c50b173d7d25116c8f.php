<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <?php echo e(__('Product')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" x-data="{ 
                    isEdit: false,
                    productName: '', 
                    productStock: '',
                    productPrice: '',
                    productId: '',

                    initEdit(transaksi) {
                        this.isEdit = true;
                        this.productName = transaksi.produk;
                        this.productStock = transaksi.stok;
                        this.productPrice = transaksi.harga;
                        this.productId = transaksi.id;
                        this.$dispatch('open-modal', 'product-modal');
                    }
                }">

                    
                    <div class="mb-4">
                        <?php echo $__env->make('product.add-newProduct-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>

                    
                    <?php if(session('success')): ?>  
                        <div class="bg-emerald-600 text-white font-bold rounded-t px-4 py-2">  
                            <?php echo e(session('success')); ?>  
                        </div>  
                    <?php endif; ?>  
                    <?php if(session('error')): ?>  
                        <div class="bg-red-600 text-white font-bold rounded-t px-4 py-2">  
                            <?php echo e(session('error')); ?>  
                        </div>  
                    <?php endif; ?> 
                    
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-100 uppercase bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th class="px-6 py-2 text-center">No</th>
                                    <th class="px-6 py-3 text-center">Name Product</th>
                                    <th class="px-6 py-3 text-center">Quantity</th>
                                    <th class="px-6 py-3 text-center">Price</th>
                                    <th class="px-6 py-3 text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $produkList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>  
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-2 text-center"><?php echo e($loop->iteration); ?></td>
                                        <td class="px-6 py-4 text-center"><?php echo e($transaksi->produk); ?></td>
                                        <td class="px-6 py-4 text-center"><?php echo e($transaksi->stok); ?></td>   
                                        <td class="px-6 py-4 text-center">Rp. <?php echo e(number_format($transaksi->harga, 0, ',', '.')); ?></td>   
                                        <td class="px-6 py-4 text-center">
                                            
                                            <?php if (isset($component)) { $__componentOriginal9163ec903cfa8e9a1488058f2578df23 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9163ec903cfa8e9a1488058f2578df23 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.warning-button','data' => ['xOn:click' => 'initEdit({ 
                                                produk: \''.e($transaksi->produk).'\', 
                                                stok: \''.e($transaksi->stok).'\', 
                                                harga: \''.e($transaksi->harga).'\', 
                                                id: \''.e($transaksi->id).'\' 
                                            })']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('warning-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-on:click' => 'initEdit({ 
                                                produk: \''.e($transaksi->produk).'\', 
                                                stok: \''.e($transaksi->stok).'\', 
                                                harga: \''.e($transaksi->harga).'\', 
                                                id: \''.e($transaksi->id).'\' 
                                            })']); ?>
                                                <i class="fas fa-edit"></i>
                                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9163ec903cfa8e9a1488058f2578df23)): ?>
<?php $attributes = $__attributesOriginal9163ec903cfa8e9a1488058f2578df23; ?>
<?php unset($__attributesOriginal9163ec903cfa8e9a1488058f2578df23); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9163ec903cfa8e9a1488058f2578df23)): ?>
<?php $component = $__componentOriginal9163ec903cfa8e9a1488058f2578df23; ?>
<?php unset($__componentOriginal9163ec903cfa8e9a1488058f2578df23); ?>
<?php endif; ?>
                                        
                                            
                                            <?php if (isset($component)) { $__componentOriginal656e8c5ea4d9a4fa173298297bfe3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal656e8c5ea4d9a4fa173298297bfe3f11 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.danger-button','data' => ['onclick' => 'confirmDelete('.e($transaksi->id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('danger-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['onclick' => 'confirmDelete('.e($transaksi->id).')']); ?>  
                                                <i class="fas fa-trash"></i>
                                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal656e8c5ea4d9a4fa173298297bfe3f11)): ?>
<?php $attributes = $__attributesOriginal656e8c5ea4d9a4fa173298297bfe3f11; ?>
<?php unset($__attributesOriginal656e8c5ea4d9a4fa173298297bfe3f11); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal656e8c5ea4d9a4fa173298297bfe3f11)): ?>
<?php $component = $__componentOriginal656e8c5ea4d9a4fa173298297bfe3f11; ?>
<?php unset($__componentOriginal656e8c5ea4d9a4fa173298297bfe3f11); ?>
<?php endif; ?>  
                                        
                                            
                                            <form id="delete-form-<?php echo e($transaksi->id); ?>" action="<?php echo e(route('product.delete', $transaksi->id)); ?>" method="POST" style="display: none;">  
                                                <?php echo csrf_field(); ?>  
                                                <?php echo method_field('DELETE'); ?>  
                                            </form>  
                                        </td>  
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>  
                                    <tr class="bg-white border-b dark:bg-gray-800">
                                        <td colspan="5" class="px-6 py-4 text-center">Tidak ada data transaksi.</td>  
                                    </tr>  
                                <?php endif; ?>  
                            </tbody>
                        </table>
                    </div>

                    
                    <script>  
                        function confirmDelete(transaksiId) {  
                            if (confirm('Apakah Anda yakin ingin menghapus transaksi ini?')) {  
                                document.getElementById('delete-form-' + transaksiId).submit();  
                            }  
                        }  
                    </script>

                    
                    <?php echo $__env->make('product.edit-editProduct-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /home/erzie-aldrian/Documents/newtronic/crud-transaction/resources/views/product.blade.php ENDPATH**/ ?>