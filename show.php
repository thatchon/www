<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ITF Lab</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
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
  $res = mysqli_query($conn, 'SELECT * FROM guestbook');
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-striped table-bordered table-hover">
          <thead class="table-primary">
            <tr>
              <th width="100">
                <div align="center">Name</div>
              </th>
              <th width="350">
                <div align="center">Comment </div>
              </th>
              <th width="350">
                <div align="center">Link </div>
              </th>
              <th width="150">
                <div align="center">Action </div>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($Result = mysqli_fetch_array($res)) {
            ?>
              <tr>
                <td><?php echo $Result['Name']; ?></td>
                <td><?php echo $Result['Comment']; ?></td>
                <td><?php echo $Result['Link']; ?></td>
                <td><a href="edit.php?ID=<?php echo $Result['ID'] ?>" class="btn btn-warning" onclick="return confirm('ยืนยันการแก้ไขข้อมูล?')">แก้ไข</a>
                    <a href="delete.php?ID=<?php echo $Result['ID'] ?>" class="btn btn-danger" onclick="return confirm('ยืนยันการลบข้อมูล?')">ลบ</a>
                    </tr>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
        <button type="button" class="btn btn-primary" onclick="window.location.href='form.html'">เพิ่มข้อมูล</button>
      </div>
    </div>
  </div>
  <?php
  mysqli_close($conn);
  ?>
</body>

</html>
