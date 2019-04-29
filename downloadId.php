
<?php  include('processing.php'); ?>


<!DOCTYPE html>
<html>
<head>
  <title>Voter Register</title>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="register.css">

<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">


</head>

<body>



<form  action="search.php"  method="post">
 

  <label>
    <p class="label-txt">Enter your Name</p>
    <input type="text" class="form-control" name="name">
  </label>
  
<label>
    <p class="label-txt">Enter your Area</p>
    <input type="text" class="form-control" name="area">
  </label>
  

  <button class="btn btn-primary" type="submit" name="submit">Search </button>
</form>



</body>
</html>

