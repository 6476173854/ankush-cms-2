<?php get_header(); ?>

<div class="main-content">
    <?php
    // Include the slider part
    get_template_part( 'template-parts/slider' );

    // Display the main content area (e.g., a static page or dynamic content)
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</div>

<?php get_footer(); ?>
