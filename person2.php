<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Person info</h1>
    <p>Post array: </p>
    <form class="" action="index.html" method="GET">
    <?php
    $names=array(
      array("fname"=>'Jim', "lname"=>'Smith')
    );
     ?>
     <?php print_r($names); ?>
     <?php
     $firstname='Jim';
     $lastname='Smith';
     echo '<br>';
     echo 'First name is '.$firstname;
     echo '<br>';
     echo 'Last name is '.$lastname;
      ?>
    </form>
  </body>
</html>
