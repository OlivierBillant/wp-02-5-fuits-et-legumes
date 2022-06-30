<?php get_header() ?>

<?php
    $query1 = new WP_Query([
        "post_type"         => "page", // page ou post
        "posts_per_page"    => 3, //3 pages
        "order_by"          => "menu_order",
        "order"             => "ASC"
    ]);
    $query2 = new WP_Query([
        "post_type"         => "post", // page ou post
        "posts_per_page"    => 3, //3 pages
        "order_by"          => "menu_order",
        "order"             => "ASC"
    ]);
    ?>

    <?php
    if ($query1->have_posts()) : //si des pages sont trouvées
        //Je boucle sur la pile
        while ($query1->have_posts()) :
            $query1->the_post(); //j'enlève de la pile sinon boucle infinie
            ?>
            <a href="<?php the_permalink() ?>"> <?php the_title() ?></a>
            <br><br>
        <?php endwhile; ?>
        <?php endif; ?>

    <?php 
    if ($query2->have_posts()) { //si des pages sont trouvées
        //Je boucle sur la pile
        while ($query2->have_posts()) {
            $query2->the_post(); //j'enlève de la pile sinon boucle infinie
            echo get_the_title();
            echo "<br>";
            the_content();
        }
    }
    ?>
<?php  get_footer() ?>