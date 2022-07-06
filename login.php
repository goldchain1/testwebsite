<?php include "layouts/header.php"; ?>
<style>
  h2{
color:black;
  }
  label{
color:black;
  }
  .container {
    margin-top: 5%;
    width: 50%;
    background-color: #ECECEC;
    padding-top:5%;
    padding-bottom:5%;
    padding-right:10%;
    padding-left:10%;
    border-radius: 19px;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 100px 0 rgba(0, 0, 0, 0.24);
  }
  .btn-success {
    background-color: #006600;
    padding-right:41%;
    padding-left:41%;
}
  </style>
<?php
  include "config.php";
  if($_POST)
	{
		$name = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM `register` where username = '".$name."' and password = '".$password."' ";
		$query =  mysqli_query($conn, $sql);
		if(mysqli_num_rows($query)>0)
		{
			$row = mysqli_fetch_assoc($query);
			session_start();
			$_SESSION['name'] = $row['username'];
			header('Location: home.php');
		}
		else
		{
			echo "<script> alert('Username หรือ Password ไม่ถูกต้อง'); </script>";
		}
	}
?>

<div class="container">
  <center><h2>เข้าสู่ระบบ</h2></center></br>
  <form class="form-horizontal" method="post" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="username" placeholder="ชื่อบัญชีผู้ใช้" name="username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="รหัสผ่าน" name="password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">เข้าสู่ระบบ</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
