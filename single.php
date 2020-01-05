<?php get_header(); ?>

<main class="blog post" id="top">
	<?php while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
        <p class="post-info"> — by <?php the_author(); ?> <?php the_date(); ?></p>
		<p><?php the_content(); ?></p>
	<?php endwhile; ?>
</main>

<?php get_footer(); ?>