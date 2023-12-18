<script> let a = <?php
#Connection Values
$servername = "localhost";
$username = "root";
$password = "123456"; 

// Create connection to MySQL
$conn = new mysqli($servername, $username, $password);

// Test connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

# Draw data from database using the query() method
$conn->query("use period1_team4;"); #First select the active database

$sql = "select TeamUsername from login where TeamUsername = 'Ak';"; #write query
$AryaUsername = $conn->query($sql); #submit query and save data in $result

$sql = "select TeamUsername from login where TeamUsername = 'Ben';"; #write query
$BenUsername = $conn->query($sql); #submit query and save data in $result

$sql = "select TeamUsername from login where TeamUsername = 'Phoenix';"; #write query
$ShreyasUsername = $conn->query($sql); #submit query and save data in $result

$sql = "select TeamUsername from login where TeamUsername = 'Raghu';"; #write query
$RaghuUsername = $conn->query($sql); #submit query and save data in $result

$sql = "select TeamUsername from login where TeamUsername = 'Taj';"; #write query
$TajUsername = $conn->query($sql); #submit query and save data in $result

$sql = "select TeamUsername from login where TeamUsername = 'Venk';"; #write query
$VenkUsername = $conn->query($sql); #submit query and save data in $result test


$sql = "select TeamPassword from login where TeamUsername = 'Venk';"; 
$VenkPasword = $conn->query($sql);

$sql = "select TeamPassword from login where TeamUsername = 'Taj';"; 
$TajPasword = $conn->query($sql);

$sql = "select TeamPassword from login where TeamUsername = 'Raghu';"; 
$RaghuPasword = $conn->query($sql);

$sql = "select TeamPassword from login where TeamUsername = 'Phoenix';"; 
$PhoenixPasword = $conn->query($sql);

$sql = "select TeamPassword from login where TeamUsername = 'Ben';"; 
$BenPassword = $conn->query($sql);

$sql = "select TeamPassword from login where TeamUsername = 'Ak';"; 
$AryaPassword = $conn->query($sql);

$conn->close();
?>; </script>
