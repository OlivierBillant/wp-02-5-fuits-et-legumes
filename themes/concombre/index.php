<?php get_header() ?>

<?php
$query1 = new WP_Query([
    "post_type"         => "page", // page ou post
    "posts_per_page"    => 2, //3 pages
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

<!-- Page Content-->
<div class="container px-4 px-lg-5">
    <!-- Heading Row-->
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col-lg-5">
            <?php
            if ($query1->have_posts()) : //si des pages sont trouvées
                //Je boucle sur la pile
                while ($query1->have_posts()) :
                    $query1->the_post(); //j'enlève de la pile sinon boucle infinie
            ?>
                    <h1 class="font-weight-light ms-2"><?php the_title() ?> </h1>
                    <p><?php the_excerpt() ?></p>
                    <div class="text-center d-grid gap-2">
                        <a href="<?php the_permalink() ?>" class="btn btn-success">Voir plus</a>
                    </div>
                    <br>
                    <br>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="col-lg-7 d-flex justify-content-end">
            <img class="image-front" src="wp-content\themes\concombre\img\screenshot.jpg" alt="">
        </div>

    </div>
    <!-- Call to Action-->
    <div class="card text-white bg-dark my-5 py-4 text-center">
        <div class="card-body">
            <p class="text-white m-0"> <?php echo get_bloginfo('description') ?> </p>
        </div>
    </div>
    <!-- Content Row-->
    <div class="row gx-4 gx-lg-5">
        <?php
        if ($query2->have_posts()) { //si des pages sont trouvées
            //Je boucle sur la pile
            while ($query2->have_posts()) {
                $query2->the_post(); //j'enlève de la pile sinon boucle infinie 
        ?>
                <!-- Content Row-->
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <a href="<?php the_permalink() ?>">
                                <?php if (has_post_thumbnail()) { ?>
                                    <?php the_post_thumbnail('thumbnail', ['class' => 'rounded mx-auto d-block']) ?>
                                <?php } else { ?>
                                    <img src="wp-content\themes\concombre\img\fff.jpg" alt="" class="mx-auto d-block">  
                                <?php } ?>                              
                            </a>
                            <h2 class=" card-title"><?php the_title(); ?></h2>
                                    <!-- genere la balise img -->
                                    <p> <?php the_excerpt() ?> </p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="<?php the_permalink() ?>">
                                <img src="wp-content\themes\concombre\img\lightsabers.png" alt="" class="thumbnail me-1">
                                <a href="" class="btn btn-danger">
                                    Voir plus</a>
                            </a>
                        </div>
                    </div>
                </div>
        <?php }
        } ?>
    </div>
</div>

<?php get_footer() ?>