<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <?php
    $theme_url = get_stylesheet_directory_uri();
    ?>
    <link rel="stylesheet" href="<?= $theme_url ?>/style.css">


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

    <title> <?php echo get_bloginfo() ?> </title>
    <!-- wp peut ajouter css ou js -->
    <?php wp_head() ?>
    <!-- Favicon-->

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="#!"><?php echo get_bloginfo() ?> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!--
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Services</a></li>
                    </ul>
                    -->
            </div>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container px-4 px-lg-5">
        <!-- Heading Row-->
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-5">
                <?php
                if ($query1->have_posts()) { //si des pages sont trouvées
                    //Je boucle sur la pile
                    while ($query1->have_posts()) {
                        $query1->the_post(); //j'enlève de la pile sinon boucle infinie
                        echo '<h1 class="font-weight-light">' . get_the_title() . '</h1>';
                        // echo get_the_title();
                        echo "<br>";
                        echo '<p>' . the_content() . '</p>';
                        // the_content();
                    }
                }
                ?>
                <!-- <h1 class="font-weight-light">Titre Page 2 </h1>
                <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p> -->

            </div>
            <div class="col-lg-6 d-flex justify-content-end">
                <img src="wp-content\themes\carotte\img\carrotte.jpg" alt="">
            </div>
        </div>
        <!-- Call to Action-->
        <div class="card text-white bg-secondary my-5 py-4 text-center">
            <div class="card-body">
                <p class="text-white m-0"> <?php echo get_bloginfo('description') ?> </p>
            </div>
        </div>
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
                                <h2 class="card-title"><?php the_title(); ?></h2>
                                <p> <?php the_excerpt() ?> </p>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>


    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container px-4 px-lg-5">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <?php wp_footer() ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>