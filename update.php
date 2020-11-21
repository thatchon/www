<?php
$id = $_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'thatchon.mysql.database.azure.com', 'btkeiei1@thatchon', 'THEMARI01z', 'itflab', 3306);
if (mysqli_connect_errno($conn)) {
  die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$name = $_POST['Name'];
$comment = $_POST['Comment'];
$link = $_POST['Link'];
$sql = "UPDATE guestbook SET Name='$name',Comment='$comment',Link='$link' WHERE ID= '$id' ";

if (mysqli_query($conn, $sql)) {
  header("Location: show.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
