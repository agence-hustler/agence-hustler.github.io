<!DOCTYPE HTML>
<html lang="fr">

<head>
  <title>Page en construction - AQUASPASS'AIR</title>
  <?php include VIEWS_DIR . '/partials/header.php'; ?>
  <link rel="stylesheet" href="<?= PUBLIC_PATH; ?>/css/404.css">
</head>

<body>
  <?php include VIEWS_DIR . '/partials/top-navbar.php'; ?>


  
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">


        <div class="row">

          <div class="col-12 col-lg-6">
            <img src="<?= PUBLIC_PATH; ?>/images/WIP.svg" alt="En construction" class="svg svg-margins">
          </div>

          <div class="col-12 col-lg-6 contain">
            <div class="vertical-center">
              <h1 class="text-center text-lg-start">En construction</h1>
              <p class="text-center text-lg-start">Merci de revenir plus tard</p>
              <div class="buttons-con">
                <div class="action-link-wrap">
                  <a onclick="history.back(-1)" class="link-button link-back-button"><i class="fas fa-arrow-circle-left"></i>Retour</a>
                  <a href="<?= PUBLIC_PATH; ?>" class="link-button"><i class="fas fa-home"></i>Retour à l'accueil</a>
                </div>
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