<?php get_header(); ?>

<?php
$next_post_url = get_permalink( get_adjacent_post(false,'',false)->ID );
$previous_post_url = get_permalink( get_adjacent_post(false,'',true)->ID );
?>

<main>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_post_thumbnail(); ?>
		<div class="cover" id="top">
			<div class="title-box">
				<a href="<?php echo $previous_post_url; ?>" class="<?php if ( is_front_page() ) : echo "transparent"; endif; ?> reflected">
					<svg
						width="9vw"
						height="7vw"
						viewBox="0 0 92 72"
						fill="none"
						xmlns="http://www.w3.org/2000/svg"
					>
						<path
						d="M38.0938 21.3613H40.0938V19.3613V3.73704L88.3944 35.9375L40.0938 68.138V52.5137V50.5137H38.0938H2V21.3613H38.0938Z"
						stroke="white"
						stroke-width="2px"
						vector-effect="non-scaling-stroke"
						/>
					</svg>
				</a>
				<a href="#info"><h2><?php the_title(); ?></h2></a>
				<a href="<?php echo $next_post_url; ?>" class="<?php if ( is_page( 34 ) ) : echo "transparent"; endif; ?>">
					<svg
						width="9vw"
						height="7vw"
						viewBox="0 0 92 72"
						fill="none"
						xmlns="http://www.w3.org/2000/svg"
					>
						<path
						d="M38.0938 21.3613H40.0938V19.3613V3.73704L88.3944 35.9375L40.0938 68.138V52.5137V50.5137H38.0938H2V21.3613H38.0938Z"
						stroke="white"
						stroke-width="2px"
						vector-effect="non-scaling-stroke"
						/>
					</svg>
				</a>
			</div>
			<div class="explore">
        		<a href="#info">explore</a>
			</div>
		</div>
		<div id="info">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
</main>

<?php get_footer(); ?>