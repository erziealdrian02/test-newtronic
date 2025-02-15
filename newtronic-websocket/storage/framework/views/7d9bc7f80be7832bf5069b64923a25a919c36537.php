<?php $__env->startSection('content'); ?>
<div class="mt-6 bg-white rounded-lg shadow-md p-6">
    <h3 class="text-lg font-semibold mb-4">Activity Log</h3>
    <div class="overflow-x-auto">
        <table class="min-w-full">
            <thead>
                <tr class="bg-gray-50">
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Waktu</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Event</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Score</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Operator</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4">10:45:23</td>
                    <td class="px-6 py-4">Score Update</td>
                    <td class="px-6 py-4">2-1</td>
                    <td class="px-6 py-4">Admin1</td>
                </tr>
                <tr>
                    <td class="px-6 py-4">10:30:00</td>
                    <td class="px-6 py-4">Match Start</td>
                    <td class="px-6 py-4">0-0</td>
                    <td class="px-6 py-4">Admin1</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/erzie-aldrian/Documents/newtronic/newtronic-websocket/resources/views/games/score-log.blade.php ENDPATH**/ ?>