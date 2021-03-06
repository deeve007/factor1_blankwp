<?php get_header(); ?>

<article>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h1><?php the_title(); ?></h1>
			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
			

			<?php if(has_post_thumbnail()) {
			the_post_thumbnail();
			} else {	}
			?>	
			
			<?php the_content(); ?>
			<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
			<?php the_tags( 'Tags: ', ', ', ''); ?>


			
			<?php edit_post_link('Edit this entry','','.'); ?>
			
		</div>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>
</article>

	
<?php get_sidebar(); ?>

<?php get_footer(); ?>