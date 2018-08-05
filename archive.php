
<?php get_header(); ?>

<section class="row">
	<article class="col-md-9">
		<?php 
		if(have_posts()):
			while (have_posts()):the_post();
				?>
				<!-- le contenu de nos articles -->
				<?php get_template_part( 'contenu', 'article' ) ?>

			<?php endwhile; ?>
		<?php endif; ?>
	</article>

	<aside class="col-md-3">
		<?php get_sidebar(); ?>
	</aside>

	<?php get_footer(); ?>