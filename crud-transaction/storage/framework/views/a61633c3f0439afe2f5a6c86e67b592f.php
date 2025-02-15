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
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">No Transaksi</h3>
                        <p class="text-gray-600 dark:text-gray-400">#TRX-<?php echo e(date('Ymd')); ?>-001</p>
                    </div>
                    
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Tanggal</h3>
                        <p class="text-gray-600 dark:text-gray-400"><?php echo e(date('d F Y')); ?></p>
                    </div>

                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">No</th>
                                    <th scope="col" class="px-6 py-3">Produk</th>
                                    <th scope="col" class="px-6 py-3">Quantity</th>
                                    <th scope="col" class="px-6 py-3">Harga</th>
                                    <th scope="col" class="px-6 py-3">Total</th>
                                    <th scope="col" class="px-6 py-3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td colspan="6" class="px-6 py-4 text-center">
                                        Baris untuk data transaksi
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Add Transaction Button -->
                    <div class="mt-4">
                        <button type="button" 
                                x-data=""
                                x-on:click="$dispatch('open-modal', 'transactionModal')"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Tambah Transaksi
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('transaction.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php $__env->startPush('scripts'); ?>
    <script>
        window.addEventListener('open-modal', event => {
            document.getElementById(event.detail).querySelector('[x-data]').__x.$data.show = true;
        });
    </script>
    <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH /var/www/html/newtronic/crud-transaction/resources/views/transaction.blade.php ENDPATH**/ ?>