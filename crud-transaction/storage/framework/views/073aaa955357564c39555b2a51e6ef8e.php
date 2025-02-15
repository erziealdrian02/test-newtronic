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
            <?php echo e(__('Transaction')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <?php echo $__env->make('transaction.add-transaction-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    
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
                    <?php if(request()->has('success')): ?>  
                        <div class="bg-emerald-600 text-white font-bold rounded-t px-4 py-2">  
                            <?php echo e(request()->get('success')); ?>  
                        </div>  
                    <?php endif; ?>  

                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 text-center py-3"></th>
                                    <th scope="col" class="px-6 text-center py-3">No</th>
                                    <th scope="col" class="px-6 text-center py-3">Kode Transaksi</th>
                                    <th scope="col" class="px-6 text-center py-3">Tanggal</th>
                                    <th scope="col" class="px-6 text-center py-3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($AllMasterTransaction->isEmpty()): ?>  
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">  
                                        <td colspan="5" class="px-6 py-4 text-center">  
                                            Tidak ada data transaksi yang tersedia.  
                                        </td>  
                                    </tr>  
                                <?php else: ?>  
                                <?php $__currentLoopData = $AllMasterTransaction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                                    <tr onclick="toggleDetails('details-<?php echo e($transaksi->id); ?>')" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:dark:bg-gray-600 cursor-pointer">
                                        <td class="px-6 py-4 text-center flex items-center justify-center">  
                                            <svg id="icon-<?php echo e($transaksi->id); ?>" class="transition-transform duration-300 fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">  
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />  
                                            </svg>  
                                        </td> 
                                        <td class="px-6 py-4 text-center"><?php echo e($loop->iteration); ?></td>
                                        <td class="px-6 py-4 text-center"><?php echo e($transaksi->kode_transaksi); ?></td>
                                        <td class="px-6 py-4 text-center"><?php echo e($transaksi->tanggal); ?></td>   
                                        <td class="px-6 py-4 text-center">
                                            <?php if (isset($component)) { $__componentOriginal656e8c5ea4d9a4fa173298297bfe3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal656e8c5ea4d9a4fa173298297bfe3f11 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.danger-button','data' => ['type' => 'button','class' => 'ms-3','onclick' => 'confirmDelete('.e($transaksi->id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('danger-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','class' => 'ms-3','onclick' => 'confirmDelete('.e($transaksi->id).')']); ?>  
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
                                            
                                            <form id="delete-form-<?php echo e($transaksi->id); ?>" action="<?php echo e(route('transaction.deleteTransaction', $transaksi->id)); ?>" method="POST" style="display: none;">  
                                                <?php echo csrf_field(); ?>  
                                                <?php echo method_field('DELETE'); ?>  
                                            </form>                                              
                                        </td>   
                                    </tr>
                                    <!-- Detail Row -->
                                    <tr id="details-<?php echo e($transaksi->id); ?>" class="hidden bg-gray-50 dark:bg-gray-900 ">
                                        <td colspan="5" class="px-6 py-4">
                                            <div class="mb-4 flex justify-between items-center">
                                                <div>
                                                    <h3 class="text-lg font-semibold">No Transaksi</h3>
                                                    <p class="text-gray-600 dark:text-gray-400"><?php echo e($transaksi->kode_transaksi); ?></p>
                                                </div>
                                                <?php echo $__env->make('transaction.add-product-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </div>
                                            
                                            <div class="mb-4">
                                                <h3 class="text-lg font-semibold">Tanggal</h3>
                                                <p class="text-gray-600 dark:text-gray-400"><?php echo e($transaksi->tanggal); ?></p>
                                            </div>
                                            <div class="relative overflow-x-auto">
                                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                        <tr>
                                                            <th scope="col" class="px-6 text-center py-3">No</th>
                                                            <th scope="col" class="px-6 text-center py-3">Produk</th>
                                                            <th scope="col" class="px-6 text-center py-3">Quantity</th>
                                                            <th scope="col" class="px-6 text-center py-3">Harga</th>
                                                            <th scope="col" class="px-6 text-center py-3">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if($transaksi->detailTransaksi->isEmpty()): ?>  
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">  
                                                                <td colspan="5" class="px-6 py-4 text-center">Tidak ada data transaksi yang tersedia.</td>  
                                                            </tr>  
                                                        <?php else: ?>  
                                                            <?php $__currentLoopData = $transaksi->detailTransaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">  
                                                                    <td class="px-6 py-4 text-center"><?php echo e($loop->iteration); ?></td>
                                                                    <td class="px-6 py-4 text-center"><?php echo e($detail->produk->produk); ?></td>
                                                                    <td class="px-6 py-4 text-center"><?php echo e($detail->quantity); ?></td>  
                                                                    <td class="px-6 py-4 text-center">Rp. <?php echo e(number_format($detail->produk->harga, 0, ',', '.')); ?></td>
                                                                    <td class="px-6 py-4 text-center">Rp. <?php echo e(number_format($detail->produk->harga * $detail->quantity, 0, ',', '.')); ?></td>
                                                                </tr>  
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                                        <?php endif; ?>  
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                             
                                <?php endif; ?>  
                            </tbody>
                            
                        </table>
                    </div>
                    
                    <script>  
                        function toggleDetails(detailsId) {  
                            const detailsRow = document.getElementById(detailsId);  
                            const iconId = 'icon-' + detailsId.split('-')[1];  
                            const icon = document.getElementById(iconId);  
                            
                            if (detailsRow.classList.contains('hidden')) {  
                                detailsRow.classList.remove('hidden');  
                                icon.classList.add('rotate-180'); // Tambahkan kelas untuk memutar  
                            } else {  
                                detailsRow.classList.add('hidden');  
                                icon.classList.remove('rotate-180'); // Hapus kelas untuk kembali ke posisi semula  
                            }  
                        }  
                    </script> 

                    <script>  
                        function confirmDelete(transaksiId) {  
                            if (confirm('Apakah Anda yakin ingin menghapus item ini?')) {  
                                document.getElementById('delete-form-' + transaksiId).submit();  
                            }  
                        }  
                    </script>
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
<?php endif; ?><?php /**PATH /home/erzie-aldrian/Documents/newtronic/crud-transaction/resources/views/transaction.blade.php ENDPATH**/ ?>