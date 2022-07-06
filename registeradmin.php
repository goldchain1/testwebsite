<?php 
    include_once('functions.php'); 
    
    $userdata = new DB_con();

    if (isset($_POST['submit'])) {
        $fname = $_POST['fullname'];
        $uemail = $_POST['email'];
        $uname = $_POST['username'];
        $password = $_POST['password'];

        $sql = $userdata->registration($fname, $uemail, $uname, $password);

        if ($sql) {
            echo "<script>alert('ลงทะเบียน สำเร็จ');</script>";
            echo "<script>window.location.href='indexadmin.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again.');</script>";
            echo "<script>window.location.href='loginadmin.php'</script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
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
            <h2>สมัครสมาชิก</h2>
            <hr>
            <div class="mb-3">
                <label for="fullname" class="form-label"></label>
                <input type="text" class="form-control" id="username" name="fullname" placeholder="ชื่อ-นามสกุล">
            </div>
            <div class="mb-3">
            <label for="email" class="form-label"></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="อีเมล" onblur="checkuemail(this.value)">
                <span id="emailavailable"></span>
            </div>

            <div class="mb-3">
                <label for="username" class="form-label"></label>
                <input type="text" class="form-control" id="username" name="username" placeholder="ชื่อบัญชีผู้ใช้" >
                
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"></label>
                <input type="password" class="form-control" id="password" name="password" placeholder="รหัสผ่าน">
            </div>
            <button type="submit" name="submit" id="submit" class="btn btn-success">ยืนยัน</button><br><br>
            <h7>มีบัญชีอยู่แล้ว กดเข้าสู่ระบบ</h7><br>
            <a href="loginadmin.php" class="buttonn">เข้าสู่ระบบ</a>
        </form>
</form>
</div>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        function checkuemail(val) {
            $.ajax({
                type: 'POST',
                url: 'checkuser_available.php',
                data: 'email='+val,
                success: function(data) {
                    $('#emailavailable').html(data);
                }
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>