<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/7a57766f2b.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    .panel {
        padding: 0 18px;
        background-color: white;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }
</style>


<body>
<?php $this->beginBody() ?>

<div class="wrap">
<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => 'Test Job',
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar-inverse navbar-fixed-top',
//        ],
//    ]);
//    $menuItems = [
//        ['label' => 'Home', 'url' => ['/site/index']],
//    ];
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav navbar-right'],
//        'items' => $menuItems,
//    ]);
//    NavBar::end();
//    ?>
    <div id="header">
        <div class="header-top-block clear">
            <div class="header-top">
                <div class="city">
                    <div class="region-select">
                        <a href="#" class="gorod-link">
                            <span class="geo-icon"></span>
                            <span class="gorod">
            Москва            <div style="margin-left: 30px;">
                <span class="text">Ваш город</span>
                    </div>
                </span>
                        </a>
                    </div>
                </div>
                <div class="logo">
                    <a href="/">
                        <img src="/img/header-logo.png" alt="Текстильторг">
                    </a>
                </div>
                <div class="cart">
                    <div class="wrapper">
                        <!--Корзина-->
                        <a id="box-line-cart" class="bx-basket bx-opener htb-cart basket-header-block" href="#">
                            <span class="tt-icons cart-icon"></span>
                            <div class="header-cart">
		<span class="header-cart-count">
            В КОРЗИНЕ
			<div id="eshop-cart-count-top">
                <span class="text">пусто</span>
            </div>
		</span>
                            </div>

                        </a>                    </div>
                </div>
            </div>
            <div class="widget-search-block">
                <div class="search catalog-search-prototype-default">
                    <form class="form" method="get" name="search" id="search-form" action="/search/">
                        <div class="elements">
            <span style="position:relative;">
                <input class="search-field txt" id="search_box" type="text" name="QUERY" value="" autocomplete="off" placeholder="поиск">
                <i class="tt-icons search-icon"></i>
            </span>
                            <input class="search-button scale-decrease" type="submit" value="НАЙТИ">

                        </div>
                        <div class="seares mCustomScrollbar _mCS_1 mCS_no_scrollbar" style="overflow: visible;"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_outside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                    <div id="searchresults"><span class="word"></span></div>
                                    <div id="results">
                         </div>
                                </div></div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer" style=""><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div>
                    </form>
                </div>            </div>

            <div class="widget-header-menu">
                <div class="bg info-menu">
                    <ul>
                        <li><a href="#" class="nav-menu__item">О НАС</a></li>
                        <li><a href="#" class="nav-menu__item">АКЦИИ И СКИДКИ</a></li>
                        <li><a href="#" class="nav-menu__item">ПОЛЕЗНОЕ</a></li>
                        <li><a href="#" class="nav-menu__item">ГАРАНТИЯ</a></li>
                        <li><a href="#" class="nav-menu__item">ДОСТАВКА</a></li>
                        <li><a href="#" class="nav-menu__item">ОПЛАТА</a></li>
                        <li><a href="#" class="nav-menu__item">НАШИ МАГАЗИНЫ</a></li>
                        <li><a href="#" class="nav-menu__item">КОНТАКТЫ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!--    Меню под хедером-->
    <div id="subheader">
        <div class="subheader-inner">
            <div class="menu-category">
                <div class="header-catalog-menu mn_content">
                    <div id="header-drop-down-menu">
                        <span class="header-full-menu-button"><span id="h_catalog_t">Каталог товаров</span></span>
                    </div>
                </div>
            </div>
            <div class="contact-btn">
                <ul>
                    <li><div class="tt-icons message-icon"></div><span>мессенджеры</span></li>
                    <li class="livetex-btn"><div class="tt-icons consultant-icon"></div><span>онлайн консультант</span></li>
                    <li>
                            <div class="tt-icons call-icon"></div>
                            <span>обратный звонок</span>
                    </li>
                </ul>
            </div>
            <div class="phone">
                <span class="phone-icon"></span>
                <div class="geo-phone">
                    <a href="tel:+78003337183">8 (800) 333-71-83</a>    </div>
                <a href="#" class="callme button fancybox">
                    (Заказ, консультация - круглосуточно)
                </a>
            </div>
        </div>
        <div class="right-social">
            <ul class="center-social-icons">
                <li>
                    <a href="#">
                        <img src="/img/social/ins-tio.png" style="padding-bottom: 5px;">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/img/social/face-top.png" style="padding-bottom: 5px;">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/img/social/social-top.png">
                    </a>
                </li>
            </ul>
        </div>
    </div>
