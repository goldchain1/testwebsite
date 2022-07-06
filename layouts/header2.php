<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Testchat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>
    body{
        background-repeat: repeat-y;
        width:100%;
    }
    .navbar-inverse {
      background-color: #ECECEC;
    }
    .navbar-inverse .navbar-brand {
        color: black;
    }
    a:hover{
        color: red;
    }
    .navbar-inverse .navbar-nav>li>a {
        color: black;
    }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">Testchat</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> ออกจากระบบ</a></li>
      </ul>
    </div>
  </div>
</nav>
  