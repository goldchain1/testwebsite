<?php 

    session_start();

    if ($_SESSION['id'] == "") {
        header("location: loginadmin.php");
    } else {
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>pageadmin</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="css/style1.css">
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
  <a href=""></a><br><br>
  <a href="logoutadmin.php">ออกจากระบบ</a>
</div>



    <div class="main">
    <table class="rwd-table">
    <?php
      include 'config.php';

      $sql = "SELECT id, username, email,password FROM register";
      $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>   
    <tr>
    <th width="1%">id</th>
    <th width="3%">username</th>
    <th width="4%">อีเมล</th>
    <th width="3%">password</th>

  

  </tr>
  <tbody>
  <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
  <?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($conn);
  ?>
</table>
</body>
</html>

<?php 

}
?>

