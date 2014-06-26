<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Hellish Simplicity
 * @since Hellish Simplicity 1.1
 */
?>

</div><!-- #main .site-main -->

<footer id="site-footer" role="contentinfo">
	<div id="site-info">
		<?php _e( 'Copyright', 'hellish' ); ?> &copy; <?php bloginfo( 'name' ); ?> <?php echo date( 'Y' ); ?> 		
	</div><!-- #site-info -->
</footer><!-- #colophon .site-footer -->

<?php wp_footer(); ?>
<script type="text/javascript">
var infolinks_pid = 284771;
var infolinks_wsid = 5;
</script>
<script type="text/javascript" src="http://resources.infolinks.com/js/infolinks_main.js"></script>
</body>
</html>