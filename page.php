<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
    <div class="line-custom"></div>
    <div class="row">
  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
  <div class="section_left">
 
 </div>
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				//if ( comments_open() || get_comments_number() ) :
					comments_template();
//				endif;

			endwhile; // End of the loop.
			?>
 </div>
	<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
           <?php get_sidebar(); ?>     
      </div>
     

</div>
<div class="line-custom-1"></div>
</div>
</div>
<?php get_footer();