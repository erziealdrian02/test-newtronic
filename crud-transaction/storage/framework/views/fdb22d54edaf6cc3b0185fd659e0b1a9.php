<section class="space-y-6" x-data="{ 
    open: false, 
    items: [], 
    kodeTransaksi: '', 
    tanggalTransaksi: '',
    idTransaksi: '',
    initializeItems() {
    const details = <?php echo e(Js::from($transaksi->detailTransaksi ?? [])); ?>;
    this.items = details.map(detail => ({
        id_produk: detail.produk.id,
        quantity: detail.quantity,
        harga: detail.produk.harga
    }));
}
}">
    <?php if (isset($component)) { $__componentOriginalc7492c692dd0ef5b4adc5ba366482388 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc7492c692dd0ef5b4adc5ba366482388 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.info-button','data' => ['class' => 'mt-4','xOn:click.prevent' => '
            kodeTransaksi = \''.e($transaksi->kode_transaksi).'\'; 
            tanggalTransaksi = \''.e(date('Y-m-d', strtotime($transaksi->tanggal))).'\';
            idTransaksi = \''.e($transaksi->id).'\'; 
            initializeItems();
            console.log(\'Items:\', items); // Debugging
            $dispatch(\'open-modal\', \'add-product-modal\')
        ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('info-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-4','x-on:click.prevent' => '
            kodeTransaksi = \''.e($transaksi->kode_transaksi).'\'; 
            tanggalTransaksi = \''.e(date('Y-m-d', strtotime($transaksi->tanggal))).'\';
            idTransaksi = \''.e($transaksi->id).'\'; 
            initializeItems();
            console.log(\'Items:\', items); // Debugging
            $dispatch(\'open-modal\', \'add-product-modal\')
        ']); ?>
        <?php echo e(__('Edit Transaksi')); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc7492c692dd0ef5b4adc5ba366482388)): ?>
<?php $attributes = $__attributesOriginalc7492c692dd0ef5b4adc5ba366482388; ?>
<?php unset($__attributesOriginalc7492c692dd0ef5b4adc5ba366482388); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc7492c692dd0ef5b4adc5ba366482388)): ?>
<?php $component = $__componentOriginalc7492c692dd0ef5b4adc5ba366482388; ?>
<?php unset($__componentOriginalc7492c692dd0ef5b4adc5ba366482388); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['name' => 'add-product-modal','xShow' => 'open','focusable' => true,'maxWidth' => '4xl']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'add-product-modal','x-show' => 'open','focusable' => true,'maxWidth' => '4xl']); ?>
        <form method="POST" action="<?php echo e(route('transaction.storeProduct')); ?>" class="p-6">
            <?php echo csrf_field(); ?>

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                <?php echo e(__('Edit Transaksi')); ?> <span x-text="kodeTransaksi"></span>
            </h2>

            <!-- Input Kode Transaksi (Auto) -->
            <div class="mt-4">
                <?php if (isset($component)) { $__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => ['for' => 'kode_transaksi','value' => 'Kode Transaksi']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'kode_transaksi','value' => 'Kode Transaksi']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581)): ?>
<?php $attributes = $__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581; ?>
<?php unset($__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581)): ?>
<?php $component = $__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581; ?>
<?php unset($__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal18c21970322f9e5c938bc954620c12bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18c21970322f9e5c938bc954620c12bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['id' => 'kode_transaksi','name' => 'kode_transaksi','type' => 'text','class' => 'w-full','xModel' => 'kodeTransaksi','readonly' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'kode_transaksi','name' => 'kode_transaksi','type' => 'text','class' => 'w-full','x-model' => 'kodeTransaksi','readonly' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal18c21970322f9e5c938bc954620c12bb)): ?>
<?php $attributes = $__attributesOriginal18c21970322f9e5c938bc954620c12bb; ?>
<?php unset($__attributesOriginal18c21970322f9e5c938bc954620c12bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal18c21970322f9e5c938bc954620c12bb)): ?>
<?php $component = $__componentOriginal18c21970322f9e5c938bc954620c12bb; ?>
<?php unset($__componentOriginal18c21970322f9e5c938bc954620c12bb); ?>
<?php endif; ?>
            </div>    

            <!-- Input Tanggal Transaksi (Auto) -->
            <div class="mt-4">
                <?php if (isset($component)) { $__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => ['for' => 'tanggal','value' => 'Tanggal Transaksi']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'tanggal','value' => 'Tanggal Transaksi']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581)): ?>
