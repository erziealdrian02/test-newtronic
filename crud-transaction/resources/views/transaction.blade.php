<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Transaction') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @include('transaction.add-transaction-form')

                    {{-- Akhir --}}
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
                    @if (request()->has('success'))  
                        <div class="bg-emerald-600 text-white font-bold rounded-t px-4 py-2">  
                            {{ request()->get('success') }}  
                        </div>  
                    @endif  

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
                                @if ($AllMasterTransaction->isEmpty())  
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">  
                                        <td colspan="5" class="px-6 py-4 text-center">  
                                            Tidak ada data transaksi yang tersedia.  
                                        </td>  
                                    </tr>  
                                @else  
                                @foreach ($AllMasterTransaction as $transaksi)  
                                    <tr onclick="toggleDetails('details-{{ $transaksi->id }}')" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:dark:bg-gray-600 cursor-pointer">
                                        <td class="px-6 py-4 text-center flex items-center justify-center">  
                                            <svg id="icon-{{ $transaksi->id }}" class="transition-transform duration-300 fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">  
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />  
                                            </svg>  
                                        </td> 
                                        <td class="px-6 py-4 text-center">{{ $loop->iteration }}</td>
                                        <td class="px-6 py-4 text-center">{{ $transaksi->kode_transaksi }}</td>
                                        <td class="px-6 py-4 text-center">{{ $transaksi->tanggal }}</td>   
                                        <td class="px-6 py-4 text-center">
                                            <x-danger-button type="button" class="ms-3" onclick="confirmDelete({{ $transaksi->id }})">  
                                                <i class="fas fa-trash"></i>  
                                            </x-danger-button>  
                                            
                                            <form id="delete-form-{{ $transaksi->id }}" action="{{ route('transaction.deleteTransaction', $transaksi->id) }}" method="POST" style="display: none;">  
                                                @csrf  
                                                @method('DELETE')  
                                            </form>                                              
                                        </td>   
                                    </tr>
                                    <!-- Detail Row -->
                                    <tr id="details-{{ $transaksi->id }}" class="hidden bg-gray-50 dark:bg-gray-900 ">
                                        <td colspan="5" class="px-6 py-4">
                                            <div class="mb-4 flex justify-between items-center">
                                                <div>
                                                    <h3 class="text-lg font-semibold">No Transaksi</h3>
                                                    <p class="text-gray-600 dark:text-gray-400">{{ $transaksi->kode_transaksi }}</p>
                                                </div>
                                                @include('transaction.add-product-form')
                                            </div>
                                            
                                            <div class="mb-4">
                                                <h3 class="text-lg font-semibold">Tanggal</h3>
                                                <p class="text-gray-600 dark:text-gray-400">{{ $transaksi->tanggal }}</p>
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
                                                        @if ($transaksi->detailTransaksi->isEmpty())  
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">  
                                                                <td colspan="5" class="px-6 py-4 text-center">Tidak ada data transaksi yang tersedia.</td>  
                                                            </tr>  
                                                        @else  
                                                            @foreach ($transaksi->detailTransaksi as $detail)  
                                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">  
                                                                    <td class="px-6 py-4 text-center">{{ $loop->iteration }}</td>
                                                                    <td class="px-6 py-4 text-center">{{ $detail->produk->produk }}</td>
                                                                    <td class="px-6 py-4 text-center">{{ $detail->quantity }}</td>  
                                                                    <td class="px-6 py-4 text-center">Rp. {{ number_format($detail->produk->harga, 0, ',', '.') }}</td>
                                                                    <td class="px-6 py-4 text-center">Rp. {{ number_format($detail->produk->harga * $detail->quantity, 0, ',', '.') }}</td>
                                                                </tr>  
                                                            @endforeach  
                                                        @endif  
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach  
                             
                                @endif  
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
</x-app-layout>