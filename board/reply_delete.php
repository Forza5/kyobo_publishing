<?php
    $no = $_GET['no'];
    $number = $_GET['num'];

    include "../common/db_connect.php";
    $sql = "delete from reply where no=$no";
    mysqli_query($conn,$sql);

    echo "<script>
            location.href = 'notice_view.php?num={$number}';
        </script>"
?>