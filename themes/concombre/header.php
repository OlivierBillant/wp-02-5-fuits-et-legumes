<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php
    $theme_url = get_stylesheet_directory_uri();
    $query1 = new WP_Query([
        "post_type"         => "page", // page ou post
        "posts_per_page"    => 3, //3 pages
        "order_by"          => "menu_order",
        "order"             => "ASC"
    ]);
    ?>
    <link rel="stylesheet" href="<?= $theme_url ?>/style.css">

    <title>

        <?php
        wp_title('|', true, 'right');
        bloginfo('name');
        ?>
    </title>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="<?php echo get_home_url() ?>/"> <img class="icon" src="<?= get_site_icon_url() ?>" width="25"><?php
                                                                                                                            bloginfo('name');
                                                                                                                            ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo get_home_url() ?>/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo get_home_url() ?>/about-us">About </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php the_permalink(21) ?>">Contact</a></li>

                </ul>

            </div>
        </div>
    </nav>

    <!-- wp peut ajouter css ou js -->
    <?php wp_head() ?>

</head>

<body>