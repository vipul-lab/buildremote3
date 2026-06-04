<?php
get_header();
?>
<?php
function paddingClasses($spacing){
    $section_classes = '';
    if ($spacing) {
        $spacing = get_sub_field('spacing');
        $classes = [];
        if (!empty($spacing['spacing_top'])) {
            $classes[] = 'pt-8 md:pt-12 lg:pt-18 xl:pt-20 2xl:pt-24';
        }
        if (!empty($spacing['spacing_bottom'])) {
            $classes[] = 'pb-8 md:pb-12 lg:pb-18 xl:pb-20 2xl:pb-24';
        }
        $section_classes = implode(' ', $classes);
    }
    return $section_classes;
}?>

<?php  
    $image = get_field('background_image');
    $title = get_field('title');
?>
<section class="text-center mb-10">
    <div class="mx-4 bg-secondary rounded-4xl pt-16 text-center">
        <h1 class="text-black font-bold">
            <?php if (!empty($title)) : ?>
                <?php echo esc_html($title); ?>
            <?php else : ?>
                <?php the_title(); ?>
            <?php endif; ?>
        </h1>
        <p class=""><?php echo esc_html($discription); ?></p>
        <img class="mt-14 inline-block" src="<?php echo esc_url($image); ?>">
    </div>
</section>


<?php if( have_rows('service_detail') ): ?>
<?php while( have_rows('service_detail') ): the_row(); ?>


<?php if( get_row_layout() == 'image_section' ): 
    $display = get_sub_field('display');
    if($display):
    $title = get_sub_field("title");
    $description = get_sub_field("description");
    $image = get_sub_field("image");
    $spacing = get_sub_field("spacing");
    $section_classes = paddingClasses($spacing);
?>
<section class="<?php echo esc_attr($section_classes); ?>">
    <div class="max-w-337.5 mx-auto grid grid-cols-12 gap-4 sm:gap-6 md:gap-7 xl:gap-10 lg:gap-20 px-4">
        <?php if ($image): ?>
        <div class="col-span-12 lg:col-span-6 text-center">
            <img class="rounded-[20px] inline-flex" src="<?php echo esc_html($image); ?>">
        </div>
        <?php endif; ?>
        <div class="self-center col-span-12 lg:col-span-6 text-center lg:text-left">
            <?php if ($title): ?>
            <h2 class="font-bold mb-2 text-gray-950"><?php echo esc_html($title); ?></h2>
            <?php endif; ?>
            <?php if ($description): ?>
            <p class="text-[#44474C] lg:text-2xl"><?php echo esc_html($description); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php endif; ?>

<?php if( get_row_layout() == 'three_box_section' ): 
    $display = get_sub_field('display');
    if($display):
    $boxs = get_sub_field("boxs") ?: [];
    $spacing = get_sub_field("spacing");
    $section_classes = paddingClasses($spacing);
?>
<section class="<?php echo esc_attr($section_classes); ?> text-center">
    <?php if(!empty($boxs)) { ?>
    <div class="max-w-337.5 mx-auto grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-7.5 px-4">
         <?php foreach($boxs as $index => $box):
            $title = $box['title'] ?? '';
            $description = $box['description'] ?? '';
        ?>
        <div class="bg-secondary rounded-[20px] p-4 sm:p-6 md:p-8 xl:p-10">
            <?php if ($title): ?>
            <p class="sm:text-lg md:text-xl lg:text-2xl xl:text-3xl font-bold mb-2.5 px-5 text-gray-950"><?php echo esc_html($title); ?></p>
            <?php endif; ?>
            <?php if ($description): ?>
            <p class=""><?php echo esc_html($description); ?></p>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
    <?php } ?>
</section>
<?php endif; ?>
<?php endif; ?>




<?php if( get_row_layout() == 'four_box_section' ): 
    $display = get_sub_field('display');
    if($display):
    $title       = get_sub_field("title");
    $boxs = get_sub_field("boxs") ?: [];
    $spacing = get_sub_field("spacing");
    $section_classes = paddingClasses($spacing);
?>
<section class="<?php echo esc_attr($section_classes); ?> text-center">
    <div class="max-w-337.5 mx-auto px-4">
        <?php if ($title): ?>
        <h2 class="font-bold mb-12.5 text-gray-950"><?php echo esc_html($title); ?></h2>
        <?php endif; ?>
        <?php if(!empty($boxs)) { ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-7.5">
            <?php foreach($boxs as $index => $box):
            $title = $box['title'] ?? '';
            $description = $box['description'] ?? '';
        ?>
            <div>
                <div class="lg:max-w-72.5 mx-auto">
                    <p class="italic text-primary text-4xl mb-1 sm:mb-2 md:mb-3 lg:mb-4 xl:mb-5">0<?php echo $index + 1; ?></p>
                    <?php if ($title): ?>
                    <p class="sm:text-lg md:text-xl xl:text-2xl font-bold mb-1.5 text-gray-950"><?php echo esc_html($title); ?></p>
                    <?php endif; ?>
                    <?php if ($description): ?>
                    <p class="text-[#44474C]"><?php echo esc_html($description); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
         <?php } ?>
    </div>
</section>
<?php endif; ?>
<?php endif; ?>




<?php if( get_row_layout() == 'faq' ): 
    $display = get_sub_field('display');
    if($display):
    $title       = get_sub_field("title");
    $boxs = get_sub_field("boxs") ?: [];
    $spacing = get_sub_field("spacing");
    $section_classes = paddingClasses($spacing);
?>
<section class="pb-8 md:pb-12 lg:pb-18 xl:pb-20 2xl:pb-24">
    <div class="max-w-200 mx-auto px-4">
        <?php if ($title): ?>
        <h2 class="font-bold mb-7.5 text-center text-gray-950"><?php echo esc_html($title); ?></h2>
        <?php endif; ?>
        <?php if(!empty($boxs)) { ?>
        <div class="space-y-2.5">
            <?php foreach($boxs as $index => $box):
            $title = $box['title'] ?? '';
            $description = $box['description'] ?? '';
        ?>
            <div class="bg-secondary p-4 sm:p-6 lg:p-7.5 rounded-[20px]">
                <?php if ($title): ?>
                <p class="sm:text-lg md:text-xl xl:text-2xl font-bold mb-3 text-gray-950"><?php echo esc_html($title); ?></p>
                <?php endif; ?>
                <?php if ($description): ?>
                <div class="text-[#44474C]"><?php echo esc_html($description); ?></div>
                <?php endif; ?>
            </div>
             <?php endforeach; ?>
        </div>
        <?php } ?>
    </div>
</section>
<?php endif; ?>
<?php endif; ?>

<?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
?>