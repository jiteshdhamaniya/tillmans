<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet profile" href="https://gmpg.org/xfn/11" />


	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<script src="https://unpkg.com/tailwindcss-jit-cdn"></script>

	<?php get_template_part( 'head' ); ?>
</head>
<body <?php body_class(); ?>>
<?php get_template_part( 'header/header_before' ); ?>
