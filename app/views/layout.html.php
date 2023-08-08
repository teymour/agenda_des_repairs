<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>L'Agenda des Repairs · La communauté de la réparation bénévole</title>

	<link href="<?php echo $urlbase; ?>/css/bootstrap.min.css" rel="stylesheet" />
	<meta name="theme-color" content="#7952b3">
    <!-- Custom styles for this template -->
    <link href="<?php echo $urlbase; ?>/css/agenda.css" rel="stylesheet" />
  </head>
  <body>

  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">L'Agenda des Repairs</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="/create" class="nav-link active" aria-current="page">Proposer un repair</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Ma ville</a></li>
        <li class="nav-item"><a href="#" class="nav-link">La carte</a></li>
      </ul>
    </header>
    <div style="min-height: 600px;">
	<?php include($template); ?>
    </div>

  <footer class="row row-cols-5 py-5 my-5 border-top">
      <div class="col">
        <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <p class="text-muted">© 2023 - AGPL</p>
      </div>

      <div class="col">

      </div>

      <div class="col">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Les prochains repair</a></li>
        </ul>
      </div>

      <div class="col">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Réparer près de chez moi</a></li>
        </ul>
      </div>

      <div class="col">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Proposer un repair</a></li>
        </ul>
      </div>
    </footer>

</div>

  </body>
</html>
