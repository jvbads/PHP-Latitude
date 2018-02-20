<?php

  $url = "https://jsonplaceholder.typicode.com/users";
  $json = file_get_contents($url);
  $dados = json_decode($json, true);
  $qtdHemSul = 0;

  echo "<h2>Sites dos usuarios:</h2>";

  for ($i = 0; $i < count($dados); $i ++) {
    echo $dados[$i]['website'] . "<br>";

    if ($dados[$i]['username'] == "Samantha") {
      $email = $dados[$i]['email'];
    }

    if ($dados[$i]['address']['geo']['lat'] < 0) {
      $qtdHemSul++;
    }
  }

  echo ("<br><h2>E-mail da Samantha:</h2>" . $email);
  echo ("<br><h2>Total de usuários do Hemisfério Sul:</h2>". $qtdHemSul);

 ?>
