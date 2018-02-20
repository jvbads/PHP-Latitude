<?php

  $url = "https://jsonplaceholder.typicode.com/users";
  $json = file_get_contents($url);
  $json_data = json_decode($json, true);
  $qtdHemSul = 0;

  echo "<h2>Sites dos usuarios: </h2>";

  for ($i=0; $i<count($json_data) ; $i++) {
    echo $json_data[$i]['website'] . "<br>";

    if ($json_data[$i]['username'] == "Samantha") {
      $email = $json_data[$i]['email'];
    }

    if ($json_data[$i]['address']['geo']['lat'] < 0) {
      $qtdHemSul++;
    }
  }

  echo ("<br><h2>E-mail da Samantha:</h2>" . $email);
  echo ("<br><h2>Total de usuários do Hemisfério Sul:</h2>". $qtdHemSul);

 ?>
