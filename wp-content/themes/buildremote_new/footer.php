<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
	<?php // get_template_part( 'template-parts/footer/footer-widgets' ); ?>


	<?php
		$selected_pages = get_field('growth_system_section_show', 'option');
		$current_page_id = get_the_ID();
		if ($selected_pages && in_array($current_page_id, array_column($selected_pages, 'ID'))):
	?>

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
			<div class="max-w-245 m-auto mb-4 lg:mb-6 xl:mb-8 lg:text-lg"><?php echo wp_kses_post($description); ?></div>
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
<?php endif; ?>


<?php
    $websitelogoarea = get_field('footer_setting', 'option');
    if (!empty($websitelogoarea)) :
	$website_footer_logo = $websitelogoarea['footer_logo'] ?? '';
	$website_footer_content = $websitelogoarea['disclaimer_text'] ?? '';
	$social_links = $websitelogoarea['social_links'] ?? [];
	$copy_text = $websitelogoarea['copy_text'] ?? '';
?>
	<footer class="relative bg-[#020202] text-white pt-10 md:pt-20">
		<div class="max-w-344 m-auto px-4">
			<div class="flex flex-col sm:flex-row justify-between">
				<?php if (!empty($website_footer_logo)) : ?>
				<div class="text-center">
				<a href="/"><img class="inline-block" src="<?php echo esc_url($website_footer_logo); ?>"></a>
				</div>
				<?php endif; ?>
				<div class="sm:max-w-85 text-center mt-5 sm:mt-0 sm:text-left">
					<span class="text-base font-medium">
						Stay connected
					</span>

					<?php if(!empty($social_links)) { ?>
						<div class="mt-3 flex justify-center gap-2">
							<?php foreach($social_links as $box):
								$icon_name = $box['icon_name'] ?? '';
								$icon_url = $box['icon_url'] ?? '';
							?>
								<?php if($icon_name): ?>
									<a class="size-8 bg-white hover:bg-primary hover:text-white text-black rounded-full flex items-center justify-center" href="<?php echo esc_attr($icon_url); ?>">
										<i class="fa-brands <?php echo esc_attr($icon_name); ?>"></i>
									</a>
								<?php endif; ?>
							<?php endforeach; ?>
						</div>
					<?php } ?>
				</div>
			</div>
			<?php
				wp_nav_menu(array(
				'theme_location'  => 'secondary',
				'menu_class'      => 'flex max-lg:justify-center flex-wrap gap-x-6 gap-y-3 border-b border-b-[#585858] py-10 mb-10',
				'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
				'fallback_cb'     => 'wp_page_menu',
				));
				?>

			<div class="flex flex-col">
				<?php if (!empty($website_footer_content)) : ?>
				<div class="flex flex-col gap-4 *:text-sm mb-7">
					<?php echo wp_kses_post($website_footer_content); ?>
				</div>
				<?php endif; ?>

				<div class="flex flex-wrap gap-5 justify-center sm:justify-between items-center py-7.5 md:py-12.5 border-t border-t-[#585858]">
					<?php if (!empty($copy_text)) : ?>
					<p class="text-sm"><?php echo esc_attr($copy_text); ?></p>
					<?php endif; ?>

					<?php
						wp_nav_menu(array(
							'theme_location'  => 'third',
							'menu_class'      => 'flex justify-center flex-wrap gap-x-6 gap-y-3 text-sm lg:text-base',
							'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
							'fallback_cb'     => 'wp_page_menu',
						));
						?>

				</div>
			</div>
		</div>
	</footer>
</div>
<?php endif; ?>





