<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 link-secondary">Главная</a></li>
                <li><a href="{{route('products.index')}}" class="nav-link px-2 link-dark">Товары</a></li>
                @auth
                    <li><a href="{{route('orders.index')}}" class="nav-link px-2 link-dark">Заказы</a></li>
                    <li><a href="{{route('users.index')}}" class="nav-link px-2 link-dark">Пользователи</a></li>
                    <li><a href="{{route('categories.index')}}" class="nav-link px-2 link-dark">Категории</a></li>
                @endauth
                @guest
                    <li><a href="{{route('login')}}" class="nav-link px-2 link-dark">Авторизация</a></li>
                    <li><a href="{{route('register')}}" class="nav-link px-2 link-dark">Регистрация</a></li>
                @endguest
            </ul>

            @auth
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://yt3.ggpht.com/a/AGF-l79K5wXSrfh6UUgQwCe1QFAf7_j8fYMRTCFLTQ=s900-c-k-c0xffffffff-no-rj-mo" alt="mdo" class="rounded-circle" width="32" height="32">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="{{route('users.index')}}">Профиль</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{route('logout')}}">Выйти</a></li>
                    </ul>
                </div>
            @endauth
        </div>
    </div>
</header>

