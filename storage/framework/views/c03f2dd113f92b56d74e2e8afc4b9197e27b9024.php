<?php $__env->startSection('title', 'Пользователь'); ?>

<?php $__env->startSection('content'); ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ФИО</th>
            <th scope="col">Email</th>
            <th scope="col">Роль</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->id); ?></td>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->role == 1 ? "Администратор" : "Покупатель"); ?></td>
                <td>
                    <a href="<?php echo e(route('users.show', $user)); ?>">
                        <button class="btn btn-primary btn-sm mt-1">Просмотр</button>
                    </a>
                    <a href="<?php echo e(route('users.edit', $user)); ?>">
                        <button class="btn btn-info btn-sm mt-1">Изменить</button>
                    </a>
                    <form method="POST" action="<?php echo e(route('users.destroy', $user)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("DELETE"); ?>
                        <button type="submit" class="btn btn-danger btn-sm mt-1">Удалить</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Server\data\htdocs\laravelapp\resources\views/users/index.blade.php ENDPATH**/ ?>