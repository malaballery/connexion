<?php
  if (empty($_POST['email'])) :
    echo "Veuillez compléter votre mail !";
  elseif (empty($_POST['password'])) :
    echo "Veuillez compléter votre mot de passe !";
  endif;
?>