<?php
get_header();
?>



<?php  
    $image = get_field('background_image');
    $title = get_field('title');
    $discription = get_field('discription');
?>
<section class="text-center mb-10 mt-10">
    <div class="max-w-337.5 mx-auto px-4">
        <h1 class="uppercase text-black font-bold">
            <?php if (!empty($title)) : ?>
                <?php echo esc_html($title); ?>
            <?php else : ?>
                <?php the_title(); ?>
            <?php endif; ?>
        </h1>
        <?php if (!empty($discription)) : ?>
        <p class=""><?php echo esc_html($discription); ?></p>
        <?php endif; ?>
        <?php if (!empty($image)) : ?>
        <img class="rounded-[20px] mt-5 sm:mt-7 md:mt-10 lg:mt-12.5" src="<?php echo esc_url($image); ?>">
        <?php endif; ?>
    </div>
</section>



<section class="py-10 defaultContent">
    <div class="max-w-344 px-4 mx-auto">
        <?php the_content(); ?>
    </div>
</section>



<?php
get_footer();
?>