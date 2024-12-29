<!DOCTYPE html>
<html <?php language_attributes(); ?> class="page ">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark light">

    <link rel="shortcut icon" type="image/png" sizes="16x16"
          href="<?php echo get_stylesheet_directory_uri() . '/assets/images/favicon-16x16.ebc231f6.png'; ?>">
    <link rel="shortcut icon" type="image/png" sizes="32x32"
          href="<?php echo get_stylesheet_directory_uri() . '/assets/images/favicon-32x32.e1f0fdcb.png'; ?>">

     <?php wp_head(); ?>

    <style>
        .page {
            scroll-padding-top: calc(var(--header-height));
        }
    </style>

    <script>
        document.documentElement.setAttribute("data-theme", localStorage.getItem("theme") || "dark");
    </script>
</head>

<body class="page__body">
<svg aria-hidden="true" width="0" height="0" style="position:absolute"></svg>
<div class="site-container">
    <header class="header header--home">
        <div class="container">

            <nav class="nav">
                <a class="logo " href="<?= esc_url(home_url()); ?>">
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $second_logo_id = get_theme_mod('second_logo');

                    if ($custom_logo_id) {
                        $logo_url = wp_get_attachment_image_src($custom_logo_id, 'full');

                        echo '<img class="logo__img" data-logo="light" src="' . esc_url($logo_url[0]) . '" alt="logo of markupers" width="181" height="21" loading="lazy" decoding="async" style="display:none">';
                    } else {
                        echo '<img class="logo__img" data-logo="light" src="' . get_stylesheet_directory_uri() . '/assets/images/logo.svg" alt="logo of markupers" width="181" height="21" loading="lazy">';
                    }

                    if ($second_logo_id) {
                        echo '<img class="logo__img" data-logo="dark" src="' . esc_url( $second_logo_id ) . '" alt="logo of markupers dark" width="181" height="21" loading="lazy" decoding="async" style="display:none">';
                    }
                    ?>
                </a>

                <div class="nav__inner">
                    <?php
                    wp_nav_menu(
                        $args = array(
                            'menu' => 'main-menu',
                            'menu_class' => 'nav__list',
                            'container' => -1,
                        ));
                    ?>

                    <button class="theme-switch" type="button">
                        <img class="theme-switch__icon dark"
                             src="<?php echo get_stylesheet_directory_uri() . '/assets/images/icons/dark.86dd0515.svg'; ?>">
                        <img class="theme-switch__icon light"
                             src="<?php echo get_stylesheet_directory_uri() . '/assets/images/icons/light.9b29ab32.svg'; ?>">
                        <span class="sr-only">Color theme change button</span>
                    </button>

                </div>

                <button class="burger" type="button">
                    <span class="sr-only">Open mobile menu</span>
                    <span class="burger__line"></span>
                </button>
            </nav>

        </div>
    </header>

    <script>const startHeightValue = () => {
            let vh = window.innerHeight * 1;
            document.querySelector(":root").style.setProperty("--vh", `${vh}px`);
            const pageHeader = document.querySelector(".header");
            const headerHeight = pageHeader ? pageHeader.offsetHeight : 0;
            document.documentElement.style.setProperty("--header-height", `${headerHeight}px`);
        };
        window.addEventListener("resize", startHeightValue);
        window.addEventListener("scroll", startHeightValue);
        startHeightValue();
    </script>