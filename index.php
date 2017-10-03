<?php
/**
 * The main template file.
 * 
 * To override home page (for listing latest post) add home.php into the theme.<br>
 * If front page displays is set to static, the index.php file will be use.<br>
 * If front-page.php exists, it will be override any home page file such as home.php, index.php.<br>
 * To learn more please go to https://developer.wordpress.org/themes/basics/template-hierarchy/ .
 * 
 * @package bootstrap-basic4
 */


// begins template. -------------------------------------------------------------------------
get_header();
get_sidebar();
?>
    <div class="container-fluid mb-4">
        <div class="row">
            <div class="col-12">
                <?php echo do_shortcode('[slide-anything id="106"]'); ?>
            </div>
        </div>
    </div><!--.page-container-->
    <div class="container mb-4">
        <div id="content" class="site-content row row-with-vspace">

            <main id="main"
                  class="col-md-12<?php // echo \BootstrapBasic4\Bootstrap4Utilities::getMainColumnSize(); ?> site-main"
                  role="main">
                <div class="card-deck">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            get_template_part('template-parts/content', get_post_format());
                        }// endwhile;

                        $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
                        $Bsb4Design->pagination();
                        unset($Bsb4Design);
                    } else {
                        get_template_part('template-parts/section', 'no-results');
                    }// endif;
                    ?>
                </div>
            </main>
        </div><!--.site-content-->
    </div><!--.page-container-->
    <div class="bg-row mb-4">
        <div class="container">
            <div class="card-deck">
                <?php dynamic_sidebar('widget-content'); ?>
            </div>
        </div>
    </div><!--.page-container-->
    <div class="container mb-4">
        <div class="card-deck">
            <?php dynamic_sidebar('widget-present'); ?>
        </div>
    </div>
<?php
//get_sidebar();
get_footer();