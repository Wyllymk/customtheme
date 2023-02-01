<?php
/**
 * Template Post Type: post
 */

get_header();  
?>

<div id="content" class="site-content container py-5 mt-4">
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
            <nav aria-label="page navigation">
              <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                  <?php previous_post_link('%link'); ?>
                </li>
                <li class="page-item">
                    <a class="page-link" href="<?php next_post_link('%link'); ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                  
                </li>
              </ul>
            </nav>
            <?php comments_template(); ?>
          </footer>

        </main>

      </div>
      <?php get_sidebar(); ?>
    </div>

  </div>
</div>

<?php
get_footer();