<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $theme_url = get_stylesheet_directory_uri();
    ?>
    <link rel="stylesheet" href="<?=$theme_url?>/style.css">
    

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

    <title>Document</title>

    <!-- wp peut ajouter css ou js -->
    <?php wp_head() ?>

</head>

<body>
    <?php
    if ($query1->have_posts()) { //si des pages sont trouvées
        //Je boucle sur la pile
        while ($query1->have_posts()) {
            $query1->the_post(); //j'enlève de la pile sinon boucle infinie
            echo get_the_title();
            echo "<br>";
            the_content();
        }
    }
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

    <?php wp_footer() ?>
</body>

</html>

<?php
echo "<h1>Kiwi !</h1>"

?>