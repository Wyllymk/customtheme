<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>CSS Challenge</title>
        <?php wp_head();?>
    </head>
        <?php
            if(is_front_page(  )){
                $custom_classes = array('custom-class', 'main-class', 'my-class');
            }else{
                $custom_classes = array('not-custom-class');
            }
        ?>
    <body <?php body_class($custom_classes);?>>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php 
                wp_nav_menu(array(
                    'theme_location'=>'primary',
                    'items_wrap' => '<ul class="navbar-nav me-auto mb-2 mb-lg-0 %2$s">%3$s</ul>',
                    'depth' => 2,
                    'walker' => new My_Custom_Nav_Walker()
                ));
                ?>
            </div>
        </div>
    </nav>
