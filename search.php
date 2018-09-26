<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
        <?php if ( have_posts() ) : ?>
        <div class="section_left">
          <div class="frist_img_sec">
            <h3 class="img-tittle"><?php printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
          </div>
        </div>
        <?php else : ?>
        <div class="section_left">
          <div class="frist_img_sec">
            <h3 class="img-tittle">
              <?php _e( 'Nothing Found', 'twentyseventeen' ); ?>
            </h3>
          </div>
        </div>
        <?php endif; ?>
        <!-- .page-header -->
        <div class="thums_allqw">
          <?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				//get_template_part( 'template-parts/post/content', 'excerpt' );
?>
          <div class="container-loop-post">
            <div class="imgsec"><a href="<?php echo get_the_permalink(); ?>">
              <?php the_post_thumbnail('custom-size');  ?>
              
              </a> </div>
            <div class="post-text">
              <h5 class="title-post"><a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
                </a></h5>
              <div class="open-sense post-excerpt">
                <?php the_content(); ?>
              </div>
            </div>
            <div class="clear"></div>
          </div>
          <?php
			endwhile; // End of the loop.

			the_posts_pagination( array(
				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
			) );

		else : ?>
          <p>
            <?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen' ); ?>
          </p>
          <?php
				get_search_form();

		endif;
		?>
        </div>
        <!-- #primary --> 
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer();

