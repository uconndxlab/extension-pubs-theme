<?php
/**
 * The template for displaying single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Your_Custom_Theme
 */

get_header(); ?>


<?php
// Start the loop.
while (have_posts()) : the_post();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <?php
    // Add a custom action hook to inject Beaver Builder content.
    do_action('custom_single_pub_content');
    ?>

  </main>
</div>

<?php
// End the loop.
endwhile;
?>



<?php
get_footer();
