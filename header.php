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
            <div class="col-2 text-lg-center text-xl-right">
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
            <div class="col-9 site-title d-flex align-content-between flex-wrap">
                <h1 class="site-title-heading mx-auto mt-4">
                    <a href="<?php echo esc_url(home_url('/')); ?>"
                       title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
                       rel="home"><?php bloginfo('name'); ?></a>
                </h1>
                <nav class="navbar navbar-expand-lg mx-auto p-0">
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
        </div><!--.site-branding-->
    </header><!--.page-header-->
