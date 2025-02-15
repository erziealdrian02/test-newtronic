<x-modal name="product-modal" focusable maxWidth="sm">
    <form x-bind:action="isEdit 
        ? '{{ route('product.update', '') }}/' + productId 
        : '{{ route('product.store') }}'" 
        method="POST" 
        class="p-6"
    >
        @csrf
        <template x-if="isEdit">
            @method('PUT')
        </template>

        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100" x-text="isEdit ? 'Edit Product' : 'Add New Product'">
        </h2>

        <!-- Product Name Input -->
        <div class="mt-4">
            <x-input-label for="nama_product" value="Product Name" />
            <x-text-input 
                id="nama_product" 
                name="nama_product" 
                type="text" 
                class="w-full" 
                x-model="productName"
                required 
            />
        </div>    

        <!-- Stock Input -->
        <div class="mt-4">
            <x-input-label for="stok" value="Quantity" />
            <x-text-input 
                id="stok" 
                name="stok" 
                type="number" 
                class="w-full" 
                x-model="productStock"
                required 
            />
        </div>

        <!-- Price Input -->
        <div class="mt-4">  
            <x-input-label for="harga" value="Price" />  
            <div class="flex items-center border border-gray-300 dark:border-gray-700 rounded-lg overflow-hidden">  
                <span class="px-3 py-2 bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300">Rp</span>  
                <x-text-input   
                    id="harga"   
                    name="harga"   
                    type="text"   
                    class="w-full"   
                    x-model="productPrice"  
                    x-on:input="updateFormat($event.target)"   
                    required   
                />  
            </div>  
        </div>  
        
        <script>  
            function updateFormat(input) {  
                let angka = input.value.replace(/\D/g, ""); // Hanya ambil angka  
                let format = angka.replace(/\B(?=(\d{3})+(?!\d))/g, "."); // Tambah titik setiap 3 digit  
                input.value = format; // Update input value dengan format  
            }  
        </script>

        <!-- Buttons -->
        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close-modal', 'product-modal')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-info-button type="submit" class="ms-3">
                {{ __('Save') }}
            </x-info-button>
        </div>
    </form>
</x-modal>