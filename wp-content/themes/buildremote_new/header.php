<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@1.7.2/dist/css/lightgallery.min.css" />
	<?php wp_head(); ?>
	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<style>

<?php
$colors = get_field('color_setting', 'option');
$primary_color   = $colors['primary_color'] ?? '';
$secondary_color = $colors['secondary_color'] ?? '';
$tertiary_color = $colors['tertiary_color'] ?? '';
$body_text_color = $colors['body_text_color'] ?? '';
?>



:root {
    --color-primary: <?php echo esc_html($primary_color); ?>;
    --color-secondary: <?php echo esc_html($secondary_color); ?>;
	--color-tertiary: <?php echo esc_html($tertiary_color); ?>;
    --body_text: <?php echo esc_html($body_text_color); ?>;
}
</style>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php get_template_part( 'template-parts/header/site-header' ); ?>
