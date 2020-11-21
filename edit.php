<!DOCTYPE html>
<html>
<head>
  <title>Edit Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
    <body>
    <?php
    $id=$_GET['ID'];
    $conn = mysqli_init();
    mysqli_real_connect($conn, 'thatchon.mysql.database.azure.com', 'btkeiei1@thatchon', 'THEMARI01z', 'itflab', 3306);
    $res = mysqli_query($conn, "SELECT * FROM guestbook WHERE ID='$id'");
    $row = mysqli_fetch_array($res)
    ?>
    <div class="container">
    <h2>Edit Form</h2>
    <form action = "update.php?ID=<?php echo $row['ID']; ?>" method = "post" id="CommentForm">
        <i class="fas fa-user input-prefix"></i>
        <label for="Username">Username :</label>
          <input type="text" class="form-control" name = "Name" id="idName" value="<?php echo "$row[Name]"; ?>" <br>
        <i class="fas fa-user input-prefix"></i>
        <label for="Username">Comment :</label>
          <input type="text" class="form-control" name = "Comment" id="idComment" value="<?php echo "$row[Comment]"; ?>" <br>
        <i class="fas fa-user input-prefix"></i>
        <label for="Username">Link :</label>
          <input type="text" class="form-control" name = "Link" id="idLink" value="<?php echo "$row[Link]"; ?>"> <br><br>
          <input type="submit" id="commentBtn"class="btn btn-outline-warning">
    </div>
      </form>
</body>
