<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Partie10_TP3</title>
</head>
<body>

  <table>
    <thead>
      <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Portrait</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Victor</td>
        <td>HUGO</td>
        <td><img style="widht:30px;" src="http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg"></td>
      </tr>
      <tr>
        <td>Jean</td>
        <td>DE LA FONTAINE</td>
        <td><img style="widht:30px;" src="http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg"></td>
      </tr>
      <tr>
        <td>Pierre</td>
        <td>CORNEILLE</td>
        <td><img style="widht:30px;" src="http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg"></td>
      </tr>
      <tr>
        <td>Jean</td>
        <td>RACINE</td>
        <td><img style="widht:50px;" src="http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg"></td>
      </tr>
    </tbody>
  </table>

  <?php
  function generateGallery($data){ // La méthode generateGallery() génére le tableau avec les noms des personnes.?>
    <table>
      <?php
      foreach ($data as $portrait){?>
        <tr><td><?= $portrait['name'] ?></td></tr>
        <?php
      }
      ?>
    </table>
    <?php
  }
  ?>

  

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
