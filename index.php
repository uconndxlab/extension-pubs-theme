<?php
get_header();
?>

    <main>
    <?php
// Example in your theme's index.php or other template files
if (have_posts()) :
    while (have_posts()) : the_post();
        the_content();
    endwhile;
endif;
?>


    </main>



<?php
get_footer();