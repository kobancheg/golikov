<?php
/**
 * The archive template.
 *
 * Use for display author archive, category, custom post archive, custom taxonomy archive, tag, date archive.<br>
 * These archive can override by each archive file name such as category will be override by category.php.<br>
 * To learn more, please read on this link. https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bootstrap-basic4
 */


// begins template. -------------------------------------------------------------------------
get_header();
get_sidebar();
?>

    <div id="content" class="site-content row">
        <main id="main"
              class="col-md-12<?php // echo \BootstrapBasic4\Bootstrap4Utilities::getMainColumnSize(); ?> site-main"
              role="main">
            <?php if (have_posts()) { ?>
                <header class="page-header">
                    <?php
                    the_archive_title('<h1 class="page-title h4">', '</h1>');
                    the_archive_description('<div class="taxonomy-description">', '</div>');
                    ?>
                </header><!-- .page-header -->

                <?php
                // Start the Loop
                while (have_posts()) {
                    the_post();
                    get_template_part('template-parts/content', get_post_format());
                } //endwhile;

                $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
                $Bsb4Design->pagination();
                unset($Bsb4Design);
            } else {
                get_template_part('template-parts/section', 'no-results');
            } //endif;
            ?>
        </main>
    </div><!--.site-content-->
<?php
//get_sidebar('right');
get_footer();