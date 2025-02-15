<?php $__env->startSection('content'); ?>
<style>
    .fullscreen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        z-index: 50;
        background: #000;
        display: none;
    }
    .fullscreen.active {
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
<!-- Normal Score Display -->
<div class="container mx-auto px-4 py-8">
    <div class="mt-6 bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold mb-4">Riwayat Pertandingan</h3>
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead>
                    <tr class="bg-gray-50">
                        <th class="px-6 py-3 text-left">Pertandingan</th>
                        <th class="px-6 py-3 text-left">Skor Akhir</th>
                        <th class="px-6 py-3 text-left">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="px-6 py-4"><?php echo e($game->team_a); ?> vs <?php echo e($game->team_b); ?></td>
                            <td class="px-6 py-4"><span id="score_a_<?php echo e($game->id); ?>"><?php echo e($game->score_a); ?></span> - <span id="score_b_<?php echo e($game->id); ?>"><?php echo e($game->score_b); ?></span></td>
                            <td class="px-6 py-4">
                                <a href="<?php echo e(route('show.score', $game->id)); ?>" 
                                    class="bg-green-600 text-white px-4 py-2 rounded text-sm">
                                     Tonton
                                 </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/erzie-aldrian/Documents/newtronic/newtronic-websocket/resources/views/games/score-public.blade.php ENDPATH**/ ?>