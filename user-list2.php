<?php
require_once("dbconnect.php");
$sql="SELECT * FROM users";
$result = $conn->query($sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>User List</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <?php 
        // $datas=$result->fetch_all(MYSQLI_ASSOC);
        // var_dump($datas);
      ?>
      <div class="container">
          <div class="py-2">
              <a href="create-user.php" class="btn btn-info">新增使用者</a>
          </div>
          <?php

            $data=$result->fetch_all(MYSQLI_ASSOC);
            // var_dump($data);

          ?>
          <table class="table table-bordered">
              <thead>
                  <tr>
                      <th>id</th>
                      <th>account</th>
                      <th>gender</th>
                      <th>phones</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                  if ($result->num_rows > 0):
                    foreach($data as $row):
                      ?>
                  <tr>
                      <td><?=$row["id"]?></td>
                      <td><?=$row["account"]?></td>
                      <td><?=$row["gender"]?></td>
                      <td><?=$row["phones"]?></td>
                  </tr>
                  <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">沒有資料</td>
                    </tr>
                <?php endif; ?>
              </tbody>
          </table>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>