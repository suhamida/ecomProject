 <?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$UserName = $_POST['name'];
$Password = $_POST['pass'];			

if (!($UserName=="" && $Password==""))
{

$sql="SELECT * FROM login WHERE UserName = '$_POST[name]' ";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if($row["UserName"]==$UserName && $row["Password"]==$Password)
   {
	header("location: homepage.html");
	}
else
    echo"Sorry, your credentials are not valid, Please try again.";

}

else 
{
	echo"Sorry, your credentials are not valid, Please try again.";
}	


?>