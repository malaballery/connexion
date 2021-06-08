<?php
// var_dump($_POST);
if (!empty($_POST)) :
  $aErrors = [];
  if (empty($_POST['name'])) :
    array_push($aErrors, "Veuillez compléter votre nom !");
  endif;
  if (empty($_POST['email'])) :
    array_push($aErrors, "Veuillez compléter votre email !");
  endif;
  if (empty($_POST['password'])) :
    array_push($aErrors, "Veuillez compléter votre mot de passe !");
  endif;
  if (empty($_POST['confirmPassword'])) :
    array_push($aErrors, "Veuillez confirmer votre mot de passe !");
  endif;
  if ($_POST['password'] != $_POST['confirmPassword']) :
    array_push($aErrors, "Attention ! Les mots de passe ne correspondent pas");
  endif;

  if (empty($aErrors)) :
    session_start(); //démarre la session
    $_SESSION['email'] = $_POST['email'];
  endif;
endif;
?>