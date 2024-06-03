<?php $__env->startSection('title', 'Список заказов'); ?>

<?php $__env->startSection('content'); ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Дата создания</th>
            <th scope="col">Название продукта</th>
            <th scope="col">Количество</th>
            <th scope="col">Имя заказчика</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($order->id); ?></td>
                <td><?php echo e($order->date); ?></td>
                <td><?php echo e($order->product->name); ?></td>
                <td><?php echo e($order->count); ?></td>
                <td><?php echo e($order->user->name); ?></td>

                <td>
                    <a href="<?php echo e(route('orders.show', $order)); ?>">
                        <button class="btn btn-primary btn-sm">Просмотреть</button>
                    </a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Server\data\htdocs\laravelapp\resources\views/orders/index.blade.php ENDPATH**/ ?>