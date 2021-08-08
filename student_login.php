 <?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$USERNAME = $_POST['name'];
$ID= $_POST['pass'];			

if (!($USERNAMEe=="" && $ID==""))
{

$sql="SELECT * FROM login WHERE USERNAME = '$_POST[name]' ";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if($row["USERNAME"]==$USERNAME && $row["ID"]==$ID)
   {
	header("location: student.html");
	}
else
    echo"Sorry, your credentials are not valid, Please try again.";

}

else 
{
	echo"Sorry, your credentials are not valid, Please try again.";
}	


?>