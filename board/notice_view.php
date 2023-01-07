<?php
    session_start();

    $number = $_GET['num'];
    
    include "../common/db_connect.php";
    
    $sql = "select * from kyobo where num=$number";
    $result = mysqli_query($conn,$sql);
    
    $row = mysqli_fetch_array($result);

    if(isset($_POST['context'])){
        $reply = $_POST['context'];
        $author = $_SESSION['userName'];
        date_default_timezone_set('Asia/Seoul');
        $reply_date = date('Y년m월d일 H:i');
        
        $reply_sql = "insert into reply(pageid,context,author,date) values($number,'$reply','$author','$reply_date')";
        mysqli_query($conn,$reply_sql);
    }
?>
    <?php 
        $title = "나의 글";
        include "../common/header.php"; ?>
    <div id="n_view">
        <h2>나의 글</h2>
        <span>게시글 제목</span><div class="title"><?php echo $row['title'];?></div>
        <span>게시글 내용</span><div class="context"><?php echo $row['context'];?></div>
        <div class="fl">
            <span>작성자</span><div class="author"><?php echo $row['author'];?></div>
            <span>작성일자</span><div class="date"><?php echo $row['date'];?></div> 
        </div>    
        <div class="btnset">
            <?php if($_SESSION['userName'] == $row['author']){ ?>
            <a href="modify_view.php?num=<?php echo $number;?>">수정</a>
            <a href="db_delete.php?num=<?php echo $number;?>">삭제</a>
            <?php } ?>
        </div>
    </div>
    <div class="reply_view">
        <h3 class="reply_title">댓글</h3>
        <?php
            $reply_search = "select * from reply where pageid=$number";
            $reply_result = mysqli_query($conn,$reply_search);
            for($i = 0; $reply_row = mysqli_fetch_array($reply_result); $i++){
        ?>
            <div class="reply_list">
                <h2><?php echo $reply_row['author']; ?><span>님</span></h2>
                <p class="context_mt"><?php echo $reply_row['context'];?></p>
                <p class="date_inline"><?php echo $reply_row['date'] ?></p>

                <?php if($_SESSION['userName'] == $reply_row['author']){ ?>
                    <a class="reply_update" href="#">수정</a>
                    <a class="reply_delete" href="reply_delete.php?no=<?php echo $reply_row['no']; ?>&num=<?php echo $number; ?>" method="post">삭제</a>
                    <form action="reply_update.php?no=<?php echo $reply_row['no']; ?>&num=<?php echo $number; ?>" method="post">
                        <textarea class="upd_text" style="display:none;" name="context"><?php echo $reply_row['context']; ?></textarea>
                        <button class="upd_btn" style="display:none;" type="submit">등록</button>
                        <a class="closeout" href="#" style="display:none;"><i class="fas fa-times"></i></a>
                    </form>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
    <div class="reply_write">
    <form action="notice_view.php?num=<?php echo $number; ?>" method="post">
        <textarea name="context" placeholder="댓글을 입력해주세요..."></textarea>
        <button type="submit">등록</button>
    </form>
    </div>
    <?php 
        $reply = "reply";
        include "../common/footer.php"; ?>
</body>
</html>