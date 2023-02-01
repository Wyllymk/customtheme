<?php 
/**
 * Template Name: Homepage
 */

get_header();?>
<div class="container-fluid">
    <div class="row">
        //DISPLAY THE LATEST POST ONLY
        <div class="col-12">
            <?php 
            // $arguments = array(
            //     'type' => 'post',
            //     'posts_per_page' => 1
            // );
            $lastblog = new WP_Query('type=post&posts_per_page=1');
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
        //DISPLAY 2 POSTS BUT SKIP THE FIRST ONE
        <div class="col-12">
            <?php    
            $arguments =array(
                'type' => 'post',
                'posts_per_page' => 2,
                'offset' => 1 //Skips first post
            );
            $skipfirst = new WP_Query($arguments);
                if($skipfirst->have_posts()):
                    while($skipfirst->have_posts()):
                        $skipfirst->the_post();
                        get_template_part('content');
                    endwhile;
                endif;
            wp_reset_postdata();
            ?>
        </div>
        //DISPLAY THE POSTS BELONGING TO UNCATEGORIZED CATEGORY
        <div class="col-12">
                <?php
                $arguments = array(
                    'type' => 'post', //shows only posts
                    'posts_per_page' => -1, //Shows all posts
                    'category_name' => 'Uncategorized' // shows only uncategorized posts

                );
                $uncategorised = new WP_Query($arguments);
                    if($uncategorised->have_posts()):
                        while($uncategorised->have_posts()):
                            $uncategorised->the_post();
                            get_template_part('content');
                        endwhile;
                    endif;
                wp_reset_postdata();
                ?>
        </div>
    </div>
</div>

    <?php get_footer();?>