<!--    Слайдер-->
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <img src="/img/banners/banner-1.jpg">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="/img/banners/banner-2.jpg">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>



        <div class="popular-category">
            <div class="popular-text">
                <h2>Популярные категории товаров</h2><span>Весь каталог</span>
            </div>
        </div>
        <div class="popular-image">
            <div class="row">
                <div class="col-xs-4">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="popular-box-image">
                                  <img src="/img/popular/popular-image-4.png">
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="popular-text-image">
                                <div class="main-popular-text">
                                    Все для шитья
                                </div>
                                <ul class="ul-text">
                                    <li class="text-li">
                                        <a href="#">
                                            <span>Все для шитья</span>
                                        </a>
                                    </li>
                                    <li class="text-li">
                                        <a href="#">
                                            <span>Оверлоки</span>
                                        </a>
                                    </li>
                                    <li class="text-li">
                                        <a href="#">
                                            <span>Манекены</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="popular-box-image">
                                <img src="/img/popular/popular-image-2.png">
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="popular-text-image">
                                <div class="main-popular-text">
                                    Все для вышивания
                                </div>
                                <ul class="ul-text">
                                    <li class="text-li">
                                        <a href="#">
                                            <span>Вышивальные машины</span>
                                        </a>
                                    </li>
                                    <li class="text-li">
                                        <a href="#">
                                            <span>Швейно-вышивальные машины</span>
                                        </a>
                                    </li>
                                    <li class="text-li">
                                        <a href="#">
                                            <span>Принтеры по текстилю</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="popular-box-image">
                                <img src="/img/popular/popular-image-1.png">
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="popular-text-image">
                                <div class="main-popular-text">
                                    Все для вязания
                                </div>
                                <ul class="ul-text">
                                    <li class="text-li">
                                        <a href="#">
                                            <span>Вязальные машины</span>
                                        </a>
                                    </li>
                                    <li class="text-li">
                                        <a href="#">
                                            <span>Ткацкие станки</span>
                                        </a>
                                    </li>
                                    <li class="text-li">
                                        <a href="#">
                                            <span>Кеттельные машины</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 30px">
                <div class="col-xs-4">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="popular-box-image">
                                <img src="/img/popular/popular-image-3.png">
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="popular-text-image">
                                <div class="main-popular-text">
                                    Все для глажения
                                </div>
                                <ul class="ul-text">
                                    <li class="text-li">
                                        <a href="#">
                                            <span>Гладильные системы</span>
                                        </a>
                                    </li>
                                    <li class="text-li">
                                        <a href="#">
                                            <span>Гладильные доски</span>
                                        </a>
                                    </li>
                                    <li class="text-li">
                                        <a href="#">
                                            <span>Гладильные прессы</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="row">
                        <div class="col-xs-4" style="padding-left: 0">
                            <div class="popular-box-image">
                                <img src="/img/popular/popular-image-5.png">
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="popular-text-image">
                                <div class="main-popular-text">
                                    Все для уборки
                                </div>
                                <ul class="ul-text">
                                    <li class="text-li">
                                        <a href="#">
                                            <span>Пылесосы</span>
                                        </a>
                                    </li>
                                    <li class="text-li">
                                        <a href="#">
                                            <span>Пароочистители</span>
                                        </a>
                                    </li>
                                    <li class="text-li">
                                        <a href="#">
                                            <span>Паровые швабры</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="popular-box-image" style="text-align: right">
                                <img src="/img/popular/popular-aksesuar.png">
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="popular-text-image">
                                <div class="main-popular-text">
                                    Аксессуары и расходные материалы
                                </div>
                                <ul class="ul-text">
                                    <li class="text-li">
                                        <a href="#">
                                            <span>Лапки</span>
                                        </a>
                                    </li>
                                    <li class="text-li">
                                        <a href="#">
                                            <span>Иглы</span>
                                        </a>
                                    </li>
                                    <li class="text-li">
                                        <a href="#">
                                            <span>Фурнитура</span>
                                        </a>
                                    </li>
                                    <li class="text-li">
                                        <a href="#">
                                            <span>Нити</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="category-machine">
            <div class="lider-order">
                Лидеры продаж
            </div>
            <div class="row margin-5">
                <div class="col-xs-3">
                   <div class="card-block-image">
                       <div class="name-block-image">
                           <span>ШВЕЙНАЯ МАШИНА JAGUAR CINDERELLA</span>
                       </div>
                       <div class="img-block-image">
                            <img src="/img/sewing/image2.png">
                       </div>
                       <div class="price-block-image">
                           Цена: <span class="price">150 616 руб.</span>
                       </div>
                       <div class="btn-block-mage">
                           <div class="byu-block-image">
                               Купить
                           </div>
                           <div class="byu-one-block-image">
                               Купить в 1 клик
                           </div>
                       </div>

                   </div>
                </div>
                <div class="col-xs-3">
                    <div class="card-block-image">
                        <div class="name-block-image">
                            <span>ШВЕЙНАЯ МАШИНКА ASTRALUX GREEN LINE I</span>
                        </div>
                        <div class="img-block-image">
                            <img src="/img/sewing/astralux.png">
                        </div>
                        <div class="price-block-image">
                            Цена: <span class="price">4 616 руб.</span>
                        </div>
                        <div class="btn-block-mage">
                            <div class="byu-block-image">
                                Купить
                            </div>
                            <div class="byu-one-block-image">
                                Купить в 1 клик
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="card-block-image">
                        <div class="name-block-image">
                            <span>ШВЕЙНАЯ МАШИНА JAGUAR CINDERELLA</span>
                        </div>
                        <div class="img-block-image">
                            <img src="/img/sewing/image2.png">
                        </div>
                        <div class="price-block-image">
                            Цена: <span class="price">4 616 руб.</span>
                        </div>
                        <div class="btn-block-mage">
                            <div class="byu-block-image">
                                Купить
                            </div>
                            <div class="byu-one-block-image">
                                Купить в 1 клик
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="card-block-image">
                        <div class="name-block-image">
                            <span>ШВЕЙНАЯ МАШИНКА ASTRALUX GREEN LINE I</span>
                        </div>
                        <div class="img-block-image">
                            <img src="/img/sewing/astralux.png">
                        </div>
                        <div class="price-block-image">
                            Цена: <span class="price">4 616 руб.</span>
                        </div>
                        <div class="btn-block-mage">
                            <div class="byu-block-image">
                                Купить
                            </div>
                            <div class="byu-one-block-image">
                                Купить в 1 клик
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="seo-text">
            <span>
