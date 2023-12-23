<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lucas Laurent Portfolio</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      padding-top: 56px;
    }
  </style>
</head>
<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#accueil">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#apropos">A propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#competences">Compétences</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#experiences">Expérience</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#formation">Formation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

<?php
    $sections = ['accueil', 'apropos', 'competences', 'experience', 'formation', 'contact'];
    foreach ($sections as $section) {
      include 'php/' . $section . '.php';
    }
?>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>