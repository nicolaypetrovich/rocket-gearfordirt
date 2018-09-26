<?php

/**

 * The template for displaying the footer

 *

 * Contains the closing of the #content div and all content after.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package WordPress

 * @subpackage Twenty_Seventeen

 * @since 1.0

 * @version 1.2

 */



?>



		

<footer id="colophon" class="footer_sec">

	<div class="container">		

<div class="footer-1">

    <div class="footer-copy">Copyright 2018 Gearfordirt.com </div>
              <?php

wp_nav_menu(array(

	'theme_location' => 'footer-menu',

	'menu_class' => 'footer-menu-custom','item_sep' => '&#x7c;'

)); ?>
  </div>
   </div>
</footer><!-- #colophon -->

	

<?php wp_footer(); ?>

<script>
  
jQuery(document).ready(function(){
    jQuery(".newsletter-submit").click(function(){
        jQuery("#mc4wp-form-1").submit();
    });
});
</script>

</body>

</html>

