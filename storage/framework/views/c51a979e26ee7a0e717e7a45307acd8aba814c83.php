<?php $__env->startSection('title', 'Список товаров'); ?>

<?php $__env->startSection('content'); ?>
    <form method="GET" action="<?php echo e(route('search')); ?>">
        <input type="text" name="search"/>
        <button class="btn btn-sm btn-primary" type="submit">Поиск</button>
        <a href="<?php echo e(route('products.index')); ?>">
            <button class="btn btn-sm btn-primary">Сбросить поиск</button>
        </a>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Автор</th>
            <th scope="col">Цена</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($product->id); ?></td>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->description); ?></td>
                <td><?php echo e($product->price); ?></td>
                <td>
                    <a href="<?php echo e(route('products.show', $product)); ?>">
                        <button class="btn btn-primary btn-sm">Просмотреть</button>
                    </a>
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(route('makeOrder', $product->id)); ?>">
                            <button class="btn btn-success btn-sm">Заказать</button>
                        </a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Server\data\htdocs\laravelapp\resources\views/products/catalogue.blade.php ENDPATH**/ ?>