<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Freifunk_Rheinland
 * @since Freifunk Rheinland 1.0
 */
?>
	</div><!-- #main .wrapper -->
        <div id="footer">
	<footer id="colophon" role="contentinfo">
                <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'nav-menu' ) ); ?>
        </footer><!-- #colophon -->
        </div>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
