<?php
/*
Template Name: Lincoln
*/

 get_header( lincoln ); ?>

 <?php do_action( 'foundationpress_before_content' ); ?>

 <?php while ( have_posts() ) : the_post(); ?>
   
      
    <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
    
          <div class="entry-content">
            <div class="product-page small-12 row align-center">
              <div class="product-card small-11 medium-10 large-9 column"> 
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