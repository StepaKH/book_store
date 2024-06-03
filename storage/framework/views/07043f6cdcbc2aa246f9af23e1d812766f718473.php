<?php $__env->startSection('title', 'Карточка заказа'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            Заказ #<?php echo e($order->id); ?>

        </div>
        <div class="card-body">
            <p>Дата создания: <?php echo e($order->date); ?></p>
            <p>Название товара: <?php echo e($order->product->name); ?></p>
            <p>Количество: <?php echo e($order->count); ?></p>
            <p>Имя заказчика: <?php echo e($order->user->name); ?></p>
            <a href="<?php echo e(route('orders.index')); ?>">
                <button class="btn btn-primary">Назад</button>
            </a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Server\data\htdocs\laravelapp\resources\views/orders/show.blade.php ENDPATH**/ ?>