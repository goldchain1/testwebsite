<?php 

    define('DB_SERVER', 'localhost'); // Your hostname
    define('DB_USER', 'it6111428008'); // Database Username
    define('DB_PASS', 'it008'); // Database Password
    define('DB_NAME', 'chain'); // Database Name

    class DB_con {
        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
        }

        public function emailavailable($uemail) {
            $checkemail = mysqli_query($this->dbcon, "SELECT email FROM admininfo WHERE email = '$uemail'");
            return $checkemail;
        }

        public function registration($fname, $uemail, $uname,  $password) {
            $reg = mysqli_query($this->dbcon, "INSERT INTO admininfo(adminname, email, username,  password) VALUES('$fname', '$uemail', '$uname',  '$password')");
            return $reg;
        }

        public function signin($uname, $password) {
            $signinquery = mysqli_query($this->dbcon, "SELECT id, username FROM admininfo WHERE username = '$uname' AND password = '$password'");
            return $signinquery;
        }
    }

?>