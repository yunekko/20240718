<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- meta情報 -->
    <meta name="keywords" content="建築" />

    <!-- ogp -->
    <meta property="og:title" content="CODO ASSIST" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://xs589126.xsrv.jp/codo_assist_test/" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/products1.jpg" />
    <meta property="og:site_name" content="CODO ASSIST" />
    <meta property="og:description" content="CODO ASSIST/世界を「アッ！」と驚かせる当たり前を。お客様の「アッ！」を楽しみに。
それが我々が目指す製品コンセプトです。
だからこそ面白く、そして遊びごごろを大切にします。
お客様の笑顔を見たい。
アッと驚く体験をぜひ手に取ってみてください。" />

    <!-- noindex -->
    <meta name="ots" content="noindex" />
    <!-- nofollow -->
    <meta name="robots" content="nofollow" />

    <!-- ファビコン -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="p-header l-header js-header">
        <div class="p-header__inner">
            <h1 class="p-header__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="会社のロゴ" /></a>
            </h1>

            <?php
            $args = [
                'menu' => 'global-navigation',
                'menu_class' => 'p-header__nav-list',
                'container' => 'nav',
                'container_class' => 'p-header__nav js-drawer',
            ];
            wp_nav_menu($args); ?>

            <button class="p-header__hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>


    </header>