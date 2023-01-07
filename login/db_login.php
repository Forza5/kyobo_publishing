<?php
    session_start();

    $id = $_POST['log_id'];
    $pw = $_POST['log_pass'];

    include "../common/db_connect.php";

    $sql = "SELECT * FROM users WHERE userid='$id' AND userpass='$pw'";
    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($result); 

    if(isset($row)){
        $_SESSION['userId'] = $row['userid'];
        $_SESSION['userName'] = $row['username'];

        echo "<script>
                alert('로그인 되었습니다');
                location.href = '../index.php';
              </script>";
    }
    else{

        echo "<script>
                alert('아이디와 비밀번호를 확인해주세요');
                location.href = 'login.php';
              </script>";
    }
?>