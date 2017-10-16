<?php
/*
Template Name: Front Page
Template Post Type: post, page, product
*/


// begins template. -------------------------------------------------------------------------
get_header();
get_sidebar();
?>
    <div class="row mb-4">
        <div class="col-12">
            <?php echo do_shortcode('[slide-anything id="106"]'); ?>
        </div>
    </div>
    <div id="content" class="site-content">
        <main id="main" class="row site-main" role="main">

            <?php // Display blog posts on any page @ http://m0n.co/l
            $temp = $wp_query;
            $wp_query = null;
            $wp_query = new WP_Query();
            $wp_query->query('showposts=3' . '&paged=' . $paged);
            $pcount = 0;
            while ($wp_query->have_posts()) : $wp_query->the_post();
                $pcount = $pcount + 1;
                if ($pcount !== 3) {
                    get_template_part('template-parts/front-content', get_post_format());
                } else {
                    get_template_part('template-parts/content-cols', get_post_format());
                }
                ?>
            <?php endwhile; ?>
        </main>
    </div><!--.site-content-->
    <div class="row custom-cont no-gutters mb-4">
        <?php dynamic_sidebar('widget-content'); ?>
    </div>
    <div class="row">
        <div class="col-12 col-lg-6 mb-4">
            <?php dynamic_sidebar('widget-present-1'); ?>
        </div>
        <div class="col-12 col-lg-6">
            <div class="row">
                <?php dynamic_sidebar('widget-present-2'); ?>
            </div>
        </div>
    </div>
<?php
//get_sidebar();
get_footer();