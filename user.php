<?php
require_once("dbconnect.php");
$id=$_GET["id"];
$sql="SELECT * FROM users WHERE id=$id";
$result = $conn->query($sql);
$row_count=$result->num_rows;
$row=$result->fetch_assoc();

?>
<!doctype html>
<html lang="en">
  <head>
    <title>User</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
  <div class="py-2">
              <a href="user-list.php" class="btn btn-info">使用者列表</a>
          </div>
      <div class="container">
          <table class="table table-bordered">
              <tr>
                <td>id</td>
                <td><?=$row["id"]?></td>
              </tr>
              <tr>
                <td>account</td>
                <td><?=$row["account"]?></td>
              </tr>
              <tr>
                <td>gender</td>
                <td><?=$row["gender"]?></td>
              </tr>
              <tr>
                <td>phones</td>
                <td><?=$row["phones"]?></td>
              </tr>
              <tr>
                <td>intro</td>
                <td><?=$row["intro"]?></td>
              </tr>
              <tr>
                <td>create time</td>
                <td><?=$row["create_time"]?></td>
              </tr>
              <div class="py-3">
              <a href="user-edit.php?id=<?=$row["id"]?>" class="btn btn-info">修改資料</a>
          </div>
          </table>
      </div>        
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>     