<!DOCTYPE HTML>
<html lang="fr">
<head>
	<title>Connexion - AQUASPASS'AIR</title>
	<?php include VIEWS_DIR . '/partials/header.php'; ?>
	<link rel="stylesheet" href="<?= PUBLIC_PATH; ?>/css/signin.css">
</head>

<body>
<?php include VIEWS_DIR . '/partials/top-navbar.php'; ?>

<?php
if ( isset($success) )
{
	echo '<p class="alert alert-success fw-bold text-center">' . $success . '</p>';
}
else
{
	if ( isset($errors['server']) )
	{
		echo '<p class="alert alert-danger fw-bold text-center">' . $errors['server'] . '</p>';
	}
	?>

	<div class="container left-panel-active">

		<!-- Sign In -->
		<div class="container__form container--signin">
			<form method="POST" action="<?= PUBLIC_PATH . 'connexion/' ?>" class="form" id="signInForm">
				<h2 class="form__title">Connexion</h2>

				<!-- Email -->
				<input type="email"
					name="email"
					placeholder="Email"
					class="input<?= isset($errors['email']) ? ' is-invalid' : ''; ?>"
					value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"
				/>
				<?= isset($errors['email']) ? '<div class="invalid-feedback">' . $errors['email'] . '</div>' : ''; ?>

				<!-- Password -->
				<input type="password"
					name="password"
					placeholder="Mot de passe"
					class="input<?= isset($errors['password']) ? ' is-invalid' : ''; ?>"
				/>
				<?= isset($errors['password']) ? '<div class="invalid-feedback">' . $errors['password'] . '</div>' : ''; ?>

				<!-- Password Reset -->
				<a id="KillItWithFire"  class="link">Mot de passe perdu?</a>

				<!-- Button -->
				<input type="submit" class="btn" value="Connexion">
			</form>
		</div>

		<!-- Sign Up -->
		<div class="container__form container--signup">
			<form method="POST" action="<?= PUBLIC_PATH . 'inscription/' ?>" class="form" id="signUpForm">
				<h2 class="form__title">Inscription</h2>

				<!-- Username -->
				<input type="text"
					name="username"
					placeholder="Pseudo"
					class="input<?= isset($errors['username']) ? ' is-invalid' : ''; ?>"
					value="<?= isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>"
				/>
				<?= isset($errors['firstname']) ? '<div class="invalid-feedback">' . $errors['firstname'] . '</div>' : ''; ?>

				<!-- Email -->
				<input type="email"
					name="email"
					placeholder="Email"
					class="input<?= isset($errors['email']) ? ' is-invalid' : ''; ?>"
					value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"
				/>
				<?= isset($errors['email']) ? '<div class="invalid-feedback">' . $errors['email'] . '</div>' : ''; ?>

				<!-- Password -->
				<input type="password"
					name="password"
					placeholder="Mot de passe"
					class="input<?= isset($errors['password']) ? ' is-invalid' : ''; ?>"
				/>
				<?= isset($errors['password']) ? '<div class="invalid-feedback">' . $errors['password'] . '</div>' : ''; ?>

				<!-- Button -->
				<input type="submit" class="btn" value="Inscription">
			</form>
		</div>

		<!-- Overlay -->
		<div class="container__overlay">
			<div class="overlay">
				<div class="overlay__panel overlay--left">
					<button class="btn" id="signIn">Connexion</button>
				</div>
				<div class="overlay__panel overlay--right">
					<button class="btn" id="signUp">Inscription</button>
				</div>
			</div>
		</div>

	</div>

	<?php
}
?>

<?php include VIEWS_DIR . '/partials/footer.php'; ?>
<script src="<?= PUBLIC_PATH; ?>/js/signin.js"></script>
</body>
</html>