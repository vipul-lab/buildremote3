
<?php
/*
Template Name: Case Studies Page
*/
get_header(); ?>


<?php  
    $image = get_field('background_image');
    $title = get_field('title');
    $discription = get_field('discription');
?>
<section class="text-center mb-10">
    <div class="px-4 relative">
        <div class="absolute w-full top-1/2 -translate-y-1/2 left-0">
            <h1 class="uppercase text-white font-bold">
                <?php if (!empty($title)) : ?>
                    <?php echo esc_html($title); ?>
                <?php else : ?>
                    <?php the_title(); ?>
                <?php endif; ?>
            </h1>
            <p class=""><?php echo esc_html($discription); ?></p>
        </div>
        <img class="rounded-[20px]" src="<?php echo esc_url($image); ?>">
    </div>
</section>


<div class="max-w-335 mx-auto py-10 px-4">
    <div class="text-center mx-auto max-w-250 mb-4 md:mb-8 lg:mb-10 xl:mb-12">
        <h2 class="font-bold text-black mb-5">Our Clients</h2>
        <p class="text-lg">"The case studies on this page represent the experiences of actual Build Remote users. While we celebrate their achievements, it's important to acknowledge that individual outcomes differ, and financial success isn't assured."</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-7.5">
        <?php
        $args = array(
            'post_type' => 'case-study',
            'posts_per_page' => -1
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            $index = 0;
            while ($query->have_posts()) : $query->the_post();
            $index++;
        ?>

        <div class="p-4 bg-secondary rounded-[20px]">
            <?php if (has_post_thumbnail()) : 
                $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>
                <img class="rounded-[10px] mb-4 lg:mb-0 md:h-75 w-full object-cover" src="<?php echo esc_url($image_url); ?>" alt="">
            <?php endif; ?>
            <div class="px-0 lg:p-4">
                <h2 class="font-bold mb-3 text-lg! text-black"><?php the_title(); ?></h2>
                <?php 
                $short_desc = get_field('short_description');
                if ($short_desc) : ?>
                    <div class="space-y-3 md:text-lg"><?php echo wp_trim_words($short_desc, 20); ?></div>
                <?php endif; ?>

                <div class="flex items-center justify-between mt-7">
                    <a class="text-xs sm:text-sm md:text-base lg:text-lg" href="<?php the_permalink(); ?>">Read More <i class="fa-regular fa-arrow-right"></i></a>
                    <span class="text-xs sm:text-sm md:text-base lg:text-lg"><?php echo get_the_date(); ?></span>
                </div>
            </div>
        </div>

        <?php endwhile;
        wp_reset_postdata();
        endif;
        ?>
        </div>
</div>




<?php get_footer(); ?>
