<div id="sidebar-primary" class="sidebar">
     <!-- Pass our sidebar id as in functions.php -->
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php else : ?>
		<!-- Time to add some widgets! -->
	<?php endif; ?>
</div>