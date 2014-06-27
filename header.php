<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Hellish Simplicity
 * @since Hellish Simplicity 1.1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-28731553-3', 'auto');
  ga('send', 'pageview');

</script>
<header id="site-header" role="banner">
	<div class="hgroup">
		<h1>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<?php
					// Output header text (need fallback to keep WordPress.org them demo happy)
					$header_text = get_option( 'header-text' );
					if ( $header_text ) {
						echo $header_text; // Not escaped, since needs to include HTML
					} else {
						echo 'Hellish<span>Simplicity</span><small>.tld</small>';
					}
				?>
			</a>
		</h1>
		<h2><?php bloginfo( 'description' ); ?></h2>
	</div><!-- .hgroup -->
</header><!-- #masthead -->

<div id="main" class="site-main">
