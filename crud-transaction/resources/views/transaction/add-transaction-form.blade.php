<section class="space-y-6" x-data="{ open: false, items: [] }">
    <x-info-button
        class="mt-4 mb-4"
        x-on:click.prevent="$dispatch('open-modal', 'add-transaction-modal')"
    >{{ __('Tambah Transaksi') }}</x-info-button>

    <x-modal name="add-transaction-modal" x-show="open" focusable maxWidth="4xl">
        <form method="POST" action="{{ route('transaction.store') }}" class="p-6">
            @csrf

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Tambah Transaksi Baru') }}
            </h2>

            <!-- Input Kode Transaksi -->
            <div class="mt-4" x-data="{ kodeTransaksi: '{{ $newCode }}' }">
                <x-input-label for="kode_transaksi" value="Kode Transaksi" />
                <x-text-input id="kode_transaksi" name="kode_transaksi" type="text" class="w-full" x-model="kodeTransaksi" readonly />
            </div>    

            <!-- Input Tanggal -->
            <div class="mt-4">
                <x-input-label for="tanggal" value="Tanggal Transaksi" />
                <x-text-input id="tanggal" name="tanggal" type="date" class="w-full " required />
            </div>

            <script>
                const produkStokMapTransaction = @json($produkList->pluck('stok', 'id'));
                const produkHargaMapTransaction = @json($produkList->pluck('harga', 'id'));
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
                                    <x-select-input
                                        name="produk[]"
                                        x-model="item.id_produk"
                                        x-on:change="
                                            item.harga = produkHargaMapTransaction[item.id_produk] || 0;
                                            item.maxStok = produkStokMapTransaction[item.id_produk] || 0;
                                            if (item.quantity > item.maxStok) item.quantity = item.maxStok;
                                        "
                                        :placeholder="'Pilih Produk'"
                                    >
                                        @foreach ($produkList as $produk)
                                            <option value="{{ $produk->id }}" @if ($produk->stok == 0) disabled @endif>
                                                {{ $produk->produk }} @if ($produk->stok == 0) (Stok Habis) @endif
                                            </option>
                                        @endforeach
                                    </x-select-input>
                                </td>
                                <td class="px-4 py-2 text-center">
                                    <x-text-input 
                                        id="quantity[]" 
                                        x-model="item.quantity" 
                                        name="quantity[]" 
                                        type="number" 
                                        class="w-full" 
                                        min="1"
                                        x-bind:max="item.maxStok" 
                                        required
                                    />
                                </td>
                                <td class="px-4 py-2 text-center">
                                    <x-text-input 
                                        id="harga[]" 
                                        x-model="item.harga" 
                                        name="harga[]" 
                                        type="number" 
                                        class="w-full" 
                                        min="0" 
                                        readonly 
                                        required
                                    />
                                </td>
                                <td class="px-4 py-2 text-center">
                                    Rp. <span class="text-gray-700 dark:text-gray-400" x-text="(item.quantity * item.harga) || 0"></span>
                                </td>
                                <td class="px-4 py-2 text-center">
                                    <button type="button" x-on:click="items.splice(index, 1)" class="text-red-500">Hapus</button>
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
