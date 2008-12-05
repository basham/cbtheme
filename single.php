<?
/*
Template Name: Single Portfolio
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
	

<div id="headline">
	<h1><?php the_title(); ?></h1>
	<p><?php the_excerpt(); ?></p>
</div>

<div class="body">
	
	<div class="col1 image-header">
		<img src="<?php echo get_post_meta($post->ID, 'image-header', true); ?>" />
	</div>
	
	<div class="col2-wrap">
	
		<div class="col2">
			
			<p class="lead"><?php the_excerpt(); ?></p>
		
			<?php the_content(); ?>
		
		</div>
		
		<div class="col2">
			
			<h3>Summary</h3>
			
			<?php echo get_post_meta($post->ID, 'summary', true); ?>
			
			<h3>Screenshots</h3>
			
		</div>
		
		<hr/>
	
	</div>
	
</div>


	<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
