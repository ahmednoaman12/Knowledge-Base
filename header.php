<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package deltahub
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<title>
	
    <?php bloginfo('name'); ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>

  </title>
	<?php wp_head(); ?>
</head>
<?php var_dump($_COOKIE);?>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'deltahub' ); ?></a>




	<!-- <header id="masthead" class="site-header">
		<div class="site-branding">



		
			<?php

			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$deltahub_description = get_bloginfo( 'description', 'display' );
			if ( $deltahub_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $deltahub_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'deltahub' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>
	</header> -->




	    <div class="container-fluid">
        <div class="navigation ">
            <div class="row ">
                <ul class="topnav">
                    
				<?php wp_nav_menu( array( 'theme_location' => 'primary' , 'container' => false, 'items_wrap' => '%3$s',) ); // Display the user-defined menu in Appearance > Menus ?>

                    <!-- <li>
                        <a href="index.html">
                            <i class="fa fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="knowledge-base.html">
                            <i class="fa fa-book"></i> Knowledge Base</a>
                    </li>
                    <li>
                        <a href="articles.html">
                            <i class="fa fa-file-text-o"></i> Articles</a>
                    </li>
                    <li>
                        <a href="faq.html">
                            <i class="fa fa-lightbulb-o"></i> FAQ</a>
                    </li>
                    <li class="icon">
                        <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
 <!-- SEARCH FIELD AREA -->
 <div class="searchfield bg-hed-six" style="background:url('<?php echo get_template_directory_uri(); ?>/images/page-headers/6.jpg')">
        <div class="container" style="padding-top: 20px; padding-bottom: 20px;">
            <div class="row text-center margin-bottom-20">
                <h1 class="white"> Knowledge Base</h1>
                <span class="nested"> Learn to use Delta </span>
            </div>
            <br>


            <div class="row search-row" >
            <?php echo get_search_form(); ?>
                </div>
            </div>
        </div>
        <!-- END SEARCH FIELD AREA --> 