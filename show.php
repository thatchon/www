<html>

<head>
    <title>ITF Lab</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    <br>
    <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-striped table-bordered table-hover">
          <caption>
            <a href="form.html" class="btn btn-primary"> เพิ่ม </a>
          </caption>
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
            <?php
            while ($Result = mysqli_fetch_array($res)) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $Result['Name']; ?></td>
                        <td><?php echo $Result['Comment']; ?></td>
                        <td><?php echo $Result['Link']; ?></td>
                        <td>
                            <a href="delete.php?id=<?php echo $Result['ID']; ?>" onclick="return confirm('ยืนยันการลบข้อมูล');" class="btn btn-danger">ลบ</a>
                            <a href="edit.php?id=<?php echo $Result['ID']; ?>" class="btn btn-warning">แก้ไข</a>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>
        <?php
        mysqli_close($conn);
        ?>
</body>

</html>
