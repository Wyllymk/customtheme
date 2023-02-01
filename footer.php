<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 */

?>

<footer>

  <div class="bg-light pt-5 pb-3">
    <div class="container">

      </div>

      <!-- Bootstrap 5 Nav Walker Footer Menu -->
      <?php
      wp_nav_menu(array(
        'theme_location' => 'secondary',
        'container' => false,
        'menu_class' => '',
        'fallback_cb' => '__return_false',
        'items_wrap' => '<ul id="secondary" class="nav %2$s">%3$s</ul>',
        'depth' => 1,
        'walker' => new My_Custom_Nav_Walker()
      ));
      ?>
      <!-- Bootstrap 5 Nav Walker Footer Menu End -->

    </div>
  </div>

  <div class="bg-light text-muted border-top py-2 text-center">
    <div class="container">
      <small>&copy;&nbsp;<?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></small>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>
