<?php
/**
 * Template part for displaying page content in page.php
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

<?php if( get_row_layout() == 'page_banner' ): 
    $image = get_sub_field('image');
    $title = get_sub_field('title');
?>
<section class=" text-center" style="background-image: url('<?php echo esc_url($image); ?>');">
    <div class="container mx-auto">
        <?php if (!empty($title)) : ?>
            <?php echo esc_html($title); ?>
        <?php else : ?>
            <?php the_title(); ?>
        <?php endif; ?>
    </div>
</section>

<?php endif; ?>


<section class="pt-6 md:pt-10 lg:pt-20">
	<div class="max-w-[1376px] m-auto px-4">
		<div class="[&_h1]:font-bold [&_h1]:mb-7.5 [&_h1]:md:mb-12.5 [&_h1]:text-center">
			<?php if ( ! is_front_page() ) : ?>
				<?php get_template_part( 'template-parts/header/entry-header' ); ?>
				<?php twenty_twenty_one_post_thumbnail(); ?>
			<?php elseif ( has_post_thumbnail() ) : ?>
				<?php twenty_twenty_one_post_thumbnail(); ?>
			<?php endif; ?>
		</div>
	
		<div class="entry-content">
			<?php
			the_content();
	
			wp_link_pages(
				array(
					'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
					'after'    => '</nav>',
					/* translators: %: Page number. */
					'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
				)
			);
			?>
		</div>
	</div>
</section>
</div>

<?php get_footer(); ?>