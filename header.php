<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php bloginfo('name') ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="wp_enqueue_style ('slick', get_stylesheet_directory_uri (). '/slick-1.8.1/slick/slick.css');"/>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
	<?php wp_head(); ?>
</head>


<body>
	<header>
		<div class="contaner">
			<nav class="row m-0 justify-content-between justify-content-lg-start">
				<div class="burger d-flex col-2 d-md-none" id="burger">
					<span class="burger__item"></span>
					<span class="burger__item"></span>
					<span class="burger__item"></span>
				</div>
				<div class="logo col-2 col-sm-2 col-md-1">
					<img src="<?php bloginfo('template_url') ?>/img/logo.png" alt="" class="logo__icon">
					<div class="logo__txt bold-txt"><?php bloginfo('name') ?></div>
				</div>
			</nav>
		</div>
		<div class="contaner">
			<div class="row justify-content-start">
				<div class="header__headline lite-text col-9 col-md-5">
					Organic</br>Food
				</div>
			</div>
		</div>
		<div class="contaner pic-con">
			<div class="row m-0 pic">
			<div class="row pic-wrap p-0 m-0 col-12 col-md-3">
				<div class="col-12 pic__item_xl">
					<div class="pic__text">
						<span class="bold-txt">Awesome</span></br>
						<span class="lite-text">Sweets</span>
					</div>
				</div>
			</div>
			<div class="row pic-wrap-litel p-0 m-0 col-12 col-md-9">
				<div class="col-6 col-md-6 pic__item ">
					<div class="pic__text">
						<span class="bold-txt ">Organic</span></br>
						<span class="lite-text ">food</span>
					</div>
				</div>
				<div class="col-6 col-md-6 pic__item">
					<div class="pic__text">
						<span class="bold-txt ">tasty</span></br>
						<span class="lite-text ">meat</span>
					</div>
				</div>
				<div class="col-6  d-flex col-md-5 pic__item">
					<div class="pic__item_text">
						<span class="bold-txt ">Agro</span>
						<span class="lite-text ">awesome</span>
						<span class="lite-text ">Products</span>
					</div>
				</div>
				<div class="col-6 col-md-7 pic__item ">
					<div class="pic__text">
						<span class="bold-txt ">Juicy</span></br>
						<span class="lite-text ">Fruits</span>
					</div>
				</div>
				</div>
			</div>
		</div>
	</header>