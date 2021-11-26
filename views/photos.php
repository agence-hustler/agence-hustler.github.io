<!DOCTYPE HTML>
<html lang="fr">

<head>
	<title>Accueil - AQUASPASS'AIR</title>
	<?php include VIEWS_DIR . '/partials/header.php'; ?>
	<link rel="stylesheet" href="<?= PUBLIC_PATH; ?>/css/photos.css">
</head>

<body>
	<?php include VIEWS_DIR . '/partials/top-navbar.php'; ?>


	<div class="contain mt-3">

		<section class="carousel" aria-label="Gallery">
			<ol class="carousel__viewport">
				<li id="carousel__slide1" tabindex="0" class="carousel__slide">
					<div class="carousel__snapper">
						<a href="#carousel__slide4" class="carousel__prev">Go to last slide</a>
						<img src="https://media.sudouest.fr/1563021/1200x750/so-5ff5e4bd66a4bdee6f392e63-ph0.jpg" alt="">
						<a href="#carousel__slide2" class="carousel__next">Go to next slide</a>
					</div>
				</li>
				<li id="carousel__slide2" tabindex="0" class="carousel__slide">
					<div class="carousel__snapper"></div>
					<a href="#carousel__slide1" class="carousel__prev">Go to previous slide</a>
						<img src="https://cdt24.media.tourinsoft.eu/upload/aquakud2.jpg" alt="">
					<a href="#carousel__slide3" class="carousel__next">Go to next slide</a>
				</li>
				<li id="carousel__slide3" tabindex="0" class="carousel__slide">
					<div class="carousel__snapper"></div>
					<a href="#carousel__slide2" class="carousel__prev">Go to previous slide</a>
						<img src="https://www.guide-piscine.fr/medias/image/centre-aquatique-sallanches-mont-blanc-31831-1200-630.jpg" alt="">
					<a href="#carousel__slide4" class="carousel__next">Go to next slide</a>
				</li>
				<li id="carousel__slide4" tabindex="0" class="carousel__slide">
					<div class="carousel__snapper"></div>
					<a href="#carousel__slide3" class="carousel__prev">Go to previous slide</a>
						<img src="https://www.ecla-jura.fr/wp-content/uploads/2016/12/Aquarel.jpg" alt="">
					<a href="#carousel__slide1" class="carousel__next">Go to first slide</a>
				</li>
			</ol>
			<aside class="carousel__navigation">
				<ol class="carousel__navigation-list">
					<li class="carousel__navigation-item">
						<a href="#carousel__slide1" class="carousel__navigation-button">Go to slide 1</a>
					</li>
					<li class="carousel__navigation-item">
						<a href="#carousel__slide2" class="carousel__navigation-button">Go to slide 2</a>
					</li>
					<li class="carousel__navigation-item">
						<a href="#carousel__slide3" class="carousel__navigation-button">Go to slide 3</a>
					</li>
					<li class="carousel__navigation-item">
						<a href="#carousel__slide4" class="carousel__navigation-button">Go to slide 4</a>
					</li>
				</ol>
			</aside>
		</section>

	</div>


	<?php include VIEWS_DIR . '/partials/footer.php'; ?>
</body>

</html>