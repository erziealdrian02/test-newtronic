<?php if (isset($component)) { $__componentOriginalf92e416cfa6805a9d886e334e101b829 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf92e416cfa6805a9d886e334e101b829 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modalForm','data' => ['id' => 'transactionModal','maxWidth' => '2xl']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modalForm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'transactionModal','maxWidth' => '2xl']); ?>
    <div class="px-6 py-4">
        <div class="text-lg font-medium text-gray-900 dark:text-gray-100">
            <?php echo e(__('Tambah Transaksi')); ?>

        </div>

        <div class="mt-4">
            <form id="transactionForm">
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Produk</label>
                        <input type="text" name="product" id="product" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                    </div>
                    <div>
                        <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                        <input type="number" name="quantity" id="quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                    </div>
                    <div>
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                        <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 dark:bg-gray-800 text-right">
        <button type="button" x-on:click="show = false" class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150 mr-3">
            Cancel
        </button>
        <button type="submit" form="transactionForm" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
            Simpan
        </button>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf92e416cfa6805a9d886e334e101b829)): ?>
<?php $attributes = $__attributesOriginalf92e416cfa6805a9d886e334e101b829; ?>
<?php unset($__attributesOriginalf92e416cfa6805a9d886e334e101b829); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf92e416cfa6805a9d886e334e101b829)): ?>
<?php $component = $__componentOriginalf92e416cfa6805a9d886e334e101b829; ?>
<?php unset($__componentOriginalf92e416cfa6805a9d886e334e101b829); ?>
<?php endif; ?><?php /**PATH /var/www/html/newtronic/crud-transaction/resources/views/transaction/form.blade.php ENDPATH**/ ?>