<?php $attributes = $__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581; ?>
<?php unset($__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581)): ?>
<?php $component = $__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581; ?>
<?php unset($__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal18c21970322f9e5c938bc954620c12bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18c21970322f9e5c938bc954620c12bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['id' => 'tanggal','name' => 'tanggal','type' => 'date','class' => 'w-full','xModel' => 'tanggalTransaksi','readonly' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'tanggal','name' => 'tanggal','type' => 'date','class' => 'w-full','x-model' => 'tanggalTransaksi','readonly' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal18c21970322f9e5c938bc954620c12bb)): ?>
<?php $attributes = $__attributesOriginal18c21970322f9e5c938bc954620c12bb; ?>
<?php unset($__attributesOriginal18c21970322f9e5c938bc954620c12bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal18c21970322f9e5c938bc954620c12bb)): ?>
<?php $component = $__componentOriginal18c21970322f9e5c938bc954620c12bb; ?>
<?php unset($__componentOriginal18c21970322f9e5c938bc954620c12bb); ?>
<?php endif; ?>
            </div>

            <script>
                const produkStokMapProduct = <?php echo json_encode($produkList->pluck('stok', 'id'), 512) ?>;
                const produkHargaMapProduct = <?php echo json_encode($produkList->pluck('harga', 'id'), 512) ?>;
            </script>

            <!-- Produk List -->
            <div class="mt-4">
                <h3 class="text-md font-semibold">Daftar Produk</h3>
                <table class="w-full text-sm text-gray-500 dark:text-gray-400 mt-2">
                    <thead>
                        <tr class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <th class="px-4 py-2">Produk</th>
                            <th class="px-4 py-2 text-center">Quantity</th>
                            <th class="px-4 py-2 text-center">Harga</th>
                            <th class="px-4 py-2 text-center">Total</th>
                            <th class="px-4 py-2 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <template x-for="(item, index) in items" :key="index">
                            <tr>
                                <td class="px-4 py-2">
                                    <?php if (isset($component)) { $__componentOriginalfbd96fa9ceb0dd232d7f99b6c6b44c36 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfbd96fa9ceb0dd232d7f99b6c6b44c36 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select-input','data' => ['name' => 'produk[]','xModel' => 'item.id_produk','xOn:change' => '
                                            item.harga = produkHargaMapTransaction[item.id_produk] || 0;
                                            item.maxStok = produkStokMapTransaction[item.id_produk] || 0;
                                            if (item.quantity > item.maxStok) item.quantity = item.maxStok;
                                        ','placeholder' => 'Pilih Produk']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'produk[]','x-model' => 'item.id_produk','x-on:change' => '
                                            item.harga = produkHargaMapTransaction[item.id_produk] || 0;
                                            item.maxStok = produkStokMapTransaction[item.id_produk] || 0;
                                            if (item.quantity > item.maxStok) item.quantity = item.maxStok;
                                        ','placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Pilih Produk')]); ?>
                                        <?php $__currentLoopData = $produkList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($produk->id); ?>" <?php if($produk->stok == 0): ?> disabled <?php endif; ?>>
                                                <?php echo e($produk->produk); ?> <?php if($produk->stok == 0): ?> (Stok Habis) <?php endif; ?>
                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfbd96fa9ceb0dd232d7f99b6c6b44c36)): ?>
