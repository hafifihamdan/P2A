 <?php   

$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'psm2'; // Database Name


$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * FROM tempahan';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}


            if (isset($_GET['notempah']))
            {
                $notempah = $_GET['notempah'];
                
                $del_query = "DELETE FROM tempahan WHERE notempah='$notempah'";
                
                $result1 = mysqli_query($conn, $del_query);
                
                if($result1)
                {
                    echo "<script>alert('Data has been delete')</script>";
                    echo "<script>window.open('lpadmin.php')</script>";
                }
                else
                {
                    echo "<script>alert('No data delete')</script>";
                    echo "<script>window.open('lpadmin.php')</script>";
                }
            }
 ?>