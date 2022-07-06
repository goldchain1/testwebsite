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
	  color:#673ab7;
	  font-weight:bold;
  }
  .container {
    margin-top: 3%;
    width: 60%;
    background-color: #26262b9e;
    padding-right:10%;
    padding-left:10%;
	border-radius: 15px;
  }
  .btn-primary {
    background-color: #FFD700;
	color:#000000;
	padding-right:41%;
    padding-left:41%;
	}
	.display-chat{
		height:300px;
		background-color:#A4B4DC;
		border-radius: 10px;
		margin-bottom:4%;
		overflow:auto;
		padding:15px;
	}
	.message{
		background-color: #00FA9A;
		color: black;
		border-radius: 19px;
		padding: 5px;
		margin-bottom: 3%;
	}
  </style>

<div class="container">
  <center><h2>ยินดีต้อนรับ <span style="color:#dd7ff3;"><?php echo $_SESSION['name']; ?> </span></h2>
	<label>เข้าร่วมแชท</label>
  </center></br>
  <div class="display-chat">
<?php
	if(mysqli_num_rows($query)>0)
	{
		while($row= mysqli_fetch_assoc($query))	
		{
?>
		<div class="message">
			<p>
				<span><?php echo $row['username']; ?> :</span>
				<?php echo $row['message']; ?>
			</p>
		</div>
<?php
		}
	}
	else
	{
?>
<div class="message">
			<p>
				ไม่มีข้อความก่อนหน้า
			</p>
</div>
<?php
	} 
?>

  </div>
  <form class="form-horizontal" method="post" action="sendMessage.php">
    <div class="form-group">
      <div class="col-sm-10">          
        <textarea name="msg" class="form-control" placeholder="พิมพ์ข้อความ..."></textarea>
      </div>
	         
      <div class="col-sm-2">
        <button type="submit" class="btn btn-primary">ส่ง</button>
      </div>

    </div>
  </form>
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