Короткий приветственный СЕО-текст  с кратким «о нас» и нашими преимуществами - гарантией,
кредитом,  рассрочкой, акциями, скидками, бонусами для постоянных покупателей, режимом
«утилизация» и акцией «продадим дешевле».
            </span>
        </div>
        <div class="category-machine">
            <div class="lider-new-order">
                НОВИНКИ
            </div>
            <div class="row margin-5">
                <div class="col-xs-3">
                    <div class="card-block-image">
                        <div class="name-block-image">
                            <span>ШВЕЙНАЯ МАШИНА JAGUAR CINDERELLA</span>
                        </div>
                        <div class="img-block-image">
                            <img src="/img/sewing/image2.png">
                        </div>
                        <div class="price-block-image">
                            Цена: <span class="price">4 616 руб.</span>
                        </div>
                        <div class="btn-block-mage">
                            <div class="byu-block-image">
                                Купить
                            </div>
                            <div class="byu-one-block-image">
                                Купить в 1 клик
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="card-block-image">
                        <div class="name-block-image">
                            <span>ШВЕЙНАЯ МАШИНКА ASTRALUX GREEN LINE I</span>
                        </div>
                        <div class="img-block-image">
                            <img src="/img/sewing/astralux.png">
                        </div>
                        <div class="price-block-image">
                            Цена: <span class="price">4 616 руб.</span>
                        </div>
                        <div class="btn-block-mage">
                            <div class="byu-block-image">
                                Купить
                            </div>
                            <div class="byu-one-block-image">
                                Купить в 1 клик
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="card-block-image">
                        <div class="name-block-image">
                            <span>ШВЕЙНАЯ МАШИНА JAGUAR CINDERELLA</span>
                        </div>
                        <div class="img-block-image">
                            <img src="/img/sewing/image2.png">
                        </div>
                        <div class="price-block-image">
                            Цена: <span class="price">4 616 руб.</span>
                        </div>
                        <div class="btn-block-mage">
                            <div class="byu-block-image">
                                Купить
                            </div>
                            <div class="byu-one-block-image">
                                Купить в 1 клик
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="card-block-image">
                        <div class="name-block-image">
                            <span>ШВЕЙНАЯ МАШИНКА ASTRALUX GREEN LINE I</span>
                        </div>
                        <div class="img-block-image">
                            <img src="/img/sewing/astralux.png">
                        </div>
                        <div class="price-block-image">
                            Цена: <span class="price">4 616 руб.</span>
                        </div>
                        <div class="btn-block-mage">
                            <div class="byu-block-image">
                                Купить
                            </div>
                            <div class="byu-one-block-image">
                                Купить в 1 клик
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="category-machine">
            <div class="lider-new-order">
                СКИДКИ И АКЦИИ
            </div>
            <div class="row margin-5">
                <div class="col-xs-3">
                    <div class="card-block-image">
                        <div class="name-block-image">
                            <span>ШВЕЙНАЯ МАШИНА JAGUAR CINDERELLA</span>
                        </div>
                        <div class="img-block-image">
                            <img src="/img/sewing/image2.png">
                        </div>
                        <div class="price-block-image">
                            Цена: <span class="price">4 616 руб.</span>
                        </div>
                        <div class="btn-block-mage">
                            <div class="byu-block-image">
                                Купить
                            </div>
                            <div class="byu-one-block-image">
                                Купить в 1 клик
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="card-block-image">
                        <div class="name-block-image">
                            <span>ШВЕЙНАЯ МАШИНКА ASTRALUX GREEN LINE I</span>
                        </div>
                        <div class="img-block-image">
                            <img src="/img/sewing/astralux.png">
                        </div>
                        <div class="price-block-image">
                            Цена: <span class="price">4 616 руб.</span>
                        </div>
                        <div class="btn-block-mage">
                            <div class="byu-block-image">
                                Купить
                            </div>
                            <div class="byu-one-block-image">
                                Купить в 1 клик
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="card-block-image">
                        <div class="name-block-image">
                            <span>ШВЕЙНАЯ МАШИНА JAGUAR CINDERELLA</span>
                        </div>
                        <div class="img-block-image">
                            <img src="/img/sewing/image2.png">
                        </div>
                        <div class="price-block-image">
                            Цена: <span class="price">4 616 руб.</span>
                        </div>
                        <div class="btn-block-mage">
                            <div class="byu-block-image">
                                Купить
                            </div>
                            <div class="byu-one-block-image">
                                Купить в 1 клик
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="card-block-image">
                        <div class="name-block-image">
                            <span>ШВЕЙНАЯ МАШИНКА ASTRALUX GREEN LINE I</span>
                        </div>
                        <div class="img-block-image">
                            <img src="/img/sewing/astralux.png">
                        </div>
                        <div class="price-block-image">
                            Цена: <span class="price">4 616 руб.</span>
                        </div>
                        <div class="btn-block-mage">
                            <div class="byu-block-image">
                                Купить
                            </div>
                            <div class="byu-one-block-image">
                                Купить в 1 клик
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="offer">
            <div class="offer-text">
                ЧТО МЫ МОЖЕМ ВАМ ПРЕДЛОЖИТЬ?
            </div>

            <div class="offer-category">
                <ul style="padding-left: 0;">
                    <li>
                        <div class="offer-category-img"><i class="stripe-icons we-have-all-icon"></i></div>
                        <div class="offer-category-text">
                            <div class="offer-category-head">У нас есть всё, что Вам нужно </div>
                            Вы всегда найдёте то, что хотели, если посетите наш магазин.
                        </div>
                    </li>
                    <li>
                        <div class="offer-category-img"><i class="stripe-icons exclusive-product-icon"></i></div>
                        <div class="offer-category-text">
                            <div class="offer-category-head">Предложение<br>эксклюзивного товара</div>
                            Только в ТекстильТорге Вы сможете найти эксклюзивные модели, которых нет на других торговых площадках.
                        </div>
                    </li>
                    <li>
                        <div class="offer-category-img"><i class="stripe-icons support-24-hour-icon"></i></div>
                        <div class="offer-category-text">
                            <div class="offer-category-head">Консультируем круглосуточно — ценим каждого покупателя!</div>
                            Если Вы никак не можете сделать выбор, наши менеджеры придут к Вам на помощь, проконсультируют по интересующим Вас вопросам и дадут подробную информацию по любой модели.
                        </div>
                    </li>
                    <li>
                        <div class="offer-category-img"><i class="stripe-icons new-assortment-icon"></i></div>
                        <div class="offer-category-text">
                            <div class="offer-category-head">Частое<br>обновление ассортимента </div>
                            Мы ежеминутно отслеживаем информацию производителей о новинках и как можно быстрее представляем их Вам.
                        </div>
                    </li>

                    <li>
                        <div class="offer-category-img"><i class="stripe-icons super-price-icon"></i></div>
                        <div class="offer-category-text">
                            <div class="offer-category-head">У нас антикризисные цены </div>
                            Расценки на наши товары всегда были, есть и остаются ниже рыночных. Секрет в том, что мы работаем напрямую с производителями.
                        </div>
                    </li>
                    <li>
                        <div class="offer-category-img"><i class="stripe-icons sewing-icon"></i></div>
                        <div class="offer-category-text">
                            <div class="offer-category-head">Тестируем машинки в Вашем присутствии </div>
                            При личном посещении нашего магазина Вы сможете получить всю информацию об интересующем Вас товаре и проверить его в действии, заказав бесплатный тест-драйв.
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <button class="accordion">КАК НАЙТИ И КУПИТЬ ЛУЧШУЮ ТЕХНИКУ?</button>
        <div class="panel">
            <p style="padding-top: 20px;">Специально для Вас мы подготовили на сайте раздел с полезной информацией, которая поможет Вам разобраться в огромном мире технических
                характеристик и разнообразии функций представленных моделей.</p>

            <p>Наши обзорные статьи и бесплатные тест-драйвы о товарах расскажут о том:</p>
            <p>· как работают швейно-вышивальные машинки, оверлоки, а также парогенераторы и гладильные системы;</p>
            <p>· какие дополнительные аксессуары могут пригодиться для улучшения функционала Вашей влажно-тепловой и швейно-вышивальной техники;</p>
            <p>· какие подарки и акции Вас ждут.</p>

            <p>Кроме того, мы составили подробное описание каждой модели и приложили инструкции по эксплуатации. Для всестороннего знакомства с товаром
                мы размещаем авторитетное мнение экспертов и отзывы тех, кто уже приобрёл швейные машинки в нашем магазине.</p>

            <p>Определившись с выбором, Вы можете купить швейную машину и любую другую технику в нашем стационарном магазине по адресу или заказать
                с доставкой к Вам на дом.</p>         </div>

        <button class="accordion">КАК ВЫБРАТЬ ПОДХОДЯЩИЙ ТОВАР ПО ВЫГОДНОЙ ЦЕНЕ?</button>
        <div class="panel">
            <p style="padding-top: 20px;">Специально для Вас мы подготовили на сайте раздел с полезной информацией, которая поможет Вам разобраться в огромном мире технических
                характеристик и разнообразии функций представленных моделей.</p>

            <p>Наши обзорные статьи и бесплатные тест-драйвы о товарах расскажут о том:</p>
            <p>· как работают швейно-вышивальные машинки, оверлоки, а также парогенераторы и гладильные системы;</p>
            <p>· какие дополнительные аксессуары могут пригодиться для улучшения функционала Вашей влажно-тепловой и швейно-вышивальной техники;</p>
            <p>· какие подарки и акции Вас ждут.</p>

            <p>Кроме того, мы составили подробное описание каждой модели и приложили инструкции по эксплуатации. Для всестороннего знакомства с товаром
                мы размещаем авторитетное мнение экспертов и отзывы тех, кто уже приобрёл швейные машинки в нашем магазине.</p>

            <p>Определившись с выбором, Вы можете купить швейную машину и любую другую технику в нашем стационарном магазине по адресу или заказать
                с доставкой к Вам на дом.</p>         </div>

        <button class="accordion">ШВЕЙНЫЕ МАШИНКИ: КАКИМИ БЫВАЮТ И КАК РАЗЛИЧАЮТСЯ?</button>
        <div class="panel">
            <p style="padding-top: 20px;">Специально для Вас мы подготовили на сайте раздел с полезной информацией, которая поможет Вам разобраться в огромном мире технических
                характеристик и разнообразии функций представленных моделей.</p>

            <p>Наши обзорные статьи и бесплатные тест-драйвы о товарах расскажут о том:</p>
            <p>· как работают швейно-вышивальные машинки, оверлоки, а также парогенераторы и гладильные системы;</p>
            <p>· какие дополнительные аксессуары могут пригодиться для улучшения функционала Вашей влажно-тепловой и швейно-вышивальной техники;</p>
            <p>· какие подарки и акции Вас ждут.</p>

            <p>Кроме того, мы составили подробное описание каждой модели и приложили инструкции по эксплуатации. Для всестороннего знакомства с товаром
                мы размещаем авторитетное мнение экспертов и отзывы тех, кто уже приобрёл швейные машинки в нашем магазине.</p>

            <p>Определившись с выбором, Вы можете купить швейную машину и любую другую технику в нашем стационарном магазине по адресу или заказать
                с доставкой к Вам на дом.</p>         </div>

        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            }
        </script>

        <div class="our-customers">
            <div class="our-customers-text">
                  НАШИ КЛИЕНТЫ
            </div>
            <div class="our-customers-image">
            <ul class="menu-ul">
                <li>
                    <div class="krug">
                        <img src="/img/krug.png">
                    </div>
                    <div class="krug1-text" style="text-align: center">
                        НАЗВАНИЕ<br> ФИРМЫ
                    </div>
                </li>
                <li>
                    <div class="krug">
                        <img src="/img/krug.png">
                    </div>
                    <div class="krug1-text" style="text-align: center">
                        НАЗВАНИЕ<br> ФИРМЫ
                    </div>
                </li>
                <li>
                    <div class="krug">
                        <img src="/img/krug.png">
                    </div>
                    <div class="krug1-text" style="text-align: center">
                        НАЗВАНИЕ<br> ФИРМЫ
                    </div>
                </li>
                <li>
                    <div class="krug">
                        <img src="/img/krug.png">
                    </div>
                    <div class="krug1-text" style="text-align: center">
                        НАЗВАНИЕ<br> ФИРМЫ
                    </div>
                </li>
                <li>
                    <div class="krug">
                        <img src="/img/krug.png">
                    </div>
                    <div class="krug1-text" style="text-align: center">
                        НАЗВАНИЕ<br> ФИРМЫ
                    </div>
                </li>
                <li>
                    <div class="krug">
                        <img src="/img/krug.png">
                    </div>
                    <div class="krug1-text" style="text-align: center">
                        НАЗВАНИЕ<br> ФИРМЫ
                    </div>
                </li>
            </ul>


            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="bottom-menu">
        <div class="footer-menu">
            <ul class="menu-ul">
                <li><a href="#">О НАС</a></li>
                <li><a href="#">АКЦИИ И СКИДКИ</a></li>
                <li><a href="#">ПОЛЕЗНОЕ</a></li>
                <li><a href="#">ГАРАНТИЯ</a></li>
                <li><a href="#">ДОСТАВКА</a></li>
                <li><a href="#">ОПЛАТА</a></li>
                <li><a href="#">НАШИ МАГАЗИНЫ</a></li>
                <li><a href="#">КОНТАКТЫ</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-menu-middle">
        <div class="container">
            <div class="row">
                    <div class="col-xs-3">
                        <span class="h-footer">АКЦИИ</span>
                        <ul class="ul-middle">
                            <li class="li-middle"><a href="#">Дарим 10%!</a></li>
                            <li class="li-middle"><a href="#">Рассрочка 0%</a></li>
                            <li class="li-middle"><a href="#">Дешевле не бывает.</a></li>
                            <li class="li-middle"><a href="#">Утилизация</a></li>
                            <li class="li-middle"><a href="#">Всегда онлайн!</a></li>
                            <li class="li-middle"><a href="#">Скидка по карте</a></li>
                            <li class="li-middle"><a href="#">Скидки вокруг,бери подруг!</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-3">
                        <span class="h-footer">ИНФОРМАЦИЯ</span>
                        <ul class="ul-middle">

                            <li class="li-middle"><a href="#">Конкурсы</a></li>
                            <li class="li-middle"><a href="#">Партнерам</a></li>
                            <li class="li-middle"><a href="#">Кредит</a></li>
                            <li class="li-middle"><a href="#">Обмен и возврат</a></li>
                            <li class="li-middle"><a href="#">Карта сайта</a></li>

                        </ul>
                    </div>

                <div class="col-xs-6">
                    <span class="h-footer">ПОЛЕЗНОЕ</span>
                    <ul class="ul-middle">
                        <li class="li-middle"><a href="#">Частые вопросы</a></li>
                        <li class="li-middle"><a href="#">Статьи</a></li>
                        <li class="li-middle"><a href="#">Инструкции</a></li>
                        <li class="li-middle"><a href="#">Тест драйвы и обзоры</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-block-text">
        <div class="container">
           <span>
            Внимание! Данный интернет-ресурс носит исключительно информационный характер и ни при каких условиях не является публичной офертой,
