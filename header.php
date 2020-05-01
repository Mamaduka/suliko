<?php use function Mamaduka\Suliko\get_the_logo; ?>
<!DOCTYPE html>
<html class="h-full w-full"<?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>
	<body class="h-full w-full bg-white pb-24">
		<div id="page" class="min-h-screen flex flex-col">
			<header id="site-header" class="flex-shrink-0" role="banner">
				<div class="flex justify-between flex justify-between px-10 sm:px-12 lg:px-16 pt-6 pb-12 mx-auto max-w-4xl">
					<div class="flex items-center">
						<a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
							<img width="150" height="150" src="<?php echo get_the_logo(); ?>" class="logo" alt="George Mamadashvili">
						</a>
						<span class="h-6 border-solid border-l border-gray-400 ml-3"></span>
						<h1 class="text-lg text-gray-800 ml-3">George Mamadashvili</h1>
					</div>
					<nav class="flex items-center font-semibold text-lg text-gray-800">
						<ul class="flex list-none p-0 m-0">
							<li>
								<a class="hover:text-red-500" href="<?php echo esc_url( home_url('/about') ); ?>">About</a>
							</li>
						</ul>
					</nav>
				</div>
			</header>
			<main id="site-content" class="flex-grow flex-shrink-0 px-10 sm:px-12 lg:px-16 mx-auto w-full max-w-4xl" role="main">
