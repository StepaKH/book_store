<?php $__env->startSection('title', 'Заказ товара'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            Создание нового товара
        </div>
        <div class="card-body">
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(route('storeOrder',  $product)); ?>">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label class="form-label">Продукт: <?php echo e($product->name); ?></label>
                </div>

                <div class="mb-3">
                    <label for="count" class="form-label">Количество</label>
                    <input type="number" class="form-control" name="count" id="count">
                </div>

                <button type="submit" class="btn btn-success">Заказать</button>
                <a href="<?php echo e(route('products.index')); ?>">
                    <button type="button" class="btn btn-primary">Отмена</button>
                </a>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Server\data\htdocs\laravelapp\resources\views/orders/create.blade.php ENDPATH**/ ?>