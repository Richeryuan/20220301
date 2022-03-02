<?php
require_once("dbconnect.php");
$id=$_GET["id"];

$sql="SELECT * FROM users WHERE id=$id AND valid=1";
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
      <div class="container">
          <div class="py-2">
          <a href="user-list.php" class="btn btn-info">使用者列表</a>
          </div>
          <form action="doUpdate.php" method="post">
            <input type="hidden" name="id" value="<?=$row["id"]?>">
          <table class="table table-bordered">
              <tr>
                <td>id</td>
                <td><?=$row["id"]?></td>
              </tr>
              <tr>
                <td>account</td>
                <td><input type="text" class="form-control" value="<?=$row["account"]?>" name="account"></td>
              </tr>
              <tr>
                <td>gender</td>
                <td>
                <select name="gender" id="" class="form-select">
                      <option value="">Select Gender</option>
                      <option value="male"
                      <?php
                        if($row["gender"]==="male")echo "selected";
                      ?>
                      >Male</option>
                      <option value="female"
                      <?php
                        if($row["gender"]==="female")echo "selected";
                      ?>
                      >Female</option>
                  </select>
              </tr>
              <tr>
                <td>phones</td>
                <td>
                <?php
                    $phoneArr=explode(",", $row["phones"]);
                    // var_dump($phoneArr);
                  ?>
                <div class="row">
                  
                  <div class="col">
                  <input type="text" class="form-control" name="phones[]" 
                  value="<?php if(isset($phoneArr[0]))echo $phoneArr[0]; ?>"
                  >
                  </div>
                  <div class="col">
                  <input type="text" class="form-control" 
                  value="<?php if(isset($phoneArr[1]))echo $phoneArr[1]; ?>"
                  name="phones[]">
                  </div>
                  <div class="col">
                  <input type="text" class="form-control" 
                  value="<?php if(isset($phoneArr[2]))echo $phoneArr[2]; ?>"
                  name="phones[]">
                  </div>
                </div>  
              
              </td>
              </tr>
              <tr>
                <td>create time</td>
                <td><?=$row["create_time"]?></td>
              </tr>
          </table>
        <div class="py-2">
          <div class="d-flex justify-content-between">
            <div>
              <button class="btn btn-info" type="submit">儲存</button>
            </div>
            
            <div>
            <a href="user.php?id=<?=$row["id"]?>" class="btn btn-danger">刪除</a>
            <a href="user.php?id=<?=$row["id"]?>" class="btn btn-info">取消</a>
            </div>
          </div>
            </form>

          </div>
      </div>        
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>  