<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
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
    <body class ="container" <?php body_class($custom_classes);?>>
        <?php wp_nav_menu(array('theme_location'=>'primary'));?>