<?php 
    session_start();
    $title = $_POST['title'];
    $context = $_POST['context'];
    $context = str_replace("\r\n","<br/>",$context);

    $author = $_SESSION['userName'];
    date_default_timezone_set('Asia/Seoul');
    $date = date('Y년m월d일');

    include "../common/db_connect.php";

    $sql = "insert into kyobo(title,context,author,date) values('$title','$context','$author','$date')";
    mysqli_query($conn,$sql);

    echo "<script>
                alert('게시글 등록 완료');
                location.href='board.php';
         </script>"
?>