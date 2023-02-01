<?php get_header();?>

<div class="row">
    //DISPLAY ALL THE POSTS
    <div class="col-12">
        <?php 
        $arguments = array(
            'type' => 'post',
            'posts_per_page' => -1
        );
        $lastblog = new WP_Query($arguments);
            if($lastblog->have_posts()):
                while($lastblog->have_posts()):
                    $lastblog->the_post();
                    get_template_part( 'content', get_post_format());
                endwhile;
            endif;
        /* It resets the post data to the original post data. */
        wp_reset_postdata();

        ?>
    </div>
<div>


<?php get_footer();?>