<nav class="navbar navbar-expand-custom navbar-mainbg d-flex">
	<!-- <a href="#">Navbar</a> -->
	<img style="width: 30px; padding: 0px; margin-left: 15px;" src="<?= PUBLIC_PATH; ?>/images/logo/logo_blanc.png" alt="logo" class="navbar-brand navbar-logo">
	<button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fas fa-bars text-white"></i>
	</button>
	<div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<div class="hori-selector">
				<div class="left"></div>
				<div class="right"></div>
			</div>

			<!-- Home -->
			<li class="nav-item<?= (ROUTE == '/') ? ' active' : ''; ?>">
				<a class="nav-link" href="<?= PUBLIC_PATH; ?>"><i class="fas fa-home"></i>Accueil</a>
			</li>

			<!-- Newsletter -->
			<li class="nav-item<?= (ROUTE == '/newsletter/') ? ' active' : ''; ?>">
				<a class="nav-link" href="<?= PUBLIC_PATH; ?>newsletter/"><i class="far fa-newspaper"></i>Newsletter</a>
			</li>

			<!-- Reservation -->
			<li class="nav-item<?= (ROUTE == '/reservations/') ? ' active' : ''; ?>">
				<a class="nav-link" href="<?= PUBLIC_PATH; ?>reservations/"><i class="far fa-calendar-alt"></i>Réservations</a>
			</li>

			<!-- Acheter une place -->
			<li class="nav-item<?= (ROUTE == '/acheter-une-place/') ? ' active' : ''; ?>">
				<a class="nav-link" href="<?= PUBLIC_PATH; ?>acheter-une-place/"><i class="fas fa-shopping-cart"></i>Acheter une place</a>
			</li>

			<!-- Photos -->
			<li class="nav-item<?= (ROUTE == '/photos/') ? ' active' : ''; ?>">
				<a class="nav-link" href="<?= PUBLIC_PATH; ?>photos/"><i class="fas fa-images"></i>Photos</a>
			</li>

			<!-- Trouvez-nous -->
			<li class="nav-item<?= (ROUTE == '/trouvez-nous/') ? ' active' : ''; ?>">
				<a class="nav-link" href="<?= PUBLIC_PATH; ?>trouvez-nous/"><i class="fas fa-map-marker-alt"></i>Trouvez-nous</a>
			</li>

			<?php
			if (isConnected())
			{
				?>
				<!-- Sign Out -->
				<li class="nav-item<?= (ROUTE == '/deconnexion/') ? ' active' : ''; ?>">
					<a class="nav-link" href="<?= PUBLIC_PATH; ?>deconnexion/"><i class="fas fa-sign-out-alt"></i>Déconnexion</a>
				</li>
				<?php
			}
			else
			{
				?>
				<!-- Sign In -->
				<li class="nav-item<?= (ROUTE == '/connexion/') ? ' active' : ''; ?><?= (ROUTE == '/signup/') ? ' active' : ''; ?>">
					<a class="nav-link" href="<?= PUBLIC_PATH; ?>connexion/"><i class="fas fa-sign-in-alt"></i>Connexion</a>
				</li>
				<?php
			}
			?>

		</ul>
	</div>
</nav>