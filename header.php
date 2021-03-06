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
    <header class="page-header site-branding mb-4">
        <div class="row row-with-vspace no-gutters">
            <div class="col-2 text-lg-center text-xl-right mt-2 mt-md-0 d-none d-sm-block">
                <div class="sr-only">
                    <a href="#content"
                       title="<?php esc_attr_e('Skip to content', 'bootstrap-basic4'); ?>"><?php _e('Skip to content', 'bootstrap-basic4'); ?></a>
                </div>
                <?php if (is_active_sidebar('header-right')) { ?>
                    <div class="float-xs-right">
                        <?php dynamic_sidebar('header-right'); ?>
                    </div>
                <?php } // endif; ?>
            </div>
            <div class="col-12 col-sm-10 col-lg-9 site-title d-flex align-content-lg-between
                flex-wrap-reverse flex-lg-wrap pl-0 pl-sm-3 pl-md-0">
                <h1 class="site-title-heading mx-auto mt-2 mt-sm-3 mt-lg-4 text-sm-center">
                    <a href="<?php echo esc_url(home_url('/')); ?>"
                       title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
                       rel="home"><? //php bloginfo('name'); ?>Маршал Советского Союза <br class="d-md-none">Филипп
                        Иванович Голиков</a>
                </h1>
                <nav class="navbar navbar-expand-lg mx-lg-auto navbar-light align-self-center">
                    <a class="navbar-brand d-block d-lg-none h2 mb-0" href="#">Меню</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#bootstrap-basic4-topnavbar" aria-controls="bootstrap-basic4-topnavbar"
                            aria-expanded="false"
                            aria-label="<?php esc_attr_e('Toggle navigation', 'bootstrap-basic4'); ?>">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div id="bootstrap-basic4-topnavbar" class="collapse navbar-collapse">
                        <?php
                        wp_nav_menu(
                            array(
                                'depth' => '0',
                                'theme_location' => 'primary',
                                'container' => false,
                                'menu_class' => 'navbar-nav',
                                'walker' => new \BootstrapBasic4\BootstrapBasic4WalkerNavMenu()
                            )
                        );
                        ?>
                        <div class="float-md-right">
                            <?php dynamic_sidebar('navbar-right'); ?>
                        </div>
                    </div><!--.navbar-collapse-->
                </nav>
            </div>
        </div><!--.site-branding-->
    </header><!--.page-header-->
