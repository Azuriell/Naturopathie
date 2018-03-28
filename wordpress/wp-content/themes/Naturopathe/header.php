<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Praticienne de santé - Naturopathe</title>

    <!-- CSS Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Ajout d'une nouvelle feuille de style qui sera spécifique à notre thème -->
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>
    <div class="header">
        <div class="container">
            <nav id="navigation-principale" role="navigation">
                <div class="blog-header">
                    <h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>" class="navigation__title"><?php echo get_bloginfo( 'name' ); ?></a></h1>
                </div>
                <?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>
            </nav>
        </div>
    </div>

    <div class="container">