<?php $attributes = $__attributesOriginalfbd96fa9ceb0dd232d7f99b6c6b44c36; ?>
<?php unset($__attributesOriginalfbd96fa9ceb0dd232d7f99b6c6b44c36); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfbd96fa9ceb0dd232d7f99b6c6b44c36)): ?>
<?php $component = $__componentOriginalfbd96fa9ceb0dd232d7f99b6c6b44c36; ?>
<?php unset($__componentOriginalfbd96fa9ceb0dd232d7f99b6c6b44c36); ?>
<?php endif; ?>
                                </td>
                                <td class="px-4 py-2 text-center">
                                    <?php if (isset($component)) { $__componentOriginal18c21970322f9e5c938bc954620c12bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18c21970322f9e5c938bc954620c12bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['id' => 'quantity[]','xModel' => 'item.quantity','name' => 'quantity[]','type' => 'number','class' => 'w-full','min' => '1','xBind:max' => 'item.maxStok','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'quantity[]','x-model' => 'item.quantity','name' => 'quantity[]','type' => 'number','class' => 'w-full','min' => '1','x-bind:max' => 'item.maxStok','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal18c21970322f9e5c938bc954620c12bb)): ?>
<?php $attributes = $__attributesOriginal18c21970322f9e5c938bc954620c12bb; ?>
<?php unset($__attributesOriginal18c21970322f9e5c938bc954620c12bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal18c21970322f9e5c938bc954620c12bb)): ?>
<?php $component = $__componentOriginal18c21970322f9e5c938bc954620c12bb; ?>
<?php unset($__componentOriginal18c21970322f9e5c938bc954620c12bb); ?>
<?php endif; ?>
                                </td>
                                <td class="px-4 py-2 text-center">
                                    <?php if (isset($component)) { $__componentOriginal18c21970322f9e5c938bc954620c12bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18c21970322f9e5c938bc954620c12bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['xModel' => 'item.harga','name' => 'harga[]','type' => 'number','class' => 'w-full','min' => '0','readonly' => true,'required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-model' => 'item.harga','name' => 'harga[]','type' => 'number','class' => 'w-full','min' => '0','readonly' => true,'required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal18c21970322f9e5c938bc954620c12bb)): ?>
<?php $attributes = $__attributesOriginal18c21970322f9e5c938bc954620c12bb; ?>
<?php unset($__attributesOriginal18c21970322f9e5c938bc954620c12bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal18c21970322f9e5c938bc954620c12bb)): ?>
<?php $component = $__componentOriginal18c21970322f9e5c938bc954620c12bb; ?>
<?php unset($__componentOriginal18c21970322f9e5c938bc954620c12bb); ?>
<?php endif; ?>
                                </td>
                                <td class="px-4 py-2 text-center">
                                    Rp. <span class="text-gray-700 dark:text-gray-400" x-text="(item.quantity * item.harga) || 0"></span>
                                </td>
                                <td class="px-4 py-2 text-center">
                                    <button type="button"
                                        x-on:click="deleteItem(item.id_produk, idTransaksi, index)"
                                        class="text-red-500">
                                        Hapus
                                    </button>
                                </td>                                
                            </tr>
                        </template>
                    </tbody>
                </table>
            </div>

            <!-- Tombol Tambah Produk -->
            <div class="mt-4">
                <button type="button" x-on:click="items.push({ id_produk: '', quantity: 1, harga: 0 })" class="bg-blue-500 text-white px-3 py-2 rounded">
                    + Tambah Produk
                </button>
            </div>
            
            <!-- Tombol Tambah Produk -->

            <!-- Tombol Submit -->
            <div class="mt-6 flex justify-end">
                <?php if (isset($component)) { $__componentOriginal3b0e04e43cf890250cc4d85cff4d94af = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3b0e04e43cf890250cc4d85cff4d94af = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.secondary-button','data' => ['xOn:click' => '$dispatch(\'close\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('secondary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-on:click' => '$dispatch(\'close\')']); ?>
                    <?php echo e(__('Batal')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3b0e04e43cf890250cc4d85cff4d94af)): ?>
<?php $attributes = $__attributesOriginal3b0e04e43cf890250cc4d85cff4d94af; ?>
<?php unset($__attributesOriginal3b0e04e43cf890250cc4d85cff4d94af); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3b0e04e43cf890250cc4d85cff4d94af)): ?>
<?php $component = $__componentOriginal3b0e04e43cf890250cc4d85cff4d94af; ?>
<?php unset($__componentOriginal3b0e04e43cf890250cc4d85cff4d94af); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginalc7492c692dd0ef5b4adc5ba366482388 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc7492c692dd0ef5b4adc5ba366482388 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.info-button','data' => ['type' => 'submit','xOn:click' => 'addOrUpdateItem()','class' => 'ms-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('info-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','x-on:click' => 'addOrUpdateItem()','class' => 'ms-3']); ?>
                    <?php echo e(__('Simpan')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc7492c692dd0ef5b4adc5ba366482388)): ?>
