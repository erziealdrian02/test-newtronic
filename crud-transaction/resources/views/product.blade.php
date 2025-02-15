<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

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

                    {{-- Tombol Tambah Transaksi --}}
                    <div class="mb-4">
                        @include('product.add-newProduct-form')
                    </div>

                    {{-- Tabel Transaksi --}}
                    @if (session('success'))  
                        <div class="bg-emerald-600 text-white font-bold rounded-t px-4 py-2">  
                            {{ session('success') }}  
                        </div>  
                    @endif  
                    @if (session('error'))  
                        <div class="bg-red-600 text-white font-bold rounded-t px-4 py-2">  
                            {{ session('error') }}  
                        </div>  
                    @endif 
                    
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
                                @forelse ($produkList as $transaksi)  
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-2 text-center">{{ $loop->iteration }}</td>
                                        <td class="px-6 py-4 text-center">{{ $transaksi->produk }}</td>
                                        <td class="px-6 py-4 text-center">{{ $transaksi->stok }}</td>   
                                        <td class="px-6 py-4 text-center">Rp. {{ number_format($transaksi->harga, 0, ',', '.') }}</td>   
                                        <td class="px-6 py-4 text-center">
                                            {{-- Tombol Edit --}}
                                            <x-warning-button x-on:click="initEdit({ 
                                                produk: '{{ $transaksi->produk }}', 
                                                stok: '{{ $transaksi->stok }}', 
                                                harga: '{{ $transaksi->harga }}', 
                                                id: '{{ $transaksi->id }}' 
                                            })">
                                                <i class="fas fa-edit"></i>
                                            </x-warning-button>
                                        
                                            {{-- Tombol Hapus --}}
                                            <x-danger-button onclick="confirmDelete({{ $transaksi->id }})">  
                                                <i class="fas fa-trash"></i>
                                            </x-danger-button>  
                                        
                                            {{-- Formulir Delete --}}
                                            <form id="delete-form-{{ $transaksi->id }}" action="{{ route('product.delete', $transaksi->id) }}" method="POST" style="display: none;">  
                                                @csrf  
                                                @method('DELETE')  
                                            </form>  
                                        </td>  
                                    </tr>
                                @empty  
                                    <tr class="bg-white border-b dark:bg-gray-800">
                                        <td colspan="5" class="px-6 py-4 text-center">Tidak ada data transaksi.</td>  
                                    </tr>  
                                @endforelse  
                            </tbody>
                        </table>
                    </div>

                    {{-- Script Konfirmasi Hapus --}}
                    <script>  
                        function confirmDelete(transaksiId) {  
                            if (confirm('Apakah Anda yakin ingin menghapus transaksi ini?')) {  
                                document.getElementById('delete-form-' + transaksiId).submit();  
                            }  
                        }  
                    </script>

                    {{-- Modal Edit --}}
                    @include('product.edit-editProduct-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
