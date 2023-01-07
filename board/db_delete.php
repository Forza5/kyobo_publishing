<?php
    $number = $_GET['num'];

    include "../common/db_connect.php";

    $sql = "delete from kyobo where num=$number";
    mysqli_query($conn,$sql);

    echo "<script>
            alert('해당 목록이 삭제되었습니다.');
            location.href='board.php';
         </script>";
?>