<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>ITF Lab</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'thatchon.mysql.database.azure.com', 'btkeiei1@thatchon', 'THEMARI01z', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th width="100"> <div align="center">Name</div></th>
            <th width="350"> <div align="center">Comment </div></th>
            <th width="150"> <div align="center">Action </div></th>
            <th width="150"> <div align="center">ลบ </div></th>
            <th width="150"> <div align="center">แก้ไข </div></th>
          </tr>
        </thead>
        <tbody>
        
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo $Result['Link'];?></td>
    <td>
      <a href="delete.php?id=<?php echo $Result['id'];?>" >ลบ</a>
  </tr>
<?php
}
?>
<?php
mysqli_close($conn);
?>
</body>
</html>
