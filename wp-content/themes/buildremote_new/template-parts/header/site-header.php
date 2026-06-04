<?php
/**
 * Displays the site header.
 */

// ACF Option Data
$header_settings = get_field('header_settings', 'option');

// Direct fields
$announcement = $header_settings['announcement'] ?? [];
$announcement_text = $announcement['announcement_text'] ?? '';
$announcement_show = !empty($announcement['announcement_show']);

// Book Demo
$book_demo = $header_settings['book_demo'] ?? [];
$book_link = $book_demo['link'] ?? [];
$book_show_in_header = !empty($book_demo['show_in_header']);

// Partner
$book_a_partner = $header_settings['book_a_partner'] ?? [];
$partner_link = $book_a_partner['link'] ?? [];
$partner_show_in_header = !empty($book_a_partner['show_in_header']);
?>

<nav class="xl:hidden xl:[--kt-drawer-enable:false] p-6 xl:p-0"
	id="drawer"
	data-kt-drawer="true"
	data-kt-drawer-class="kt-drawer bg-gray-950 kt-drawer-start inset-2 fixed hidden w-full max-w-[300px] bg-white! rounded-[20px] text-2xl">
	<?php
	wp_nav_menu(
		array(
			'theme_location'  => 'primary',
			'menu_class'      => 'menu-wrapper',
			'container_class' => 'w-full',
			'items_wrap'      => '<ul id="primary-menu-list" class="flex w-full flex-col xl:flex-row gap-4 lg:gap-8 xl:gap-12 list-none [&_a]:text-base [&_a]:text-nowrap [&_a]:text-gray-950 [&_a]:font-normal [&_a]:transition-colors [&_a]:hover:text-primary [&_.current-menu-item>a]:text-primary [&_.current-menu-item>a]:font-bold [&_.current-menu-ancestor>a]:text-primary [&_.current-menu-ancestor>a]:font-bold">%3$s</ul>',
			'fallback_cb'     => false,
		)
	);
	?>

	<!-- Mobile CTA -->
	<?php if ($book_show_in_header && !empty($book_link['url'])): ?>
		<a href="<?php echo esc_url($book_link['url']); ?>"
			target="<?php echo esc_attr($book_link['target'] ?? '_self'); ?>"
			class="lg:hidden! text-base text-left mt-6">
			<span><?php echo esc_html($book_link['title'] ?? 'Book Demo'); ?></span>
		</a>
	<?php endif; ?>

	<?php if ($partner_show_in_header && !empty($partner_link['url'])): ?>
		<a href="<?php echo esc_url($partner_link['url']); ?>"
			target="<?php echo esc_attr($partner_link['target'] ?? '_self'); ?>"
			class="lg:hidden !text-base text-left mt-6">
			<?php echo esc_html($partner_link['title'] ?? 'Become Partner'); ?>
		</a>
	<?php endif; ?>
</nav>

<header class="group/header z-10 top-0 transition-all duration-300 w-full fixed">
	<span class="w-0 group-[.active]/header:w-full bg-white group-[.active]/header:bg-white/80 h-full group-[.active]/header:shadow group-[.active]/header:backdrop-blur-xs top-0 left-0 block absolute transition-all"></span>
	
	<?php if ($announcement_show): ?>
	<div class="bg-[#20170A]">
		<div class="max-w-344 px-4 mx-auto">
			<div class="relative z-1 flex flex-wrap items-center justify-center gap-4 text-center py-3 sm:py-2 px-5 text-xs sm:text-sm md:px-16 clip-ribbon mx-auto w-full">
				
				<?php if (!empty($announcement_text)) : ?>
					<span class="text-primary font-bold flex items-center gap-2">
						<img class="h-4 sm:h-6" src="<?php echo get_stylesheet_directory_uri(); ?>/images/awordwinning.svg" alt="Award Winning">
						<?php echo wp_kses_post($announcement_text); ?>
					</span>
				<?php endif; ?>

				<?php if ($book_show_in_header && !empty($book_link['url'])): ?>
					<a href="<?php echo esc_url($book_link['url']); ?>"
					target="<?php echo esc_attr($book_link['target'] ?? '_self'); ?>"
					class="border hidden text-white border-primary/10 bg-linear-to-t from-primary/5 to-primary/30 rounded-md px-3 py-1 sm:flex items-baseline cursor-pointer font-semibold uppercase">
						<span><?php echo esc_html($book_link['title'] ?? 'BOOK DEMO'); ?></span>
						<i class="fa-solid fa-angle-right"></i>
					</a>
				<?php endif; ?>

			</div>
		</div>
	</div>
	<?php endif; ?>

	<div class="py-2 lg:py-4 bg-white">
		<div class="max-w-344 px-4 mx-auto">
			<div class="flex justify-between items-center relative z-1 group-[.active]/header:bg-white/0">
				<!-- Logo -->
				<div class="flex items-center lg:pl-5">
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<?php the_custom_logo(); ?>
					</a>
				</div>

				<nav class="hidden xl:block p-6 lg:p-0">
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'menu_class'      => 'menu-wrapper',
							'container_class' => 'w-full',
							'items_wrap'      => '<ul id="primary-menu-list" class="flex w-full flex-col lg:flex-row gap-4 lg:gap-8 xl:gap-12 list-none [&_a]:text-base [&_a]:text-nowrap [&_a]:text-gray-950 [&_a]:font-normal [&_a]:transition-colors [&_a]:hover:text-primary [&_.current-menu-item>a]:text-primary [&_.current-menu-item>a]:font-bold [&_.current-menu-ancestor>a]:text-primary [&_.current-menu-ancestor>a]:font-bold">%3$s</ul>',
							'fallback_cb'     => false,
						)
					);
					?>
				</nav>

				<!-- Right Buttons -->
				<div class="flex items-center gap-2.5">

					<?php if ($book_show_in_header && !empty($book_link['url'])): ?>
						<a href="<?php echo esc_url($book_link['url']); ?>"
						target="<?php echo esc_attr($book_link['target'] ?? '_self'); ?>"
						class="btn btn-primary btn-outline !hidden sm:block!">
							<?php echo esc_html($book_link['title'] ?? 'Book Demo'); ?>
						</a>
					<?php endif; ?>

					<?php if ($partner_show_in_header && !empty($partner_link['url'])): ?>
						<a href="<?php echo esc_url($partner_link['url']); ?>"
						target="<?php echo esc_attr($partner_link['target'] ?? '_self'); ?>"
						class="btn btn-primary !hidden sm:block!">
							<?php echo esc_html($partner_link['title'] ?? 'Become Partner'); ?>
						</a>
					<?php endif; ?>

					<!-- Mobile Toggle -->
					<div class="xl:hidden" data-kt-drawer-toggle="#drawer">
						<svg class="ham w-12 h-12 cursor-pointer text-primary transition-transform duration-400" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="5.5" stroke-linecap="round">
						<path class="line line-top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
						<path class="line line-middle" d="m 70,50 h -40" />
						<path class="line line-bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
						</svg>
					</div>

				</div>
			</div>
			<!-- Background Blur -->
			<div class="hidden group-[.header--fixed]/header:block absolute inset-0 bg-white/40 backdrop-blur-[6px] shadow-[0_0_20px_rgba(0,0,0,0.07)] shadow-black/10"></div>
		</div>
	</div>
</header>