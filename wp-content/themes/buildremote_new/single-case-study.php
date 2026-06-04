<?php
get_header();
?>

<?php  
    $image = get_field('background_image');
    $title = get_field('title');
?>
<section class="text-center">
    <h1 class="text-black font-bold mx-4 bg-secondary rounded-3xl py-14 px-4">
        <?php if (!empty($title)) : ?>
            <?php echo esc_html($title); ?>
        <?php else : ?>
            <?php the_title(); ?>
        <?php endif; ?>
    </h1>
    <div class="max-w-337.5 mx-auto px-4">
        <?php if (has_post_thumbnail()) : 
            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
        ?>
            <img class="rounded-[20px] mt-5 sm:mt-7 md:mt-10 lg:mt-12.5 max-h-125 w-full object-cover" src="<?php echo esc_url($image_url); ?>" alt="">
        <?php endif; ?>
    </div>
</section>


<section class="py-10">
    <div class="max-w-262.5 mx-auto px-4">
		<h1 class="mb-5 text-[#020B1C] font-medium">
            <?php the_title(); ?>
        </h1>
        <div class="defaultContent max-w-none">
            <?php the_content(); ?>
        </div>
        <div class="flex justify-between items-center mt-4 md:mt-10 lg:mt-12 border-t pt-6">
            <div>
                <?php previous_post_link(
                '%link',
                '<span class="text-black font-bold text-lg"><i class="fa-regular fa-arrow-left-long"></i> Previous</span>'
                ); ?>
            </div>
            <div class="text-right">
                <?php next_post_link(
                '%link',
                '<span class="text-black font-bold text-lg">Next <i class="fa-regular fa-arrow-right-long"></i></span>'
                ); ?>
            </div>
        </div>
    </div>
</section>



<?php 
		$growth_system = get_field('growth_system', 'option');
		if (!empty($growth_system)) :
		$title = $growth_system['title'] ?? '';
		$description = $growth_system['description'] ?? '';
		$link = $growth_system['link'] ?? '';
	?>
    
       <section class="px-4 pt-8 md:pt-12 lg:pt-18 xl:pt-20 2xl:pt-24 pb-8 md:pb-12 lg:pb-18 xl:pb-20 2xl:pb-24 text-center bg-linear-to-b from-secondary/0 to-secondary">
			<?php if ($title != NULL) { ?>
			<h2 class="font-bold mb-5 text-black"><?php echo esc_html($title); ?></h2>
			<?php } ?>
			<?php if ($description != NULL) { ?>
			<div class="max-w-245 m-auto mb-8 lg:text-lg"><?php echo wp_kses_post($description); ?></div>
			<?php } ?>
			<?php if (!empty($link)) : ?>
			<div class="flex justify-center">
				<a href="<?php echo esc_url($link['url']); ?>" class="btn btn-primary gap-2">
					<?php echo esc_html($link['title']); ?> <i class="fa-regular fa-arrow-right"></i>
				</a>
			</div>
			<?php endif; ?>
		</section>
	<?php endif; ?>

    
<?php
get_footer();
?>