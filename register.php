<?php include "layouts/header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    h2 {
      color: black;
    }

    label {
      color: black;
    }

    .container {
      margin-top: 5%;
      width: 50%;
      background-color: #ECECEC;
      padding-top: 2%;
      padding-bottom: 2%;
      border-radius: 19px;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 100px 0 rgba(0, 0, 0, 0.24);
    }

    .btn-primary {
      background-color: #0033FF;
      padding-right: 26%;
      padding-left: 26%;
    }
  </style>
</head>

<body>
  <div class="container">

    <center>
      <h2>สมัครสมาชิก</h2>
    </center></br>
    <form class="form-horizontal" method="post" action="add_user.php">
      <div class="form-group">
        <label class="control-label col-sm-2 col-sm-offset-2" for="name">Username:</label>

        <div class="col-sm-5">
          <input type="text" class="form-control" id="name" placeholder="ชื่อบัญชีผู้ใช้" name="name" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2 col-sm-offset-2" for="email">Email:</label>

        <div class="col-sm-5">
          <input type="email" class="form-control" id="email" placeholder="อีเมล" name="email" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2 col-sm-offset-2" for="pwd" md5>Password:</label>
        <div class="col-sm-5">
          <input type="password" class="form-control" id="pwd" placeholder="รหัสผ่าน" name="password" required>
        </div>
      </div>


      <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
          <button type="submit" class="btn btn-primary">ยืนยัน</button>
        </div>
      </div>
    </form>
  </div>
</body>

</html>
