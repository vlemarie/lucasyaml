<!-- Contenu de la page Experiences (php/experiences.php) -->

<div id="experiences" class="container mt-5">
  <h2>Expériences Professionnelles</h2>

  <?php

  // Charger le fichier YAML
  $yamlFile = './yaml/experience.yaml';
  $yamlData = file_get_contents($yamlFile);

  // Convertir le contenu YAML en tableau PHP
  $experiences = yaml_parse($yamlData)['experiences'];

  // Afficher le contenu du tableau
  foreach ($experiences as $experience) {
    echo '<div class="card mt-3">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">', $experience['poste'], '</h5>';
    echo '<p class="card-text"><strong>Entreprise:</strong> ', $experience['entreprise'], '</p>';
    echo '<p class="card-text"><strong>Date de début:</strong> ', $experience['date_debut'], '</p>';
    echo '<p class="card-text"><strong>Date de fin:</strong> ', $experience['date_fin'], '</p>';
    echo '<p class="card-text"><strong>Lieu:</strong> ', $experience['lieu'], '</p>';
    echo '<p class="card-text"><strong>Description:</strong> ', nl2br($experience['description']), '</p>';
    echo '</div>';
    echo '</div>';
  }
  ?>
<div class="mt-4">
    <p>Pour plus de détails, <a href="https://drive.google.com/file/d/16GOKg_IadV_HUBq0RMBKvl92qKOALVh8/view" target="_blank">consultez mon CV.</a></p>
  </div>
</div>
</div>