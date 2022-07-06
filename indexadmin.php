<?php 

    session_start();

    if ($_SESSION['id'] == "") {
        header("location: loginadmin.php");
    } else {
?>
<style>
  .main {
    margin-top: 1%;
    width: 50%;
    background-color: #ECECEC;
    padding-top:4%;
    padding-bottom:5%;
    padding-right:10%;
    padding-left:10%;
    border-radius: 19px;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 100px 0 rgba(0, 0, 0, 0.24);
  }
  </style>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>pageadmin</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel="stylesheet" href="css/styleadmin.css">

</head>
<body>
<!-- partial:index.partial.html -->
<body class="hero-anime">	
	<div class="navigation-wrap bg-light start-header start-style">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">
					
          <a class="nav-link" href="indexadmin.php">Home</a>	
          <div class="profile-menu">
                    
                </div>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
						</button>
            <p>บัญชีผู้ใช้ <?php echo $_SESSION['uname']; ?> <a href="#26"><span class="entypo-down-open scnd-font-color"></span></a></p>

</body>

<div class="sidenav">
  <a href="indexadmin.php">หน้าหลัก</a>
  <a href="user_info.php">ข้อมูลผู้ใช้</a>
<br><br>
  <a href="logoutadmin.php">ออกจากระบบ</a>
</div>
<div class="main">
  <center><h2>ระบบแอดมิน</h2>
  <p>จัดทำโดย</p>
  <p>นาย เกียรติศักดิ์ ลิ่มสกุล  รหัสนักศึกษา 6111428008 สาขา เทคโนโลยีสารสนเทศ</p>


</div>             
</body>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script><script  src="./script.js"></script>

</body>
</html>

<?php 

}
?>