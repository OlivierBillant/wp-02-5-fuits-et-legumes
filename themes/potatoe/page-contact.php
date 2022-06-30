<?php get_header(); ?>



<?php
while (have_posts()) :
    the_post();
?>
    <div class="container px-4 px-lg-5">

        <h1><?php the_title() ?></h1>

        <p><?php the_content() ?></p>
        <form action="welcome.php" method="post">
            <div class="form-group col-4">
                Name: <input type="text" name="name" class="form-control"><br>
                E-mail: <input type="text" name="email" class="form-control"><br>
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
<?php endwhile; ?>

<?php get_footer(); ?>