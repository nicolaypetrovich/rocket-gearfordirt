<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyseventeen' ); ?></h1>
				</header><!-- .page-header -->
				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyseventeen' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
            </div>
            
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
           <?php get_sidebar(); ?>     
      </div>
	</div>
    </div>
    </div>

<?php get_footer();
