<nav class="navbar <?= $navbar_style; ?>">
        <a href="#" class="mobile-menu-toggle">
            <div class="mobile-menu-line"></div>
            <div class="mobile-menu-line"></div>
            <div class="mobile-menu-line"></div>
        </a>
        <a href="./" class="header-logo">
            <svg class="logo-svg logo-light">
                <use href="img/sprite.svg#logo-light"></use>
            </svg>
            <svg class="logo-svg logo-dark">
                <use href="img/sprite.svg#logo"></use>
            </svg>
        </a>
        <ul class="header-nav">
            <li class="header-nav-item"><a href="./about.php" class="header-nav-link">О компании</a></li>
            <li class="header-nav-item"><a href="./contracts.php" class="header-nav-link">Контрактное производство</a></li>
            <li class="header-nav-item"><a href="./trademarks.php" class="header-nav-link">Собственные торговые марки</a></li>
            <li class="header-nav-item"><a href="" class="header-nav-link">Новости</a></li>
            <li class="header-nav-item"><a href="" class="header-nav-link">Контакты</a></li>
        </ul>
        <header class="header-phone">
            <svg class="phone-svg" width="24" height="24">
                <use href="img/sprite.svg#phone"></use>
            </svg>
            <a href="tel: +74996861014" class="header-phone-link">+7 (499) 686-10-14</a>
        </header>
        <!-- /.phone -->
        <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
            <svg class="button-icon" width="24" height="24">
                <use href="img/sprite.svg#phone"></use>
            </svg>
            <span class="button-text">Получить консультацию</span>
        </button>
    </nav>