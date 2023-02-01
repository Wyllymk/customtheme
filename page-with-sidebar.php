<?php 
/**
 * Template Name: Page With Sidebar
 */

get_header();?>

<div class="row">
    //DISPLAY THE LATEST POST ONLY
    <div class="col-12">
        <?php 
        
        $lastblog = new WP_Query('type=post&posts_per_page=1');
            if($lastblog->have_posts()):
                while($lastblog->have_posts()):
                    $lastblog->the_post;
                    get_template_part( 'content' );
                endwhile;
            endif;
        wp_reset_postdata(  );

        ?>
    </div>
    //DISPLAY 2 POSTS BUT SKIP THE FIRST ONE
    <div class="col-12">

    </div>
    //DISPLAY THE LATEST POST ONLY
    <div class="col-12">

    </div>
</div>
<?php get_sidebar():?>
<?php get_footer();?>