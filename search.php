<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="register.css">


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voter";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$name = "";
$state= "";

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $state = $_POST['area'];

  }

$sql = "SELECT id, name, state FROM info where name='$name' and state='$state' ";
$result = mysqli_query($conn, $sql);

?>
  <div class="row justify-content-center jumbotron  " style="margin: 200px auto">
  <table  class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>state</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  
  
  <?php while ($row = mysqli_fetch_array($result)) { ?>
    <tr>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['state']; ?></td>
      <td>
      <td>
        <a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Download</a>
      </td>
    </tr>
  <?php } ?>
</table>

</div>
