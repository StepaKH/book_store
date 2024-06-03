<?php $__env->startSection('title', 'Профиль пользователя'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <?php echo e($user->name); ?>

        </div>
        <div class="card-body">
            <p>Email: <?php echo e($user->email); ?></p>
            <p>Пароль (Hash): <?php echo e($user->password); ?></p>
            <p>Роль: <?php echo e($user->role == 1 ? "Администратор" : "Покупатель"); ?></p>

            <a href="<?php echo e(route('users.index')); ?>">
                <button class="btn btn-primary">Назад</button>
            </a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Server\data\htdocs\laravelapp\resources\views/users/show.blade.php ENDPATH**/ ?>