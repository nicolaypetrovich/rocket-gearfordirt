<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrapper_section2">
  <div class="container">
    <div class="row">
      <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="section_left">
          <div class="frist_img_sec">
            <p class="img-tittle">DIRT BIKES</p>
            <img src="<?php echo get_template_directory_uri().'/images/biker icon.png'?>" class="biker_a1"> </div>
        </div>
        <div class="thums_allqw1">
         
			<?php
			if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
          <div class="imga112 bot_border">
            <div class="image-wrapper">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="card-body aaqqww">
              <div class="card-body-wrapper">
                <h3 class="card-text">
                  <?php the_title(); ?>
                </h3>
                <p>
                  <?php the_content(); ?>
                </p>
              </div>
            </div>
          </div>
          <?php endwhile; endif;?>
          
/*
          <div class="map-contant">
            <h3 class="card-text">DIRT BIKE & MOTOCROSS TRACKS TO GET YOU STARTED</h3>
            <button type="button" class="btn btn-primary btn-intro btn-lg">Alabama</button>
            <?php
             // $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
             // if( $related ) foreach( $related as $post ) {
             // setup_postdata($post);
            ?>
                <div class="map-container">
              		<div class="map-image-container">
                		<?php // the_post_thumbnail();  ?>
              		</div>
             		<div class="map-text">
                		<h5><a class="releated_title" href=" <?php // the_permalink(); ?>"><?php // the_title(); ?></a></h5>
                		<?php // the_content(); ?>
              		</div>
            	</div>


		<?php 
		// }
		// wp_reset_postdata();
		?>
          </div>
*/
        </div>
      </div>
      
      <!-- right section is here-->
      
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer();