<?php $__env->startSection('title', 'Изменение карточки товара'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            Товар
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

            <form method="POST" action="<?php echo e(route('products.update', $product)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="mb-3">
                    <label for="name" class="form-label">Наименование</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo e($product->name); ?>">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Автор</label>
                    <textarea class="form-control" id="description" name="description" rows="3" >
<?php echo e($product->description); ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Цена</label>
                    <input type="number" class="form-control" name="price" id="price" value="<?php echo e($product->price); ?>">
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label">Категория</label>
                    <select class="form-control" name="category_id" id="category_id">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>" <?php echo e($category->id == $product->category_id ? 'selected' : ''); ?>><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Ссылка на изображение</label>
                    <input type="text" class="form-control" name="image" id="image" value="<?php echo e($product->image); ?>">
                </div>

                <button type="submit" class="btn btn-success">Сохранить</button>
                <a href="<?php echo e(route('products.index')); ?>">
                    <button type="button" class="btn btn-primary">Отмена</button>
                </a>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Server\data\htdocs\laravelapp\resources\views/products/edit.blade.php ENDPATH**/ ?>