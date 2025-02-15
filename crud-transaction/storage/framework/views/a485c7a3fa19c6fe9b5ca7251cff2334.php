<!-- Button trigger -->
<button 
    @click="$el.closest('div').querySelector('[x-data]').__x.$data.open = true"
    type="button" 
    class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600"
>
    Buka Modal
</button>

<!-- Modal -->
<?php if (isset($component)) { $__componentOriginalf92e416cfa6805a9d886e334e101b829 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf92e416cfa6805a9d886e334e101b829 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modalForm','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modalForm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="p-6">
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            Judul Modal
        </h2>

        <div class="mt-4">
            Konten modal Anda di sini...
        </div>

        <div class="mt-6 flex justify-end">
            <button
                @click="open = false"
                type="button"
                class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 mr-2"
            >
                Cancel
            </button>
            <button
                type="button"
                class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600"
            >
                Simpan
            </button>
        </div>
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
<?php endif; ?><?php /**PATH /home/erzie-aldrian/Documents/newtronic/crud-transaction/resources/views/transaction/form.blade.php ENDPATH**/ ?>