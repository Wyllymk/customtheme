<?php get_header();?>


<?php
    if(have_posts()):
        while(have_posts()): the_post();?>
            <?php the_title();?>
            <small><?php the_time()?></small>
            <?php the_content();?>
            <?php the_category();?>
            <?php the_tags(); ?>
            <hr>
            <?php

        endwhile;
    endif;

?>

<?php get_footer();?>