<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

 <?php do_action( 'foundationpress_before_content' ); ?>

 <?php while ( have_posts() ) : the_post(); ?>
   
      
    <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		
       		<div class="entry-content">
       				<div class="product-page small-12 row align-center">
							<div class="section small-11 medium-8 row">	
           		<?php the_content(); ?>
           		
           	</div>
      		</div>
      		</div>
       <footer>
           <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
         
       </footer>
       
   
 <?php endwhile;?>

 <?php do_action( 'foundationpress_after_content' ); ?>




 <?php get_footer();