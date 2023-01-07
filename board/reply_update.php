<?php
    $no = $_GET['no'];
    $number = $_GET['num'];

    $context = $_POST['context'];
    $context = str_replace("\r\n","<br/>",$context);

    include "../common/db_connect.php";
    $sql = "update reply set context='$context' where no=$no";
    mysqli_query($conn,$sql);

    echo "<script>
            location.href = 'notice_view.php?num={$number}';
        </script>";
?>