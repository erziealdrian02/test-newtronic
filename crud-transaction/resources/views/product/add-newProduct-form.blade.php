<section class="space-y-6" x-data="{ open: false, items: [] }">
    <x-info-button
        class="mt-4"
        x-on:click.prevent="$dispatch('open-modal', 'add-newProduct-modal')"
    >{{ __('Tambah Produk') }}</x-info-button>

    <x-modal name="add-newProduct-modal" x-show="open" focusable maxWidth="sm">
        <form method="POST" action="{{ route('product.store') }}" class="p-6">
            @csrf

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Tambah Produk Baru') }}
            </h2>

            <!-- Input Nama Produk -->
            <div class="mt-4">
                <x-input-label for="nama_product" value="Product Name" />
                <x-text-input id="nama_product" name="nama_product" type="text" class="w-full" required />
            </div>    

            <!-- Input Stok -->
            <div class="mt-4">
                <x-input-label for="stok" value="Quantity" />
                <x-text-input id="stok" name="stok" type="number" class="w-full " required />
            </div>

            <div class="mt-4">
                <x-input-label for="harga" value="Price" />
                <div class="flex items-center border border-gray-300 dark:border-gray-700 rounded-lg overflow-hidden">
                    <span class="px-3 py-2 bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300">Rp</span>
                    <x-text-input id="harga" name="harga" type="text" class="w-full" required oninput="formatRupiah(this)" />
                </div>
            </div>
            
            <script>
                function formatRupiah(input) {
                    let angka = input.value.replace(/\D/g, ""); // Hanya ambil angka
                    let format = angka.replace(/\B(?=(\d{3})+(?!\d))/g, "."); // Tambah titik setiap 3 digit
                    input.value = format;
                }
            </script>

            <!-- Tombol Submit -->
            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Batal') }}
                </x-secondary-button>

                <x-info-button type="submit" class="ms-3">
                    {{ __('Simpan') }}
                </x-info-button>
            </div>
        </form>
    </x-modal>
</section>
