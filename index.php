<?php get_header(); ?>

<main class="blog" id="top">
	<?php while ( have_posts() ) : the_post(); ?>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p class="post-info"> — by <?php the_author(); ?> <?php the_date(); ?></p>
		<p><?php the_excerpt(); ?></p>
	<?php endwhile; ?>
</main>

<?php get_footer(); ?>