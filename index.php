<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>
<?php get_header(); ?>

<section class="gallery-section">
  <div class="overlay-section">
    <div class="gallry-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 left-part">
            <div class="fris-gg">
              <?php 
		$categories = get_categories( array(
			'hide_empty'   => 0,
			'orderby' => 'name',
			'order'   => 'ASC',
			'exclude' =>1
		) );
  
		foreach( $categories as $category ) { 
		$image = get_field('image', $category->taxonomy . '_' . $category->term_id );
		?>
                <div class="card card-ali2" style="">
                    <a href="<?php echo get_term_link( $category->term_id ); ?>">
                    <img class="card-img-top card-image" src="<?php echo $image['url']; ?>" alt="Card image cap"></a>
                    <div class="card-body btn-glay" style="padding:0px">
                    <button class="gllary-btn">
                        <a href="<?php echo get_term_link( $category->term_id ); ?>"> <?php echo $category->name ;?>
                    </button>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="wrapper_section2">
  <div class="container">
    <div class="line-custom"></div>
    <div class="row">
      <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="section_left">
          <div class="frist_img_sec">
            <p class="img-tittle">POPULAR</p>
            <img src="<?php echo get_template_directory_uri().'/images/biker icon.png'?>" class="biker_a1"> </div>
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
                <?php
				// the_content();
				the_excerpt();
				?>
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
</div>
<?php get_footer(); ?>