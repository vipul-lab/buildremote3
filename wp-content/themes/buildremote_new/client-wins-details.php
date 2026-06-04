<?php
/*
Template Name: Client Wins Details
Template Post Type: clientwins
*/
get_header();

$prev_post = get_adjacent_post_by_post_type('clientwins', true);
$next_post = get_adjacent_post_by_post_type('clientwins', false);

?>
<div class="main-conainer">
  <section class="pt-6 md:pt-10 lg:pt-20">
    <div class="max-w-[1085px] mx-auto px-4">
        <div class="[&_p]:mb-5 [&_h4]:font-bold [&_h4]:mb-5 [&_h4]:text-[#5b5b5b]">
          <h1 class="font-bold mb-7.5"><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </div>
    </div>
      <?php
      if( have_rows('client_wins') ){
        while ( have_rows('client_wins') ) { the_row();
          if( get_row_layout() == 'youtube_section' ){
            $display = get_sub_field('display');
            $title = get_sub_field('title');
            $tagline = get_sub_field('tagline');
            $youtube_url = get_sub_field('youtube_url');
            $description = get_sub_field('description');
            if($display){
      ?>
      <div class="max-w-[1085px] mx-auto px-4">
        <div class="mb-7.5 md:mb-12.5 [&_p]:mb-5 [&_h4]:font-bold [&_h4]:mb-5 [&_h4]:text-[#5b5b5b]">
          <?php if( $title != NULL ) { ?>
            <h4><?php echo $title; ?></h4>
          <?php } ?>
          <?php if( $tagline != NULL ) { ?>
            <p><?php echo $tagline; ?></p>
          <?php } ?>
          <?php if( $youtube_url != NULL ) { ?>
            <div class="mb-7.5 relative pt-[56.30%] [&_iframe]:absolute [&_iframe]:top-0 [&_iframe]:left-0 [&_iframe]:h-full [&_iframe]:w-full">
                <?php echo $youtube_url; ?>
            </div>
          <?php } ?>
            <?php if( $description != NULL) { echo $description; } ?>
        </div>
      </div>
      <?php } }
      if( get_row_layout() == 'earning_screenshots' ){
        $display = get_sub_field('display');
        $title = get_sub_field('title');
        $screenshots = get_sub_field('screenshots');
        if($display){
        ?>
        <div class="max-w-[1085px] mx-auto px-4">
          <div class="mb-7.5 md:mb-12.5 [&_p]:mb-5 [&_h4]:font-bold [&_h4]:mb-5 [&_h4]:text-[#5b5b5b]">
            <?php if( $title != NULL ) { ?>
              <h4><?php echo $title; ?></h4>
            <?php } ?>
            <?php if($screenshots){ ?>
            <div class="grid grid-cols-[repeat(auto-fill,minmax(clamp(270px,22vw,330px),1fr))] gap-7.5">
                <?php foreach( $screenshots as $image ){ ?>
                  <div class="rounded-[20px] overflow-hidden">
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                  </div>
                <?php } ?>
            </div>
            <?php } ?>
          </div>
        </div>
      <?php } }
      if( get_row_layout() == 'our_community' ){
        $display = get_sub_field('display');
        $title = get_sub_field('title');
        $description = get_sub_field('description');
        if($display){
        ?>  
    <div class="py-12.5 mb-10 lg:mb-20 bg-black">
      <div class="max-w-[1790px] mx-auto px-4">
        <div class="text-center text-white mb-12.5 [&_p]:max-w-[715px] [&_p]:m-auto">
          <?php if( $title != NULL ) { ?>
            <h2 class="font-bold mb-2"><?php echo $title; ?></h2>
          <?php } ?>
          <?php if( $description != NULL) { echo $description; } ?>
        </div>
        <?php if('community_screenshot'){ ?>
        <div class="owl-carousel owl-theme why-teem-succeded-img-slider">
          <?php while( have_rows('community_screenshot') ) { the_row();
            $normal_image = get_sub_field('normal_image');
            $popup_image = get_sub_field('popup_image');
          ?>
            <div class="item">
              <div class="rounded-[20px] overflow-hidden">
                <a href="<?php echo $popup_image['url']; ?>">
                  <img src="<?php echo $normal_image['url']; ?>" alt="<?php echo $normal_image['title']; ?>">
                </a>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
      <?php } } }
      if( get_row_layout() == 'other_details' ){ ?>
        <?php
        if( have_rows('other_details_sections') ){
          while ( have_rows('other_details_sections') ) { the_row();
              $display = get_sub_field('display');
              $title = get_sub_field('title');
              $description = get_sub_field('description');
              if($display){
        ?>
          <div class="max-w-[1085px] mx-auto px-4">
            <div class="mb-7.5 md:mb-12.5 [&_p]:mb-5 [&_h4]:font-bold [&_h4]:mb-5 [&_h4]:text-[#5b5b5b]">
              <?php if( $title != NULL ) { ?>
                <h4><?php echo $title; ?></h4>
              <?php } ?>
              <?php if( $description != NULL) { echo $description; } ?>
            </div>
          </div>      
           
          <?php } } } }
          if( get_row_layout() == 'page_button_section' ){
            $display = get_sub_field('display');
            $link_type = get_sub_field('link_type');
            $button_text = get_sub_field('button_text');
            $select_page = get_sub_field('select_page');
            $custom_url = get_sub_field('custom_url');
            if($display){
            ?>
          <div class="max-w-[1085px] mx-auto px-4">
            <div class="client-win-link-btn">
              <?php if( $link_type == 1 ) { ?>
                <a href="<?php echo $select_page; ?>" class="btn"><span><?php echo $button_text; ?></span></a>
              <?php } else { ?>
                <!-- <a href="<?php echo $custom_url; ?>" class="common-arrow-btn poptrigger" data-modal="book-demo-call"> <span class="solid-btn-black"><?php echo $button_text; ?></span></a> -->

                <button class="btn" data-iclosed-link="https://app.iclosed.io/e/kevindana/remote-demo-call" data-embed-type="popup">
                   <span><?php echo $button_text; ?></span>
                </button>
              <?php } ?>
            </div>
          </div>
      <?php } }
      if( get_row_layout() == 'client_logo_section' ){
        $display = get_sub_field('display');
        $title = get_sub_field('title');
        $logo = get_sub_field('logo');
        $button_text = get_sub_field('button_text');
        $button_link = get_sub_field('button_link');
        if($display){
      ?>
      <!-- Client web Logo & Name -->
      <div class="mt-10 md:mt-12.5">
        <div class="max-w-[1085px] mx-auto px-4">
            <div class="flex gap-4 flex-wrap sm:flex-nowrap items-center justify-between py-6 px-10 bg-[#F0F6FB] rounded-[20px] border-b-2 border-black">
              <?php if( $title != NULL ) { ?>
                <div class="flex-auto sm:flex-1">
                  <h5 class="max-w-full text-center sm:text-left sm:max-w-[310px] font-bold"><?php echo $title; ?></h5>
                </div>
              <?php } ?>
              <?php if( $logo != NULL ) { ?>
                <div class="flex-auto sm:flex-1">
                  <img class="m-auto" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['title']; ?>">
                </div>
              <?php } ?>
              <?php if( $button_text != NULL ) { ?>
                <div class="flex-1 flex justify-center  sm:justify-end">
                  <a class="btn" href="<?php echo $button_link; ?>" target="_blank">
                    <span><?php echo $button_text; ?></span> 
                    <?php /*
                    <div class="btn-arrow-white">
                      <div class="arrow_inner"> 
                        <img src="<?php bloginfo("template_directory"); ?>/assets/images/btn-arrow-white.svg" alt=""> 
                        <img src="<?php bloginfo("template_directory"); ?>/assets/images/btn-arrow-white.svg" alt=""> 
                      </div>
                    </div>
                      */ ?>
                  </a>
                </div>
              <?php } ?>
            </div>
        </div>
      </div>
      <?php } } } } ?>
      <div class="max-w-[1085px] mx-auto px-4">
        <div class="flex gap-5 flex-wrap sm:flex-nowrap items-center justify-between border-t border-black pt-7.5 md:pt-12.5 mt-7.5 md:mt-12.5">
          <div class="flex items-center gap-2.5 group order-2 sm:order-1">
            <img class="transition-transform duration-500 ease-out group-hover:-translate-x-1.5 rotate-[180deg]" src="<?php echo get_stylesheet_directory_uri(); ?>/images/black-arrow-right.svg" alt="">
            <a href="<?php echo get_permalink($prev_post->ID); ?>">Previous</a>
          </div>
          <div class="order-1 sm:order-2 w-full! sm:w-auto! flex justify-center">
            <?php $page_button = get_field('page_button'); ?>
            <?php if ($page_button == 1) { ?>
              <a href="<?php echo esc_url(get_field('page_button_link')); ?>" class="btn btn-border">
                <span><?php echo esc_html(get_field('page_button_text')); ?></span>
              </a>
            <?php } else { ?>
              <a href="<?php echo esc_url(get_field('custom_button_link')); ?>" class="btn btn-border">
                <span><?php echo esc_html(get_field('page_button_text')); ?></span>
              </a>
            <?php } ?>
          </div>
          <div class="flex items-center gap-2.5 group order-3">
            <a href="<?php echo get_permalink($next_post->ID); ?>">Next</a>
            <img class="transition-transform duration-500 ease-out group-hover:translate-x-1.5" src="<?php echo get_stylesheet_directory_uri(); ?>/images/black-arrow-right.svg" alt="">
          </div>
        </div>
      </div>
       
  </section>

  
</div>
<?php get_footer(); ?>


<script>
// why-teem-succeded-img-slider
$('.why-teem-succeded-img-slider').owlCarousel({
    loop:false,
    margin:30,
    dots:true,
    nav:false,
    autoplay: true,           
    autoplayTimeout: 2000,    
    autoplayHoverPause: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

// Tlight gallery js
$(document).ready(function () {
    $('.why-teem-succeded-img-slider').lightGallery({
      thumbnail: true,     
      selector: 'a',      
      download: false,   
      fullscreen: true,  
      zoom: true,
      caption: false  
    });
});
</script>