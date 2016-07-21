<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
get_header( startpage ); ?>

<!-- LOCATIONS -->
<div class="locations small-12 large-12 row align-center align-middle">
	<h1 class="section small-12 text-center" style="color: #fff;">CHOOSE A LOCATION</h1>
	<div class="section small-12 row medium-unstack align-spaced">
		<div class="large-3 column">
			<a href="http://omahahls.com/expresspawntemp/lincoln/"><img src="<?php bloginfo('template_directory'); ?>/img/expresspawnLincoln.jpg"></a>
			<h2 style="color: #fff;">Lincoln, NE</h2>
		</div>
		<div class="large-3 column">
			<a href="http://omahahls.com/expresspawntemp/grandisland/"><img src="<?php bloginfo('template_directory'); ?>/img/expresspawnGI.jpg"></a>
			<h2 style="color: #fff;">Grand Island, NE</h2>
		</div>
		<div class="large-3 column">
			<a href="http://omahahls.com/expresspawntemp/ames/"><img src="<?php bloginfo('template_directory'); ?>/img/expresspawnAmes.png"></a>
			<h2 style="color: #fff;">Ames, IA</h2>
		</div>
	</div>
</div>

<?php get_footer( ); ?>




