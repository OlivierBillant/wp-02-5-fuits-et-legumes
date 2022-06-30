<?php get_header(); ?>

<div class="container px-4 px-lg-5">

    <?php
    while (have_posts()) :
        the_post();
    ?>

        <h1><?php the_title() ?></h1>

        <p><?php the_content() ?></p>

    <?php endwhile; ?>

</div>
<?php get_footer(); ?>