определяемой положениями ч. 2 ст. 437 Гражданского кодекса Российской Федерации. Для получения подробной информации о стоимости товара,
наличии, комплектации и сроках доставки, пожалуйста, обращайтесь к сотрудникам компании "ТекстильТорг"
по тел. 8 (800) 333-71-83 (круглосуточная бесплатная горячая линия по РФ).
        </span>
        <p style="font-size: 12px;color: #000;margin-top: 10px;">ТекстильТорг © 2008-2018 Все цены указаны в рублях. Мобильная версия</p>
        </div>
    </div>
    <div class="footer-logo-block">
        <div class="container">
            <div class="row">
                <div class="col-xs-3">
                    <a href="/">
                        <img class="footer_logo" src="/img/footer-logo.png" alt="Текстильторг">
                    </a>
                </div>
                <div class="col-xs-5">
                    <div class="footer-logo-text">
                         Реквизиты:<br>
                        Название организации: ООО «ТекстильТорг Регион»<br>
                        E-mail:<a href="mailto:info@textiletorg.ru" style="text-decoration: none;"><span style="color: #000000;">info@textiletorg.ru</span></a><br>
                        ОГРН: 1147746679508<br>
                        ИНН: 7736676633 <br>
                        <br>
                    </div>
                </div>
                <div class="col-xs-4">
                     <div class="social-icons">
                            <img src="/img/social/instagram.png">
                            <img src="/img/social/facebook.png">
                            <img src="/img/social/social-icons.png">

                     </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy">
        <div class="container">
            Все права защищены. Любое использование материалов сайта в сети Internet допустимо при условии размещения гипертекстовой ссылкой на источник
            заимствования.  Использование материалов сайта все сети Internet допускается исключительно с письменного разрешения правообладателя.
            Политика конфиденциальности.
        </div>
    </div>
    <div class="footer-end">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <span style="color:#000;font-size: 18px">ДАРИМ <span style="color:red;font-size: 18px">ПОДАРОК</span> ПРИ ЗАКАЗЕ ЧЕРЕЗ КОРЗИНУ</span>
                </div>
                <div class="col-xs-6" style="text-align: right;">
                    <span style="color:#000;font-size: 16px">Оформите заказ онлайн и получите подарок прямо сейчас!</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
