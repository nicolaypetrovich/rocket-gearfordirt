<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
  <?php if ( have_posts() ) : ?>
        <div class="frist_img_sec">
        <?php
				the_archive_title( '<h3 class="img-tittle">', '</h3>' );
				//the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
           
            <img src="<?php echo get_template_directory_uri().'/images/biker icon.png'?>" class="biker_a1"> </div>
       
        <?php endif; ?>
 </div>
		
	
	 <div class="thums_allqw">
        
        	<?php
			if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>
              <div class="container-loop-post">
            <div class="imgsec"><a href="<?php echo get_the_permalink(); ?>">
              <?php the_post_thumbnail('custom-size');  ?>
              
              </a> </div>
            <div class="post-text">
              <h5 class="title-post"><a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
                </a></h5>
              <div class="open-sense post-excerpt">
                <?php // the_content(); 
			the_excerpt(); ?>
              </div>
            </div>
            <div class="clear"></div>
          </div>
                     
       <?php endwhile; endif;?>
          </div>
    </div>
	<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
           <?php get_sidebar(); ?>     
      </div>
     

</div>
<div class="line-custom-1"></div>
</div>
</div>
<?php get_footer();
