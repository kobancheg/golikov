<?php
/**
 * The theme footer.
 *
 * @package bootstrap-basic4
 */
?>

</div><!--.page-container-->

<footer id="site-footer" class="site-footer page-footer py-3" role="contentinfo">
    <div class="container">
        <div id="footer-row" class="row">
            <?php dynamic_sidebar('footer-right'); ?>
        </div>
</footer><!--.page-footer-->
<!--wordpress footer-->
<?php wp_footer(); ?>
<!--end wordpress footer-->

</body>
</html>