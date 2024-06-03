<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 link-secondary">Главная</a></li>
                <li><a href="<?php echo e(route('products.index')); ?>" class="nav-link px-2 link-dark">Товары</a></li>
                <?php if(auth()->guard()->check()): ?>
                    <li><a href="<?php echo e(route('orders.index')); ?>" class="nav-link px-2 link-dark">Заказы</a></li>
                    <li><a href="<?php echo e(route('users.index')); ?>" class="nav-link px-2 link-dark">Пользователи</a></li>
                    <li><a href="<?php echo e(route('categories.index')); ?>" class="nav-link px-2 link-dark">Категории</a></li>
                <?php endif; ?>
                <?php if(auth()->guard()->guest()): ?>
                    <li><a href="<?php echo e(route('login')); ?>" class="nav-link px-2 link-dark">Авторизация</a></li>
                    <li><a href="<?php echo e(route('register')); ?>" class="nav-link px-2 link-dark">Регистрация</a></li>
                <?php endif; ?>
            </ul>

            <?php if(auth()->guard()->check()): ?>
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://yt3.ggpht.com/a/AGF-l79K5wXSrfh6UUgQwCe1QFAf7_j8fYMRTCFLTQ=s900-c-k-c0xffffffff-no-rj-mo" alt="mdo" class="rounded-circle" width="32" height="32">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="<?php echo e(route('users.index')); ?>">Профиль</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>">Выйти</a></li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</header>

<?php /**PATH C:\Server\data\htdocs\laravelapp\resources\views/layouts/header.blade.php ENDPATH**/ ?>