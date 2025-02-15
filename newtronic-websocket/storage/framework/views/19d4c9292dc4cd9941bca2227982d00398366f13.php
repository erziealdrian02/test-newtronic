<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title', 'Papan Skor'); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-light">
    <?php echo $__env->make('component.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container mt-4">
        <?php echo $__env->make('component.sportbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH /home/erzie-aldrian/Documents/newtronic/newtronic-websocket/resources/views/layouts/app.blade.php ENDPATH**/ ?>