<?php $attributes = $__attributesOriginalc7492c692dd0ef5b4adc5ba366482388; ?>
<?php unset($__attributesOriginalc7492c692dd0ef5b4adc5ba366482388); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc7492c692dd0ef5b4adc5ba366482388)): ?>
<?php $component = $__componentOriginalc7492c692dd0ef5b4adc5ba366482388; ?>
<?php unset($__componentOriginalc7492c692dd0ef5b4adc5ba366482388); ?>
<?php endif; ?>
            </div>

            <script>
                document.addEventListener('alpine:init', () => {
                    Alpine.data('productForm', () => ({
                        open: false,
                        items: [],
                        kodeTransaksi: '',
                        tanggalTransaksi: '',
                        
                        initializeItems() {
                            const details = <?php echo e(Js::from($transaksi->detailTransaksi ?? [])); ?>;
                            this.items = details.map(detail => ({
                                id_produk: detail.produk.id,
                                quantity: detail.quantity,
                                harga: detail.produk.harga
                            }));
                        },
                
                        addOrUpdateItem() {
                            let selectedProduct = prompt("Masukkan ID Produk:");
                            if (!selectedProduct) return;
                
                            let foundItem = this.items.find(item => item.id_produk == selectedProduct);
                
                            if (foundItem) {
                                // Jika produk sudah ada, update quantity dan harga
                                let newQuantity = parseInt(prompt("Masukkan Quantity:", foundItem.quantity));
                                if (newQuantity > 0) {
                                    foundItem.quantity = newQuantity;
                                    foundItem.harga = produkHargaMapProduct[selectedProduct] || foundItem.harga;
                                }
                            } else {
                                // Jika produk belum ada, tambahkan ke daftar
                                this.items.push({
                                    id_produk: selectedProduct,
                                    quantity: 1,
                                    harga: produkHargaMapProduct[selectedProduct] || 0
                                });
                            }
                        }
                    }));
                });
            </script>

            <script>
                function deleteItem(id_produk, id_transaksi, index) {
                    if (!confirm('Apakah Anda yakin ingin menghapus produk ini dari transaksi?')) {
                        return;
                    }

                    console.log('Menghapus produk:', id_produk, 'dari transaksi:', id_transaksi);

                    fetch(`/transaction/${id_transaksi}/delete-product/${id_produk}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'Content-Type': 'application/json'
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            window.location.href = `/transaction?success=${encodeURIComponent('Produk berhasil dihapus!')}`;
                        } else {
                            alert('Gagal menghapus produk!');
                        }
                    })
                }
            </script>    
        </form>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $attributes = $__attributesOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__attributesOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $component = $__componentOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__componentOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
</section>
<?php /**PATH /home/erzie-aldrian/Documents/newtronic/crud-transaction/resources/views/transaction/add-product-form.blade.php ENDPATH**/ ?>