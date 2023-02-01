<?php
/**
 * Template Post Type: post
 */

get_header();  
?>

<div id="content" class="site-content container py-5 mt-4 bg-success">
  <div id="primary" class="content-area">
    //DISPLAY THE SELECTED POST ONLY
    <!-- Hook to add something nice -->
    
    <div class="row">
      <div class="col-md-8 col-xxl-9">

        <main id="main" class="site-main">

          <header class="entry-header">
            <?php the_post(); ?>
            <?php the_category(); ?>
            <h1><?php the_title(); ?></h1>
            <h5><?php edit_post_link()?></h5>
            <p class="entry-meta">
              <small class="text-muted">
                <?php
                  the_date();
                  the_author();
                ?>
              </small>
            </p>
            <?php the_post_thumbnail(); ?>
          </header>

          <div class="entry-content">
            <?php the_content(); ?>
          </div>

          <footer class="entry-footer clear-both">
            <div class="mb-4">
              <?php the_tags(); ?>
            </div>
            <?php $args = array(
                'prev_text' => sprintf( esc_html__( '%s Older', 'wpdocs_blankslate' ), '<span class="meta-nav"> < </span>' ),
                'next_text' => sprintf( esc_html__( 'Newer %s', 'wpdocs_blankslate' ), '<span class="meta-nav"> > </span>' )
            );
            $navigation = get_the_post_navigation( $args );
            if ( $navigation ) :
                echo '<h4>View More</h4>';
                echo $navigation;
            endif;?>
            <!-- // If comments are open or we have at least one comment, load up the comment template. -->
            <?php 
                if(comments_open() || get_comments_number()){
                    comments_template(); 
                }else{
                    echo 'Comments are closed!';
                }
            ?>
          </footer>

        </main>

      </div>
      <?php get_sidebar(); ?>
    </div>

  </div>
</div>

<?php
get_footer();