<?php 
/**
 * Template Name: Homepage
 */

get_header();?>

<div class="row">
    //DISPLAY THE LATEST POST ONLY
    <div class="col-12">
        <?php 
        $arguments = array(
            'type' => 'post',
            'posts_per_page' => 1
        );
        $lastblog = new WP_Query($arguments);
            if($lastblog->have_posts()):
                while($lastblog->have_posts()):
                    $lastblog->the_post();
                    get_template_part( 'content', get_post_format());
                endwhile;
            endif;
        wp_reset_postdata();

        ?>
    </div>
    //DISPLAY 2 POSTS BUT SKIP THE FIRST ONE
    <div class="col-12">

    </div>
    //DISPLAY THE LATEST POST ONLY
    <div class="col-12">

    </div>
</div>

<?php get_footer();?>