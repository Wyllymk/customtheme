<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <?php wp_nav_menu(array('theme_location'=>'primary'));?>