<?php
$popup = get_field('popup_high_performance', 'option');
if ($popup):
    $title    = $popup['title'] ?? '';
    $subtitle = $popup['sub_title'] ?? '';
    $link     = $popup['link'] ?? '';
    $display  = $popup['display'] ?? [];
    $current_id = get_the_ID();
    $show_popup = false;
    if (empty($display)) {
        $show_popup = true;
    } else {
        foreach ($display as $post) {
            if (is_object($post) && $post->ID == $current_id) {
                $show_popup = true;
                break;
            }
            if (is_numeric($post) && $post == $current_id) {
                $show_popup = true;
                break;
            }
        }
    }
    if ($show_popup):
?>
<div id="custom-popup" class="fixed top-1/2 -translate-y-1/2 right-[-400px] z-[9999] transition-all duration-500 ease-in-out">
    <div class="bg-white p-6 pt-[140px] w-[300px] max-w-[90vw] rounded-xl shadow-xl relative">
		<img class="absolute -top-[120px] right-[30px]" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Standing-Book-Mockup.png">
        <?php if ($title): ?>
            <p class="text-2xl font-bold text-center bg-gradient-to-r from-[#3444FB] to-[#00DCFF] bg-clip-text text-transparent">
                <?php echo esc_html($title); ?>
			</p>
        <?php endif; ?>
        <?php if ($subtitle): ?>
            <p class="text-lg text-gray-950 mb-5 text-center">
                <?php echo esc_html($subtitle); ?>
            </p>
        <?php endif; ?>
		<div class="flex gap-2.5">
			<button class="btn btn-dark btn-outline flex-1 justify-center popup-close">No</button>
			<?php if (!empty($link)): ?>
				<a href="<?php echo esc_url($link['url']); ?>"
				target="<?php echo esc_attr($link['target'] ?: '_self'); ?>"
				class="btn bg-gradient-to-r from-[#3444FB] to-[#00DCFF] text-white flex-1 justify-center border-none">
					<?php echo esc_html($link['title']); ?>
				</a>
			<?php endif; ?>
		</div>
    </div>
</div>
<?php endif; endif; ?>

<?php wp_footer(); ?>





<div class="kt-modal kt-modal-center" data-kt-modal="true" id="exploreOurSystem">
    <div class="kt-modal-content max-w-[700px]">
      <div class="kt-modal-header">
        <h5 class="kt-modal-title">Explore Our System</h5>
        <button
          type="button"
          class="kt-modal-close"
          aria-label="Close modal"
          data-kt-modal-dismiss="#exploreOurSystem"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="lucide lucide-x"
            aria-hidden="true"
          >
            <path d="M18 6 6 18"></path>
            <path d="m6 6 12 12"></path>
          </svg>
        </button>
      </div>
      <div class="kt-modal-body">
        <div class="rounded-lg bg-muted w-full grow h-[200px]">
			<div class="h-full flex items-center justify-center font-bold text-xl text-gray-950">
				iFrem Not added 
			</div>
		</div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="https://app.iclosed.io/assets/widget.js" async></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@1.7.2/dist/js/lightgallery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@1.7.2/modules/lg-thumbnail.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@1.7.2/modules/lg-fullscreen.min.js"></script>

