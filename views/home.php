<!DOCTYPE HTML>
<html lang="fr">

<head>
	<title>Accueil - AQUASPASS'AIR</title>
	<?php include VIEWS_DIR . '/partials/header.php'; ?>
	<link rel="stylesheet" href="<?= PUBLIC_PATH; ?>/css/waves.css">
</head>

<body>
	<?php include VIEWS_DIR . '/partials/top-navbar.php'; ?>


	<!-- Hey! This is the original version of Simple CSS Waves -->
	<div class="header">

		<div class="inner-header flex">

			<!-- Logo SVG -->
			<svg version="1.1" class="logo_wave" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 185 200" xml:space="preserve">
				<path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283" />
				<g id="Calque_2" data-name="Calque 2">
					<path fill="#fff" d="M182.42,129.8c-.67.83-.53,1.87-.76,2.82-3,12.25-10.67,19.75-22.91,22.51-9.3,2.1-18.45.83-27.51-1.71a118.65,118.65,0,0,1-23.59-9.63c-8.49-4.49-17.11-8.61-26.38-11.25a61.29,61.29,0,0,0-20.1-2.44,46,46,0,0,0-21.57,6.81,77,77,0,0,0-20.55,18.66c-.26.34-.54.65-.83,1,0,0-.1,0-.26,0A43.19,43.19,0,0,1,21.23,144c5.22-12.35,13.52-21.93,25.63-27.94a56.45,56.45,0,0,1,30.19-5.37c15.28,1.24,28.93,7.14,42,14.7,8.13,4.7,16.43,9,25.4,11.94,4.89,1.58,9.88,2.8,15.08,2.34,6.84-.6,11.79-4.29,15.52-9.85a48.91,48.91,0,0,0,5.46-11.5c.2-.6.42-1.19.68-1.94.8,1.71.59,3.47,1.23,5Z" />
					<path fill="#fff" d="M60.76,105.28c8.89-5.07,17.74-10,26.51-15.16a36.87,36.87,0,0,0,4.54-3.8c.74-.62.08-1.07-.17-1.5-3.41-6-6.86-12-10.29-18.06C79.21,63,77,59.28,74.94,55.5c-2.63-4.75-.87-10,3.91-12a7.94,7.94,0,0,1,9.65,2.89c2.19,3.4,4.06,7,6.14,10.48,13,21.72,24.16,44.44,35.52,67,.09.18.17.38.44,1-2.13-1.11-3.95-2-5.73-3-7.13-3.93-14.11-8.13-21.71-11.17-10.86-4.34-22-7-33.83-6.29a45.45,45.45,0,0,0-6.68.8A3.87,3.87,0,0,1,60.76,105.28Z" />
					<path fill="#fff" d="M139,70a17.67,17.67,0,1,1-17.63,17.75A17.55,17.55,0,0,1,139,70Z" />
				</g>
			</svg>

			<h1>AQUASPASS'AIR</h1>
		</div>

		<!--Waves Container-->
		<div>
			<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
				<defs>
					<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
				</defs>
				<g class="parallax">
					<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
					<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
					<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
					<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
				</g>
			</svg>
		</div>
		<!--Waves end-->

	</div>

	<div class="container mb-2">
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-2">


				<div class="row mt-2">
					<div class="col-12">
						<div class="card">
							<img src="<?= PUBLIC_PATH; ?>/images/Affiche_AQUASPASSAIR_jpg.jpg" class="card-img-top" alt="affiche">
							<div class="card-body">
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							</div>
						</div>
					</div>
				</div>


				<div class="row mt-2">
					<div class="col-12 col-lg-6">
						<div class="card">
							<img src="<?= PUBLIC_PATH; ?>/images/Post_Instagram_1_png.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="card">
							<img src="<?= PUBLIC_PATH; ?>/images/Post_Instagram_2_png.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							</div>
						</div>
					</div>
				</div>


				<div class="row mt-2">
					<div class="col-12">
						<div class="card">
							<img src="<?= PUBLIC_PATH; ?>/images/Invitation_Verso_png.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>

	<?php include VIEWS_DIR . '/partials/footer.php'; ?>
</body>

</html>