<?php

// begins template. -------------------------------------------------------------------------
get_header();
get_sidebar();
?>
    <div id="content" class="site-content row row-with-vspace">
        <main id="main" class="col-md-12 site-main" role="main">
            <header class="page-header">
                <?php
                the_archive_title('<h1 class="page-title h4">', '</h1>');
                the_archive_description('<div class="taxonomy-description">', '</div>');
                ?>
            </header><!-- .page-header -->
            <?php
            if (have_posts()) {
                $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
                while (have_posts()) {
                    the_post();
                    get_template_part('template-parts/content', 'page');
                    echo "\n\n";

                    $Bsb4Design->pagination();
                    echo "\n\n";

                    // If comments are open or we have at least one comment, load up the comment template
                    if (comments_open() || '0' != get_comments_number()) {
                        comments_template();
                    }
                    echo "\n\n";
                }// endwhile;


                unset($Bsb4Design);
            } else {
                get_template_part('template-parts/section', 'no-results');
            }// endif;
            ?>
        </main>
    </div><!--.site-content-->
<?php
get_sidebar();
get_footer();