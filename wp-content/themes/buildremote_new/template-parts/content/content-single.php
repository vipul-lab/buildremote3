<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */


get_header();

?>

	<div class="main-conainer">
	<?php
			if ( have_posts() ) : 
				while ( have_posts() ) : the_post(); ?>
		<section class="blog-detail-section section-spacing">
		<?php $thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
		 ?>
			<div class="blog-detail-banner" style="background-image: url(<?=esc_url( $thumbnail_url )?>);">
			<?php //if ( has_post_thumbnail() ) {
               // the_post_thumbnail('full');
             //} ?>
			</div>
		</section>
		<section class="blog-content-section section-spacing">
			<div class="container">
				<div class="blog-content">
					<div class="blog-content-detail">
						<span><?php echo get_the_date("j M, Y"); ?></span>
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
				</div>
				
				<div class="next-prev-btns">
				<?php
						$current_post_id = get_the_ID();


						$args = array(
							'post_type' => 'post',
							'category_name' => 'blog', 
							'posts_per_page' => -1,
							'orderby' => 'date',
							'order' => 'DESC',
						);

						$all_posts = get_posts($args);
						$total_posts = count($all_posts);
						$current_index = 0;

						// Find the index of the current post
						foreach ($all_posts as $index => $post) {
							if ($post->ID == $current_post_id) {
								$current_index = $index;
								break;
							}
						}

					$prev_post = ($current_index > 0) ? $all_posts[$current_index - 1] : null;
					$next_post = ($current_index < $total_posts - 1) ? $all_posts[$current_index + 1] : null;
					?>
					<?php if ($prev_post) { ?>
					<div class="prev-btn">
						
							<i class="fa-solid fa-arrow-left"></i>
							<a href="<?php echo get_permalink($prev_post->ID); ?>">Previous</a>
					
					</div>
					<?php } ?>
					<div class="back-blog-btn">
						<a href="<?php echo home_url('/blog'); ?>">Back to Blog</a>
					</div>
					<?php if ($next_post) { ?>
					<div class="next-btn">
					
							<a href="<?php echo get_permalink($next_post->ID); ?>">Next</a>
							<i class="fa-solid fa-arrow-right"></i>
					
					</div>
					<?php } ?>
				</div>
			</div>
		</section>	
		<?php endwhile;
endif; ?>
</div>

<?php get_footer();