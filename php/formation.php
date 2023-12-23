<!-- Contenu de la page Formation (formation.php) -->

<div id="formation" class="container mt-5">
  <h2>Formation Académique</h2>

  <?php
  // Charger le fichier YAML
  $yamlFile = './yaml/formation.yaml';
  $yamlData = file_get_contents($yamlFile);

  // Convertir le contenu YAML en tableau PHP
  $formations = yaml_parse($yamlData)['formations'];

  // Afficher le contenu du tableau
  foreach ($formations as $formation) {
    echo '<div class="card mt-3">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">', $formation['nom'], '</h5>';
    echo '<p class="card-text"><strong>Établissement:</strong> ', $formation['etablissement'], '</p>';
    echo '<p class="card-text"><strong>Date de début:</strong> ', $formation['date_debut'], '</p>';
    echo '<p class="card-text"><strong>Date de fin:</strong> ', $formation['date_fin'], '</p>';
    echo '<p class="card-text"><strong>Lieu:</strong> ', $formation['lieu'], '</p>';
    echo '<p class="card-text"><strong>Contenu:</strong> ', nl2br($formation['contenu']), '</p>';
    echo '</div>';
    echo '</div>';
  }
  ?>
<div class="mt-4">
    <p>Pour plus de détails, <a href="https://drive.google.com/file/d/16GOKg_IadV_HUBq0RMBKvl92qKOALVh8/view" target="_blank">consultez mon CV.</a></p>
  </div>

</div>