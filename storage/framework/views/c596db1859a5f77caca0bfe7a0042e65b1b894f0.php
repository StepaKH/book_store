<?php $__env->startSection('title', 'Карточка товара'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <?php echo e($product->name); ?>

        </div>
        <div class="card-body">
            <p>Автор: <?php echo e($product->description); ?></p>
            <p>Цена: <?php echo e($product->price); ?></p>
            <p>Категория: <?php echo e($product->category->name); ?></p>
            <p><img src="<?php echo e($product->image); ?>"/></p>
            <a href="<?php echo e(route('products.index')); ?>">
            <button class="btn btn-primary">Назад</button>
            </a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Server\data\htdocs\laravelapp\resources\views/products/show.blade.php ENDPATH**/ ?>