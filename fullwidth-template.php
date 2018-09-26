<?php /*
Template Name: Fullwidth Template
*/ ?>
<?php get_header(); ?>


<div class="wrapper_section2">
  <div class="container">
    <div class="line-custom"></div>
    <div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="section_left">
  <?php if ( have_posts() ) : ?>
        <div class="frist_img_sec">
        <?php get_the_title();?>
           
            <img src="<?php echo get_template_directory_uri().'/images/biker icon.png'?>" class="biker_a1"> </div>
       
        <?php endif; ?>
 </div>
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				//if ( comments_open() || get_comments_number() ) :
//					comments_template();
//				endif;

			endwhile; // End of the loop.
			?>
 </div>
	
     

</div>
<div class="line-custom-1"></div>
</div>
</div>
<?php get_footer(); ?>