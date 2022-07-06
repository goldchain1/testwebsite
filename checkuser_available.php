<?php 

    include_once('functions.php');

    $emailcheck = new DB_con();

    // Getting post value
    $uemail = $_POST['email'];

    $sql = $emailcheck->emailavailable($uemail);

    $num = mysqli_num_rows($sql);

    if ($num > 0) {
        echo "<span style='color: red;'>อีเมลซ้ำ ไม่สามารถใช้งานได้.</span>";
        echo "<script>$('#submit').prop('disabled', true);</script>";
    } else {
        echo "<span style='color: green;'>อีเมลไม่ซ้ำ สามารถใช้งานได้.</span>";
        echo "<script>$('#submit').prop('disabled', false);</script>";
    }

?>