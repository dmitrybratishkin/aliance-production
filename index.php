<?php require_once('head.php');?>
<body class="front-page">
<?php require_once('mobile-menu.php');?>
<?php require_once('navbar.php');?>
    <!-- /.navbar -->
    <header class="header header-image">
        <div class="container">
            <div class="header-content">
                <div class="seporator"></div>
                <h1 class="header-title">Комплексное обеспечение товарами и расходными материалами бизнеса</h1>
                <p class="header-text">Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высококачественный прототип будущего проекта напрямую зависит от анализа существующих паттернов поведения.</p>
                <button class="button header-button">Подробнее о компании</button>
            </div>
            <!-- /.header-content -->
            
            <!-- основной блок слайдера -->
            <?php require_once('./template-parts/features-block.php');?>
        </div>
        <!-- /.container -->
    </header>
    <?php require_once('./template-parts/steps-block.php');
    $production_title = 'Контрактное производство';
    require_once('./template-parts/production-block.php');
    $block_title= "собственные торговый марки"; 
    require_once('./template-parts/trademarks-block.php');
    require_once('./template-parts/founder-block.php');
    require_once('./template-parts/clients-block.php');
    
    
    require_once('blog.php');
    require_once('footer.php');?>

</body>