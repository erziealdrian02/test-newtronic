<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Stats Cards Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                <!-- Stat Card 1 -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Total Users</h3>
                        <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $getUser }}</p>
                    </div>
                </div>

                <!-- Stat Card 2 -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Revenue</h3>
                        <p class="text-3xl font-bold text-gray-900 dark:text-white">Rp .{{ number_format($getRevenue, 0, ',', '.') }}</p>
                    </div>
                </div>

                <!-- Stat Card 3 -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Orders</h3>
                        <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $getTransaksi }}</p>
                    </div>
                </div>

                <!-- Stat Card 4 -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Product</h3>
                        <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $getProduct }}</p>
                    </div>
                </div>
            </div>

            <!-- Chart Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">Analytics Overview</h3>
                    <div class="w-full" style="height: 400px;">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- JSON Input Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">JSON Data Input</h3>
                    <div class="flex justify-end mb-4">
                        <x-warning-button id="crawlDataBtn">  
                            Crawl Data
                        </x-warning-button>                            
                        <x-info-button id="processJsonBtn">  
                            Process JSON
                        </x-info-button>  
                    </div>
                    <textarea 
                        id="jsonInput" 
                        rows="6" 
                        class="block p-4 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                        placeholder="Crawl results appear here..."
                        readonly></textarea>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script>
        // Chart initialization
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('myChart').getContext('2d');
            if (!ctx) {
                console.error("Canvas element not found!");
                return;
            }
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                    datasets: [{
                        label: 'Monthly Revenue',
                        data: [12000, 19000, 15000, 25000, 22000, 30000],
                        borderColor: 'rgb(59, 130, 246)',
                        backgroundColor: 'rgba(59, 130, 246, 0.1)',
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });


        // JSON processing
        document.querySelector('button').addEventListener('click', () => {
            const jsonInput = document.querySelector('#jsonInput').value;
            try {
                const parsedJson = JSON.parse(jsonInput);
                console.log('Parsed JSON:', parsedJson);
                // Handle the JSON data here
                alert('JSON processed successfully!');
            } catch (error) {
                alert('Invalid JSON format');
            }
        });
    </script>

    <script>
        document.getElementById('crawlDataBtn').addEventListener('click', function() {
            fetch('/crawl-data') // Pastikan route '/crawl-data' sudah dibuat di backend
                .then(response => response.json()) // Konversi response ke JSON
                .then(data => {
                    document.getElementById('jsonInput').value = JSON.stringify(data, null, 4); // Masukkan JSON ke textarea dengan format rapi
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                    alert('Gagal mengambil data. Coba lagi nanti.');
                });
        });

        document.getElementById('processJsonBtn').addEventListener('click', function() {
            const jsonData = document.getElementById('jsonInput').value;

            if (!jsonData.trim()) {
                alert('Tidak ada data untuk diproses.');
                return;
            }
            try {
                const parsedData = JSON.parse(jsonData);
                
                fetch('/process-json', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ json_data: parsedData })
                })
                .then(response => response.json())
                .then(data => {
                    alert(data.message || 'Data berhasil diproses.');
                })
                .catch(error => {
                    console.error('Error processing data:', error);
                    alert('Terjadi kesalahan saat memproses data.');
                });
            } catch (error) {
                alert('Format JSON tidak valid');
                console.error('JSON parsing error:', error);
            }

        });
    </script>
    
</x-app-layout>