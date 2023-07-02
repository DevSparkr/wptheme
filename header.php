<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<header class="py-5 bg-primary text-white">
	<div class="container">
		<div class="flex items-center justify-between">
			<div class="h-logo">
				<?php
					if( has_custom_logo( ) ){
						the_custom_logo();
					}else{
						?>
							<a href="<?php echo home_url('/'); ?>" class="text-xl"><?php bloginfo( 'site-title' ); ?></a>
						<?php
					}
				?>
			</div>
			<div class="hidden md:block">
				<?php
					wp_nav_menu(array(	
						'theme_location'	=> 'header_menu',
						'menu_class'		=> 'h-menu flex flex-wrap gap-x-6'
					));
				?>
			</div>
			<div class="md:hidden">
				<svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
				</svg>
			</div>
		</div>
	</div>
</header>