<script>

	$(document).ready(function () {
		function setBodyPadding() {
			var headerHeight = $('header').outerHeight();
			$('body').css('padding-top', headerHeight + 'px');
		}

		setBodyPadding();

		// Update on window resize
		$(window).on('resize', function () {
			setBodyPadding();
		});
	});


	document.addEventListener("DOMContentLoaded", function () {
		const popup = document.getElementById("custom-popup");
		const closeBtn = document.querySelector(".popup-close");

		if (!popup) return;

		// Show popup after 2 seconds (slide in)
		setTimeout(() => {
			popup.classList.remove("right-[-400px]");
			popup.classList.add("right-5");
		}, 2000);

		// Close popup (slide out)
		if (closeBtn) {
			closeBtn.addEventListener("click", function () {
				popup.classList.remove("right-5");
				popup.classList.add("right-[-400px]");
			});
		}


		const drawerEl = document.querySelector('#drawer');
		const drawer = KTDrawer.getInstance(drawerEl);
		drawer.on('show', () => {
			$('.ham').addClass('active');
		});
		drawer.on('hide', () => {
			$('.ham').removeClass('active');
		});


	});
	const realStories = new Swiper('.realStories', {
		loop: true,
		autoplay: {
			delay: 3000,
			disableOnInteraction: false,
		},
		speed: 1000,
      	spaceBetween: 0,
		pagination: {
			el: '.realStories-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.realStories-next',
			prevEl: '.realStories-prev',
		},
		breakpoints: {
			0: {
				slidesPerView: 1,
				effect: 'fade',
				fadeEffect: {
					crossFade: true,
				},
			},
			500: {
				slidesPerView: 1.3,
				effect: 'slide',
				centeredSlides: true,
				spaceBetween: 15,
				loop: true,
				autoplay: true,
			},
			768: {
				slidesPerView: 1.6,
				effect: 'slide',
				centeredSlides: true,
				spaceBetween: 15,
				loop: true,
				autoplay: true,
			},
			1024: {
				slidesPerView: 1,
				effect: 'slide',
				centeredSlides: true,
				spaceBetween: 0,
				loop: true,
				autoplay: true,
			},
		}
	});
	const trustedSlider = new Swiper('.trustedSlider', {
		loop: true,
		freeMode: true,
		slidesPerView: 'auto',
		autoplay: { delay: 0 },
		speed: 6000,
		freeMode: true,
		freeModeMomentum: false,
		freeModeMomentumBounce: false,
      	spaceBetween: 90,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			0: {
				slidesPerView: 1
			},
			480: {
				slidesPerView: 3
			},
			640: {
				slidesPerView: 3
			},
			768: {
				slidesPerView: 4
			},
			1024: {
				slidesPerView: 4
			},
			1280: {
				slidesPerView: 5
			}
		}
	});
	const servicesProvide = new Swiper('.servicesProvide', {
		loop: true,
		centeredSlides: true,
		pagination: {
			el: '.servicesProvide-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.servicesProvide-next',
			prevEl: '.servicesProvide-prev',
		},
		breakpoints: {
			0: {
				spaceBetween: 0,
				slidesPerView: 1,
			},
			576: {
				spaceBetween: 30,
				slidesPerView: 'auto',
			},
		}
	});
	const testimonials = new Swiper('.testimonials', {
		loop: true,
		slidesPerView: 1,
      	spaceBetween: 0,
		pagination: {
			el: '.testimonials-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.testimonials-next',
			prevEl: '.testimonials-prev',
		},
	});
	const businessSystem = new Swiper('.businessSystem', {
		loop: true,
		effect: 'fade',
		fadeEffect: {
			crossFade: true
		},
		slidesPerView: 1,
      	spaceBetween: 0,
		navigation: {
			nextEl: '.next3',
			prevEl: '.prev3',
		},
	});
	document.querySelectorAll('.kt-accordion-toggle').forEach(btn => {
		btn.addEventListener('click', function () {
			let index = this.getAttribute('data-slide');

			if (businessSystem) {
				businessSystem.slideToLoop(index);
			}
		});
	});
	businessSystem.on('slideChange', function () {
		let activeIndex = businessSystem.realIndex;

		document.querySelectorAll('.kt-accordion-item').forEach((item, i) => {
			let content = item.querySelector('.kt-accordion-content');

			if (i === activeIndex) {
				item.classList.add('active');
				content.classList.remove('hidden');
			} else {
				item.classList.remove('active');
				content.classList.add('hidden');
			}
		});
	});
	$(window).on('scroll', function () {
		if ($(window).scrollTop() > 54) {
			$('header').addClass('-top-[54px] active');
			$('header').removeClass('top-0');
		} else {
			$('header').removeClass('-top-[54px] active');
			$('header').addClass('top-0');
		}
	});
</script>
</body>
</html>
