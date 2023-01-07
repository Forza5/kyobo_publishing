<?php
    $userid = $_POST['userId'];
    $userpass = $_POST['userPass'];
    $username = $_POST['userName'];
    $userphone = $_POST['userPhone'];


    include "common/db_connect.php";
    $sql = "INSERT INTO users(userid,userpass,username,userphone) VALUE ('$userid','$userpass','$username','$userphone')";
    mysqli_query($conn,$sql);

    echo "<script>
            alert('회원가입이 완료되었습니다');
            location.href = '../login/login.php';
         </script>";
?>