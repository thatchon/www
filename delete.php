<?php
$id = $_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'thatchon.mysql.database.azure.com', 'btkeiei1@thatchon', 'THEMARI01z', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$sql = "DELETE FROM guestbook WHERE ID = '$id' ";

if (mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>";
        //echo "Delete Successfully"
        echo "window.location = 'show.php'; ";
    echo "</script>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
