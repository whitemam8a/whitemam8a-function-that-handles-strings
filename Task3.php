<?php
function UserAndEmail($name, $email)
{
  $name = ucwords(strtolower($name));

  $email = strtolower($email);

  if (strpos($email, "@") == false) {
    return false;
  } else {
    return array("nameOfUser" => $name, "Email" => $email);
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $result =  UserAndEmail("DANIIL", "daniil.sereda@eek.com");

  $result2 =  UserAndEmail("Daniil", "daniil.seredaeek.com");

  var_dump($result);
  echo "<br>";
  var_dump($result2);
  ?>
</body>

</html>