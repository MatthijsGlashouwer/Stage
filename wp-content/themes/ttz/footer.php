<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package myfirstheme
 */

?>

</div><!-- #content -->
</div><!-- #page -->
</div><!-- .container -->
<div class="container">
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">

	<ul id="sidebar">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</ul>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #container -->

<?php wp_footer(); ?>

</body>
</html>
