<!DOCTYPE html>
<html lang="en" class="lang="en"">
<head>
  <meta charset="UTF-8">
  <title>PortfolioChain</title>
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel="stylesheet" href="css/styleindex.css">

</head>
<body>

<body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
          <li id="nav-about"><a href="index.php">หน้าแรก</a></li>
            <li id="nav-about"><a href="#about">เกี่ยวกับ</a></li>
            <li id="nav-portfolio"><a href="#portfolio">ผลงาน</a></li>
            <li id="nav-contact"><a href="#contact">ติดต่อ</a></li>
          </ul>
        </div>
      </div>
    </nav>

 
    <div class="container-fluid">
      
      <div class="row cover top">
        <div class="col-xs-12">
          <div class="row">
            <div class="col-xs-12 headline">
              <h1 class="text-center">Hello My name is Kiadtisak Limsakun</h1>
              <h3 class="text-center">รหัสนักศึกษา: 6111428008</h3>
              <h3 class="text-center">สาขา: เทคโนโลยีสารสนเทศ</h3>
              <h3 class="text-center">คณะ: วิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏนครศรีธรรมราช</h3>
              <p class="lead text-center">Test website ติดต่อกับฐานข้อมูล คลิกที่แถบ ผลงาน</p>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 center-block text-center">
              <a href="#about"><span id="scrollIcon" class="front-glyph glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
            </div>
          </div>
        </div>
      </div>
      
      
      <div id="about" class="row cover">
        <h2 class="text-center">เกี่ยวกับฉัน</h2>
        <div class="row">
          <div class="col-md-6 text-center about-info">
            <img class="img-circle text-center profile-img" src="images/08.jpg">
            <p class="text-center">
              นาย เกียรติศักดิ์ ลิ่มสกุล <br>รหัสนักศึกษา 6111428008<br> 
              สาขาเทคโนโลยีสารสนเทศ <br>
              คณะวิทยาศาสตร์และเทคโนโลยี <br>
              มหาวิทยาลัยราชภัฏนครศร๊ธรรมราช
            </p>
          </div>
          <div class="col-md-6 about-tools">
            <p class="text-center">สิ่งที่สนใจ</p>
              <div class="col-xs-6">
                <ul>
                  <li>HTML5</li>
                  <li>CSS3</li>
                  <li>Javascript</li>
                  <li>PHP</li>
                  <li>python</li>
                </ul>
              </div>
              <div class="col-xs-6">
                <ul>
                  <li>Git</li>
                  <li>Framework</li>
                </ul>
              </div>
            
          </div>
          </div>
        </div> 
      </div><!-- End #About -->

      <div id="portfolio" class="row cover">
        <h2 class="text-center">ผลงาน</h2>
        <div class="container">
          <div class="row portfolio-projects"> <!-- Two project row-->
            <div class="col-lg-6"> <!--1st side project -->
              <div class="row"> 
                <div class="col-sm-5 text-center">
                  <h4 class="portfolio-projects--title">ระบบแชท อย่างง่าย</h4>
                  <p class="portfolio-projects--desc">ตัวอย่างระบบแชท ติดต่อกับฐานข้อมูล</p>
                  <p class="portfolio-projects--desc">ภาษาที่ใช้: PHP, MySQL, Bootstrap</p>
                  <a class="btn btn-rounded portfolio-projects--btn" href="page.php" role="button">ดูโปรเจ็ค</a>
                </div>
                <div class="col-sm-7 text-center">
                  <img class="portfolio-projects--image" src="images/i1.png">
                </div>
              </div>
            </div>
            

        </div>
        </div>
      </div><!-- End #Portfolio -->

      <div id="contact" class="row cover bottom">
        <h2 class="text-center contact-header">ติดต่อ</h2>
        <p class="text-center contact-email">อีเมลหลัก <span class="	glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;&nbsp;   chain.kts@gmail.com</p>
        <p class="text-center contact-email">อีเมลมหาวิทยาลัย <span class="	glyphicon glyphicon-hand-right"></span>&nbsp; 6111428008@nstru.ac.th</p>
        <div class="text-center contact-social-icons">
          <ul class="centered">
            <a href="https://www.facebook.com/chainkiadtisak/"><li><i class="fa fa-facebook"></i> Facebook</li></a>
            <a href="#contact"><li><i class="fa fa-phone"></i> 062-065-9634</li></a>

          </ul>
        </p>     
      </div>
    </div>
    <footer class="footer">
      <div class="container">
      </div>
    </footer>

  </body>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>
<script src='https://cdn.jsdelivr.net/jquery.scrollto/2.1.0/jquery.scrollTo.min.js'>
</script>

</body>
</html>
