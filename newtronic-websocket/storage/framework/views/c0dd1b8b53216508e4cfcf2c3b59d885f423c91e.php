<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Papan Skor</h1>
    <?php echo e($games); ?>

    <ul>
        <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li id="game-<?php echo e($game->id); ?>">
                <strong><?php echo e($game->team_a); ?></strong> <span id="score_a_<?php echo e($game->id); ?>"><?php echo e($game->score_a); ?></span>
                vs
                <strong><?php echo e($game->team_b); ?></strong> <span id="score_b_<?php echo e($game->id); ?>"><?php echo e($game->score_b); ?></span>

                <form action="<?php echo e(url('/games/'.$game->id.'/score')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="number" name="score_a" value="<?php echo e($game->score_a); ?>">
                    <input type="number" name="score_b" value="<?php echo e($game->score_b); ?>">
                    <button type="submit">Update Skor</button>
                </form>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>

<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
    Pusher.logToConsole = true;

    var pusher = new Pusher('local', {
        cluster: 'mt1',
        wsHost: '127.0.0.1',
        wsPort: 6001,
        forceTLS: false,
        disableStats: true
    });

    <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        var channel = pusher.subscribe('game.<?php echo e($game->id); ?>');
        channel.bind('score.updated', function(data) {
            document.getElementById('score_a_<?php echo e($game->id); ?>').innerText = data.game.score_a;
            document.getElementById('score_b_<?php echo e($game->id); ?>').innerText = data.game.score_b;
        });
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/erzie-aldrian/Documents/newtronic/newtronic-websocket/resources/views/games/index.blade.php ENDPATH**/ ?>