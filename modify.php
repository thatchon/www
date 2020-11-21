<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Modify</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <?php

  $conn = mysqli_init();
  mysqli_real_connect($conn, 'thatchon.mysql.database.azure.com', 'btkeiei1@thatchon', 'THEMARI01z', 'itflab', 3306);
  if (mysqli_connect_errno($conn)) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
  }

  $id = $_GET['ID'];

  $query = "SELECT * FROM guestbook WHERE id = '$id' ";
  $res = mysqli_query($conn, "SELECT * FROM guestbook WHERE ID='$id'");
  $row = mysqli_fetch_array($res)
  ?>

  <div class="container">
    <h2>Edit Form</h2>
    <form action="update.php?ID=<?php echo $row['ID']; ?>" method="post" id="CommentForm">
      <label for="Username">Username :</label>
      <input type="text" class="form-control" name="Name" id="idName" value="<?php echo "$row[Name]"; ?>" <br>
      <label for="Username">Comment :</label>
      <input type="text" class="form-control" name="Comment" id="idComment" value="<?php echo "$row[Comment]"; ?>" <br>
      <label for="Username">Link :</label>
      <input type="text" class="form-control" name="Link" id="idLink" value="<?php echo "$row[Link]"; ?>"> <br><br>
      <input type="submit" id="commentBtn" class="btn btn-outline-warning">
  </div>
  </form>

</html>
