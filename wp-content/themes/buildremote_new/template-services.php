<?php
/*
Template Name: Services page
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



<div class="md:mx-4 px-4 md:bg-secondary rounded-4xl pt-8 md:pt-12 lg:pt-18 xl:pt-20 2xl:pt-24 pb-8 md:pb-12 lg:pb-18 xl:pb-20 2xl:pb-24">
    <div class="max-w-337.5 mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-4 lg:gap-7">
        <?php
        $args = array(
            'post_type' => 'services',
            'posts_per_page' => -1
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            $index = 0;
            while ($query->have_posts()) : $query->the_post();
            $index++;
        ?>
        <div class="bg-white rounded-3xl md:p-4 lg:p-6 xl:p-8 flex flex-col">
            <?php if (has_post_thumbnail()) : 
                $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>
            <div class="bg-secondary rounded-[20px] p-10 text-center h-100 items-center justify-center flex">
                <img class="inline-block max-h-full max-w-full" src="<?php echo esc_url($image_url); ?>" alt="">
            </div>
            <div class="rounded-[20px] flex flex-col flex-1">
                <h2 class="font-bold mb-5 mt-5 text-gray-950"><?php the_title(); ?></h2>
                <div class="space-y-3 mb-5"><?php the_content(); ?></div>
                <div class="mt-auto">
                    <a class="btn btn-primary" href="<?php the_permalink(); ?>">Book a Free Systems & Growth Review</a>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <?php endwhile;
        wp_reset_postdata();
        endif;
        ?>
    </div>
</div>


<?php get_footer(); ?>
