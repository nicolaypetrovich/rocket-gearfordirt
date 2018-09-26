<?php

global $theme_options;

/**

 * The header for our theme

 *

 * This is the template that displays all of the <head> section and everything up until <div id="content">

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package WordPress

 * @subpackage Custom Theme

 * @since 1.0

 * @version 1.0

 */

?>
<!DOCTYPE html>

<html <?php

language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php

bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,500,700,700i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<?php

wp_head(); ?>
</head>

<body <?php

body_class(); ?>>
<header id="masthead" class="site-header" role="banner">
  <div class="wrapper_nav">
    <nav class="navbar navbar-expand-lg navbar-light navaling-end nav-custom">
      <div class="container">
        <?php

$logo = $theme_options['header_logo'];

?>
        <div class="header-left"> <a class="navbar-brand" href="<?php

echo site_url(); ?>"> <img src="<?php

echo $logo['url']; ?>" class="img-fluid"></a> </div>
        <div class="header-right">
          <div class="collapse navbar-collapse custom-nav-margin" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"> <a class="nav-link link-top" href="#">Latest gear, Tips, Tricks & Other Cod Stuff <span class="sr-only">(current)</span></a> </li>
              <li class="nav-item"> 
                <div class="search-container">
                  <form role="search" action="<?php

echo site_url('/'); ?>" method="get">
                    <input class="search-custom" type="search" name="s" placeholder=""/>
                    <input type="hidden"  />
                    <!-- // hidden 'your_custom_post_type' value -->
                    
                    <button type="submit"><i class="fa fa-search" style="color:#fff;"></i></button>
                  </form>
                </div>
                </li>
            </ul>
            <ul class="social" >
              <li>
                <?php

$google = $theme_options['footer_google'];



if ($google)

	{ ?>
                <a href="<?php

	echo $google; ?>" target="_blank"> <i class="fab fa-google-plus-g"></i></a>
                <?php

	} ?>
              </li>
              <li>
                <?php

$fb = $theme_options['footer_fb'];



if ($fb)

	{ ?>
                <a href="<?php

	echo $fb; ?>" target="_blank"> <i class="fab fa-facebook-f"></i></a>
                <?php

	} ?>
              </li>
              <li>
                <?php

$twiter = $theme_options['footer_tw'];



if ($twiter)

	{ ?>
                <a href="<?php

	echo $twiter; ?>" target="_blank"> <i class="fab fa-twitter"></i></a>
                <?php

	} ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light nav2_bottam">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php

echo do_shortcode('[newsletter_form form="1"]'); ?>
        <div class="wrap-div">
          <div>
            <?php

wp_nav_menu(array(

	'theme_location' => 'custom',

	'menu_class' => 'custom-menu','item_sep' => '&#x7c;'

)); ?>
          </div>
          <div> <a href="#" class="submit-btn">Submit</a> </div>
        </div>
      </div>
    </div>
  </nav>
  
  <section class="for-mobile">
    <div class="header-right">
      <div class="container">
        <div class="collapse navbar-collapse custom-nav-margin" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"> <a class="nav-link link-top" href="#">Latest gear, Tips, Tricks & Other Cod Stuff <span class="sr-only">(current)</span></a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">
              <div class="search-container">
                <form role="search" action="<?php

echo site_url('/'); ?>" method="get">
                  <input type="search" name="s" placeholder=""/>
                  <input type="hidden"  />
                  <!-- // hidden 'your_custom_post_type' value -->
                  
                  <button type="submit"><i class="fa fa-search" style="color:#fff;"></i></button>
                </form>
              </div>
              </a> </li>
          </ul>
          <ul class="social" >
            <li>
              <?php

$google = $theme_options['footer_google'];



if ($google)

	{ ?>
              <a href="<?php

	echo $google; ?>" target="_blank"> <i class="fab fa-google-plus-g"></i></a>
              <?php

	} ?>
            </li>
            <li>
              <?php

$fb = $theme_options['footer_fb'];



if ($fb)

	{ ?>
              <a href="<?php

	echo $fb; ?>" target="_blank"> <i class="fab fa-facebook-f"></i></a>
              <?php

	} ?>
            </li>
            <li>
              <?php

$twiter = $theme_options['footer_tw'];



if ($twiter)

	{ ?>
              <a href="<?php

	echo $twiter; ?>" target="_blank"> <i class="fab fa-twitter"></i></a>
              <?php

	} ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light nav2_bottam">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php

echo do_shortcode('[newsletter_form form="1"]'); ?>
          <div class="wrap-div">
            <div>
              <?php

wp_nav_menu(array(

	'theme_location' => 'custom',

	'menu_class' => 'custom-menu','item_sep' => '&#x7c;'

)); ?>
            </div>
            <div> <a href="#" class="submit-btn">Submit</a> </div>
          </div>
        </div>
      </div>
    </nav>
  </section>
  
</header>
<!-- #masthead -->
<?php if(!is_front_page()) {?>
<div class="header-thumbs">
  <div class="row row-aling">
    <?php 

	  

$categories = get_categories( array(

    'hide_empty'   => 0,

    'orderby' => 'name',

    'order'   => 'ASC',

	'exclude' =>1

) );

 

foreach( $categories as $category ) {   ?>
    <div class="card list-all" >
      <div class="card-body aa">
        <p class="card-text cat-text"><a href="<?php echo get_term_link( $category->term_id ); ?>"><?php echo $category->name; ?></a></p>
      </div>
    </div>
    <?php
 }
   	  ?>
  </div>
</div>
<?php }?>
