<?php 
	session_start();
	if(isset($_SESSION['name']))
	{
		include "layouts/header2.php"; 
		include "config.php"; 
		
		$sql="SELECT * FROM `chat`";

		$query = mysqli_query($conn,$sql);
?>
<style>
  h2{
color:white;
  }
  label{
color:white;
  }
  span{
	  color:#ffff;
	  font-weight:bold;
  }
  .container {
    margin-top: 3%;
    width: 60%;
    background-color: #26262b9e;
    padding-right:10%;
    padding-left:10%;
	border-radius: 19px;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 100px 0 rgba(0, 0, 0, 0.24);
  }
  .btn-primary {
    background-color: #673AB7;
	}
	.display-chat{
		height:300px;
		background-color:#d69de0;
		margin-bottom:4%;
		overflow:auto;
		padding:15px;
	}
	.message{
		background-color: #c616e469;
		color: white;
		border-radius: 5px;
		padding: 5px;
		margin-bottom: 3%;
	}
  </style>

<div class="container">
  <center><h2>ยินดีต้อนรับ <span style="color:#dd7ff3;"><?php echo $_SESSION['name']; ?> </span></h2>
  <br><br>
	<label>คลิกที่ปุ่ม Open เพื่อเริ่มแชท</label><br>
	<br><br>
	<a href="chatpage.php" class="btn btn-primary">Open</a>
  
</div>

</body>
</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
?>