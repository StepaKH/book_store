

<?php $__env->startSection('title', 'Список категорий'); ?>

<?php $__env->startSection('content'); ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Категория</th>
            <th scope="col">Описание</th>
            <th scope="col">Родительская категория</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($category->id); ?></td>
                <td><?php echo e($category->name); ?></td>
                <td><?php echo e($category->description); ?></td>
                <td><?php echo e($category->getParentName()); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Server\data\htdocs\laravelapp\resources\views/categories/catalogue.blade.php ENDPATH**/ ?>