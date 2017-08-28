<?php
/**
 * The theme header.
 *
 * @package bootstrap-basic4
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <!--wordpress head-->
    <?php wp_head(); ?>
    <!--end wordpress head-->
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 9]>
<p class="ancient-browser-alert"><?php _e('You are using an <strong>outdated</strong> browser. Please <a
    href="http://browsehappy.com/" target="_blank">upgrade your browser</a>.', 'bootstrap-basic4'); ?></p>
<![endif]-->
<div class="container page-container">
    <header class="page-header page-header-sitebrand-topbar">
        <div class="row row-with-vspace site-branding">
            <div class="col-auto ml-3 page-header-top-right">
                <div class="sr-only">
                    <a href="#content"
                       title="<?php esc_attr_e('Skip to content', 'bootstrap-basic4'); ?>"><?php _e('Skip to content', 'bootstrap-basic4'); ?></a>
                </div>
                <?php if (is_active_sidebar('header-right')) { ?>
                    <div class="float-xs-right">
                        <?php dynamic_sidebar('header-right'); ?>
                    </div>
                    <!--                    <div class="clearfix"></div>-->
                <?php } // endif; ?>
            </div>
            <div class="col-md-10 site-title">
                <h1 class="site-title-heading">
                    <a href="<?php echo esc_url(home_url('/')); ?>"
                       title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
                       rel="home"><?php bloginfo('name'); ?></a>
                </h1>
                <div class="col-md-10">
                    <nav class="navbar navbar-toggleable-sm navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                                data-target="#bootstrap-basic4-topnavbar" aria-controls="bootstrap-basic4-topnavbar"
                                aria-expanded="false"
                                aria-label="<?php esc_attr_e('Toggle navigation', 'bootstrap-basic4'); ?>">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div id="bootstrap-basic4-topnavbar" class="collapse navbar-collapse">
                            <?php
                            wp_nav_menu(
                                array(
                                    'depth' => '2',
                                    'theme_location' => 'primary',
                                    'container' => false,
                                    'menu_class' => 'navbar-nav mr-auto',
                                    'walker' => new \BootstrapBasic4\BootstrapBasic4WalkerNavMenu()
                                )
                            );
                            ?>
                            <div class="float-md-right">
                                <?php dynamic_sidebar('navbar-right'); ?>
                            </div>
                            <div class="clearfix"></div>
                        </div><!--.navbar-collapse-->
                        <div class="clearfix"></div>
                    </nav>
                </div>
                <!--<div class="site-description">
                    <small>
                        <?php /*bloginfo('description'); */ ?>
                    </small>
                </div>-->
            </div>
        </div><!--.site-branding-->
        <!--<div class="row main-navigation">

        </div><!--.main-navigation-->
    </header><!--.page-header-->

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class=""
                     src="http://marshal-golikov.ru/wp-content/themes/bootstrap-basic4/assets/img/slider/00001.jpg">

                <img class=""
                     src="http://marshal-golikov.ru/wp-content/themes/bootstrap-basic4/assets/img/slider/00002.jpg">

                <img class=""
                     src="http://marshal-golikov.ru/wp-content/themes/bootstrap-basic4/assets/img/slider/00003.jpg">

                <img class=""
                     src="http://marshal-golikov.ru/wp-content/themes/bootstrap-basic4/assets/img/slider/00004.jpg">

                <img class=""
                     src="http://marshal-golikov.ru/wp-content/themes/bootstrap-basic4/assets/img/slider/00005.jpg">

                <img class=""
                     src="http://marshal-golikov.ru/wp-content/themes/bootstrap-basic4/assets/img/slider/00006.jpg">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div id="content" class="site-content row row-with-vspace">