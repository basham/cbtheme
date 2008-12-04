<?
/*
Template Name: Single Portfolio
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
	

<h1><?php the_title(); ?></h1>


<div class="body">
				
	<div class="col5-3-wrap">
	
		<div class="col5">
			
<?php the_content(); ?>
		
		</div>
		
		<div class="col3 sidebar">
		
			<h3><small>More</small> Projects</h3>

<?php

	$portfolioCat = get_cat_id('portfolio');
	$posts = get_posts('numberposts='.$postsPerCat.'&category='.$portfolioCat);

	$i = 0;
	
	foreach($posts as $post) {
		$t = the_title('', '', false);
		$img = get_post_meta($post->ID, 'image-preview', true);
		
		if ($i % 2 == 0)
			echo '<ul class="thumblist">';
			
		echo '<li><a href="'.get_permalink().'">';
			echo '<img width="120" height="65" title="'.$t.'" alt="'.$t.'" src="'.$img.'"/>';
			echo '<strong>'.$t.'</strong>';
		echo '</a></li>';

		if ($i % 2 == 1)
			echo '</ul><hr/>';
		
		$i++;
	}

?>
			
			<p class="links"><a href="<?php echo get_category_link($portfolioCat); ?>"><strong>View All Projects</strong></a></p>

		</div>
		
		<hr/>
	
	</div>
	
</div>


	<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
