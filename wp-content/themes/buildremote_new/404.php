<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<div class="main-conainer">
  	<section class="pt-6 md:pt-10 lg:pt-20">
		<div class="max-w-[1085px] mx-auto px-4 text-center">
			<h1 class="font-black">404</h1>
			<div class="error-404 not-found default-max-width">
				<div class="page-content">
					<h4 class="text-gray-dark mt-5">OOPS! NOTHING WAS FOUND</h4>
				</div>
			</div>
		</div>
  	</section>
</div>
<?php
get_footer();
