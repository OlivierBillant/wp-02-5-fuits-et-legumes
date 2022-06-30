<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $theme_url = get_stylesheet_directory_uri();
    ?>
    <link rel="stylesheet" href="<?= $theme_url ?>/style.css">

    <title> 
        <?php
            wp_title('|', true, 'right');
            bloginfo('name');
        ?>
    </title>

    <!-- wp peut ajouter css ou js -->
    <?php wp_head() ?>

</head>
<body>
