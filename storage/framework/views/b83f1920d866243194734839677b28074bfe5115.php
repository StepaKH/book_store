<?php $__env->startSection('title', 'Изменение пользователя'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            Пользователь
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

            <form method="POST" action="<?php echo e(route('users.update', $user)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="mb-3">
                    <label for="name" class="form-label">ФИО</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo e($user->name); ?>">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">E-mail</label>
                    <input type="text" class="form-control" name="email" id="email" value="<?php echo e($user->email); ?>">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Роль (1 - Администратор, иное - Покупатель)</label>
                    <input type="number" class="form-control" name="role" id="role" value="<?php echo e($user->role); ?>">
                </div>

                <button type="submit" class="btn btn-success">Сохранить</button>
                <a href="<?php echo e(route('users.index')); ?>">
                    <button type="button" class="btn btn-primary">Отмена</button>
                </a>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Server\data\htdocs\laravelapp\resources\views/users/edit.blade.php ENDPATH**/ ?>