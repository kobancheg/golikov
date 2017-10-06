<?php
/**
 * The theme footer.
 *
 * @package bootstrap-basic4
 */
?>

</div><!--.page-container-->

<footer id="site-footer" class="site-footer page-footer pt-4" role="contentinfo">
    <div class="container">
        <div id="footer-row" class="row d-flex justify-content-around">
            <!--<div class="col-md-6 footer-left">
                        <?php
            /*                        if (!dynamic_sidebar('footer-left')) {
                                        printf(__('Powered by %s', 'bootstrap-basic4'), 'WordPress');
                                        echo ' | ';
                                        printf(__('Theme: %s', 'bootstrap-basic4'), '<a href="http://rundiz.com">Bootstrap Basic4</a>');
                                    }
                                    */ ?>
                    </div>-->
            <!--<div class="col-md-6 footer-right text-right">
                        <?php /*dynamic_sidebar('footer-right'); */ ?>
                    </div>-->
            <?php dynamic_sidebar('footer-right'); ?>
        </div>
</footer><!--.page-footer-->
<!--wordpress footer-->
<?php wp_footer(); ?>
<!--end wordpress footer-->

</body>
</html>