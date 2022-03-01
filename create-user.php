<!doctype html>
<html lang="en">
  <head>
    <title>create-user</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
      <div class="py-2">
              <a href="user-list.php" class="btn btn-info">使用者表單</a>
          </div>
          <form action="doCreate.php" class="mt-3" method="post">
              <h2>新增使用者</h2>
              <div class="mb-3">
                  <label>account</label>
                  <input type="text" 
                  name="account"
                  class="form-control"
                  required
                  >
              </div>
              <div class="mb-3">
                  <label>password</label>
                  <input type="password" 
                  name="password"
                  class="form-control"
                  required
                  >
              </div>
              <div class="mb-3">
                  <label for="">gender</label>
                  <select name="gender" id="" class="form-select">
                      <option value="">Select Gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                  </select>
              </div>
              <div class="mb-3">
              <label>phones</label>
                  <div class="row">
                      <div class="col">
                          <input type="text" class="form-control" name="phones[]">
                      </div>
                      <div class="col">
                          <input type="text" class="form-control" name="phones[]">
                      </div>
                      <div class="col">
                          <input type="text" class="form-control" name="phones[]">
                      </div>
                  </div>
              </div>
              <button class="btn btn-info" type="submit">送出</button>
          </form>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>