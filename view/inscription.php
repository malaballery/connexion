<?php
require_once "controller/inscription.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
</head>
<body>

  <?php
  if (!empty($aErrors)):
  ?>
    <div style="color :red; border : 1px solid red">
    <?php
    foreach ($aErrors as $error) :
    ?>
    <p><?php echo $error; ?></p>
    <?php endforeach;?>
    </div>
  <?php
  endif;
  ?>

  <?php
    if ( !empty($aErrors) OR empty($_POST)) :
  ?>
    <h2>Inscription form : </h2>
    <form action="index.php" method="POST">
      <div>
        <label for="name">Your name :</label>
        <input type="text" name="name" id="name" <?php if(!empty($_POST['name'])): ?>value="<?php echo $_POST['name'];?>"<?php endif;?>>
      </div>
      <div>
        <label for="email">Your email :</label>
        <input type="email" name="email" id="email" <?php if(!empty($_POST['email'])): ?>value="<?php echo $_POST['email'];?>"<?php endif;?>>
      </div>
      <div>
        <label for="password">Your password :</label>
        <input type="password" name="password" id="password" <?php if(!empty($_POST['password'])): ?>value="<?php echo $_POST['password'];?>"<?php endif;?>>
      </div>
      <div>
        <label for="confirmPassword">Password confirmation :</label>
        <input type="password" name="confirmPassword" id="confirmPassword" <?php if(!empty($_POST['confirmPassword'])): ?>value="<?php echo $_POST['confirmPassword'];?>"<?php endif;?>>
      </div>
      <input type="submit" value="inscription">
    </form>
  <?php
    else : 
  ?>
    <div style="color : green">Vous êtes inscrit.</div>
  <?php
    endif
  ?>
</body>
</html>