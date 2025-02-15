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
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Stats Cards Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                <!-- Stat Card 1 -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Total Users</h3>
                        <p class="text-3xl font-bold text-gray-900 dark:text-white"><?php echo e($getUser); ?></p>
                    </div>
                </div>

                <!-- Stat Card 2 -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Revenue</h3>
                        <p class="text-3xl font-bold text-gray-900 dark:text-white">Rp .<?php echo e(number_format($getRevenue, 0, ',', '.')); ?></p>
                    </div>
                </div>

                <!-- Stat Card 3 -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Orders</h3>
                        <p class="text-3xl font-bold text-gray-900 dark:text-white"><?php echo e($getTransaksi); ?></p>
                    </div>
                </div>

                <!-- Stat Card 4 -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Product</h3>
                        <p class="text-3xl font-bold text-gray-900 dark:text-white"><?php echo e($getProduct); ?></p>
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
                        <?php if (isset($component)) { $__componentOriginal9163ec903cfa8e9a1488058f2578df23 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9163ec903cfa8e9a1488058f2578df23 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.warning-button','data' => ['id' => 'crawlDataBtn']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('warning-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'crawlDataBtn']); ?>  
                            Crawl Data
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9163ec903cfa8e9a1488058f2578df23)): ?>
<?php $attributes = $__attributesOriginal9163ec903cfa8e9a1488058f2578df23; ?>
<?php unset($__attributesOriginal9163ec903cfa8e9a1488058f2578df23); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9163ec903cfa8e9a1488058f2578df23)): ?>
<?php $component = $__componentOriginal9163ec903cfa8e9a1488058f2578df23; ?>
<?php unset($__componentOriginal9163ec903cfa8e9a1488058f2578df23); ?>
<?php endif; ?>                            
                        <?php if (isset($component)) { $__componentOriginalc7492c692dd0ef5b4adc5ba366482388 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc7492c692dd0ef5b4adc5ba366482388 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.info-button','data' => ['id' => 'processJsonBtn']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('info-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'processJsonBtn']); ?>  
                            Process JSON
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
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH /home/erzie-aldrian/Documents/newtronic/crud-transaction/resources/views/dashboard.blade.php ENDPATH**/ ?>