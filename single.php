<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php
    while ( have_posts() ) :
        the_post();

        // Display the featured image
        if ( has_post_thumbnail() ) {
            the_post_thumbnail();
        }

        get_template_part( 'template-parts/content/content-single' );

        if ( comments_open() || get_comments_number() ) {
            comments_template();
        }

    endwhile; // End of the loop.
    ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
