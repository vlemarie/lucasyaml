<?php
// Charger le fichier YAML
$yamlFile = './yaml/competences.yaml';
$yamlData = file_get_contents($yamlFile);

// Convertir le contenu YAML en tableau PHP en utilisant l'extension YAML
$competences = yaml_parse($yamlData)['competences'];
?>
<div id="competences" class="container mt-5">
  <h2>Compétences</h2>

  <div class="row">
    <?php
    foreach ($competences as $domaine) {
      echo '<div class="col-md-4 mb-4">';
      echo '<div class="card">';
      echo '<div class="card-body">';
      echo '<h5 class="card-title">', $domaine['domaine'], '</h5>';
      echo '<ul class="list-unstyled">';
      
      foreach ($domaine['items'] as $item) {
        echo '<li class="mb-2">';
        echo '<strong>', $item['nom'], '</strong> - Niveau : ', $item['niveau'];

        echo '</li>';
      }

      echo '</ul>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
    }
    ?>
  </div>
</div>