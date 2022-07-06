<?php 
    session_start();
    include_once('functions.php'); 
    
    $userdata = new DB_con();

    if (isset($_POST['login'])) {
        $uname = $_POST['username'];
        $password = $_POST['password'];

        $result = $userdata->signin($uname, $password);
        $num = mysqli_fetch_array($result);

        if ($num > 0) {
            $_SESSION['id'] = $num['id'];
            $_SESSION['uname'] = $num['username'];
            echo "<script>alert('เข้าสู่ระบบสำเร็จ!');</script>";
            echo "<script>window.location.href='indexadmin.php'</script>";
        } else {
            echo "<script>alert('เข้าสู่ระบบไม่สำเร็จ โปรดลองอีกครั้ง.');</script>";
            echo "<script>window.location.href='loginadmin.php'</script>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="css/s1.css">
</head>
<body>
<a href="page.php" <button  class="btnn fourth">หน้าแรก </button></a> 

</body>
<body>
    

 
        <form method="post">
        <div class="form">
  
  <form class="login-form">
  <hr>
 <h2>เข้าสู่ระบบ</h2>
 <hr>
            <div class="mb-3">
                <label for="username" class="form-label"></label>
                <input type="text" class="form-control" id="username" name="username" placeholder="ชื่อบัญชีผู้ใช้">
                <span id="usernameavailable"></span>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"></label>
                <input type="password" class="form-control" id="password" name="password" placeholder="รหัสผ่าน">
            </div>
            <button type="submit" name="login" class="btn btn-success">เข้าสู่ระบบ</button><br><br>
            <h6>ยังไม่มีบัญชี กดสมัครสมาชิก</h6>
            <a href="registeradmin.php" class="button">สมัครสมาชิก</a>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>