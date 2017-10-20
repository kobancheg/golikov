<?php
/*
Template Name: Page of sidebar
Template Post Type: post, page, product
*/

// begins template. -------------------------------------------------------------------------
get_header();
get_sidebar();
?>
    <div id="content" class="site-content row row-with-vspace">
        <main id="main"
              class="col-12 col-md-8 col-lg-9<? //php echo \BootstrapBasic4\Bootstrap4Utilities::getMainColumnSize(); ?> site-main"
              role="main">
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
        <aside class="col-12 col-md-4 col-lg-3">
            <header class="card-header">
                <h1 class="h6 text-center">Воинские должности и звания</h1>
            </header>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Командир стрелкового полка (11.1931)</li>
                <li class="list-group-item">Командир стрелковой дивизии (11.1933)</li>
                <li class="list-group-item">Командир отдельной механизированной бригады (09.1936)</li>
                <li class="list-group-item">Командир механизированного корпуса (06.1937)</li>
                <li class="list-group-item">Корпусный комиссар (12.1937)</li>
                <li class="list-group-item">Комкор (01.1938)</li>
                <li class="list-group-item">Генерал-лейтенант (06.1940)</li>
                <li class="list-group-item">Генерал-полковник (01.1943)</li>
                <li class="list-group-item">Генерал-армии (05.1959)</li>
                <li class="list-group-item">Маршал Советского Союза (05.1961)</li>
            </ul>
        </aside>
        <? //php
        get_sidebar('right');
        ?>
    </div><!--.site-content-->
<?php
//get_sidebar('right');
get_footer();