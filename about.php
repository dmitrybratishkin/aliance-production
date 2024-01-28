<?php
    require_once('head.php');
    require_once('mobile-menu.php');
    $navbar_style = 'navbar-light';
    require_once('navbar.php');
    $page_title = 'О компании';
    $header_style = 'page-header-bg-image';
    require_once('header-page.php');
    ?>

    <section class="section we-expert-section">
        <div class="container">
            <div class="section-wrapper we-experts flexgrid">
                <div class="we-experts-content">
                    <h2 class="section-title">мы - эксперты в области производства химии</h2>
                    <div class="section-text">
                        <p>Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.</p>
                    </div>
                </div>
                <picture class="we-experts-image">
                        <source type="image/webp" srcset="img/about/our.webp">
                        <source type="image/jpeg" srcset="img/about/our.png">
                        <img src="img/about/our.png" alt="Наше производство">
                    </picture>
            </div>

        </div>
    </section>

    <div class="container">
    <?php require_once('./template-parts/features-block.php');?>
    </div>


    <section class="section our-production">
        <div class="container">

            <div class="our-production-wrapper flexgrid">
                <h2 class="our-production-title section-title">Наше производство</h2>
                <div class="our-production-content">
                    <div class="our-production-text">
                        <p>Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий.</p>
                        <p>Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.</p>
                    </div>
                    <ul class="our-production-list section-list">
                        <li class="section-list-item">
                            <svg width="30" height="30" class="section-list-icon">
                                <use href="img/sprite.svg#car"></use>
                            </svg>
                            Автомобильная химия
                        </li>
                        <li class="section-list-item">
                            <svg width="30" height="30" class="section-list-icon">
                                <use href="img/sprite.svg#home"></use>
                            </svg>
                            Бытовая химия
                        </li>
                        <li class="section-list-item">
                            <svg width="30" height="30" class="section-list-icon">
                                <use href="img/sprite.svg#dis"></use>
                            </svg>
                            Дезинфицирующие средства
                        </li>
                        <li class="section-list-item">
                            <svg width="30" height="30" class="section-list-icon">
                                <use href="img/sprite.svg#aerozol"></use>
                            </svg>
                            Пищевые аэрозоли
                        </li>
                        <li class="section-list-item">
                            <svg width="30" height="30" class="section-list-icon">
                                <use href="img/sprite.svg#cosmetic"></use>
                            </svg>
                            Косметическая продукция
                        </li>
                        <li class="section-list-item">
                            <svg width="30" height="30" class="section-list-icon">
                                <use href="img/sprite.svg#brush"></use>
                            </svg>
                            Краски аэрозольные
                        </li>
                    </ul>
                </div>
                <div class="our-production-image">
                <picture class="our-production-photo">
                        <source type="image/webp" srcset="img/about/girl.webp">
                        <source type="image/jpeg" srcset="img/about/girl.jpg">
                        <img src="img/about/girl.jpg" alt="Наше производство">
                    </picture>
                </div>
            </div><!-- .our-production-wrapper -->

        </div>
    </section>

    <?php require_once('./template-parts/founder-block.php');
    require_once('./template-parts/center-block.php');
    require_once('./template-parts/clients-block.php');
    require_once('footer.php');?>