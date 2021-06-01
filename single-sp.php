<?php
/*
Template Name: sp
*/
?>
<?php get_template_part('sp-header'); ?>

<main>
<!-- Single -->
<div class="topics-list">
<?php if(have_posts()) :
	while (have_posts()) :
		the_post();
		remove_filter( 'the_content', 'wpautop' );
		remove_filter( 'the_excerpt', 'wpautop' );
		the_content();
	endwhile;
endif;
?>
	<nav class="navigation post-navigation" role="navigation">
		<h2 class="screen-reader-text">前後の記事へ</h2>
		<div class="nav-links">
			<div class="nav-previous">
				
			</div>
		</div>
	</nav>
</div>
</main><!-- .site-main -->

<?php get_template_part('sp-footer'); ?>
