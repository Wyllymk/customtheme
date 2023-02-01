<?php get_header(); ?>
<section class="component" role="main">
    // DISPLAY THE SELECTED CATEGORY ONLY
    <header class="header">
        <h1 class="entry-title"><?php single_cat_title(); ?></h1>
        <?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
    </header>
    <section class="component responsive">
        <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

        // Grabs the selected category
        foreach((get_the_category()) as $category)
        {
            $postcat= $category->cat_ID;
        }

        $args = array(
                'posts_per_page' => 7,
                'paged' => $paged,
                'cat' => $postcat // Passes the selected category to the arguments
                );

        $custom_query = new WP_Query( $args );
        


        if ( $custom_query->have_posts() ): 
            while($custom_query->have_posts()): 
                $custom_query->the_post(); ?>
                <?php get_template_part('content'); ?>
            <?php endwhile; else: ?>
        <?php endif; ?>
        <!-- // display the pagination links -->
        <div class="nav-previous alignleft"><?php previous_posts_link( 'Older posts' ); ?> </div>
        <div class="nav-next alignright"><?php next_posts_link( 'Newer posts' ); ?></div>
    </section>
</section>

<?php get_footer();?>