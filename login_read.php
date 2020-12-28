
  <?php 

  
    $connection = mysqli_connect('localhost','root', '', 'users');
      if($connection){
        echo "We are connected";
      } else {
        die("Not connected to database");
      }

      $query = "SELECT * FROM users";
     
      $result = mysqli_query($connection, $query);

      if(!$result) {
          die('Query failed' . mysqli_error());
      }
  
  ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String functions</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" 
integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <div class="col-sm-6">
  <h1 class="text-center">Read</h1>
  <?php
  while($row = mysqli_fetch_assoc($result)){

?>
<pre>
<?php
print_r($row);
?>
</pre>
<?php
  }

  ?>

  </div>
</div>
 
</body>
</html>