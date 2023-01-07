<?php
    $number = $_GET['num'];

    include "../common/db_connect.php";

    $sql = "select * from kyobo where num=$number";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    $chg_str = $row['context'];
    $chg_str = str_replace("<br/>","\r\n",$chg_str);
?>
    <?php 
        $title = "게시글 수정";    
        include "../common/header.php";?>

    <form id="update" action="db_update.php?num=<?php echo $number;?>" method="post">
    <h2>게시글 수정</h2>
        <div>
            <label for="title">게시글 제목</label>
            <input type="text" id="title" name="title" value="<?php echo $row['title'];?>">
        </div>    
        <div>
            <label for="context">게시글 내용</label>
            <textarea id="context" name="context"><?php echo $chg_str;?></textarea>
        </div>    
        <button type="submit">등록</button>
        <a href="board.php">처음으로</a>
    </form>

    <?php include "../common/footer.php";?>

</body>
</html>