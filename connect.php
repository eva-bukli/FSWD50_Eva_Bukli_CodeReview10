  <?php
  $servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "cr10_eva_bukli_biglibrary";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}
  //echo "jeejj" ;
  ?>