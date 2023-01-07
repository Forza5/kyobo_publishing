    <?php 
        $title = "글쓰기";
        include "../common/header.php";?>
    
    <form id="insert" action="db_insert.php" method="post">
        <h2>글쓰기</h2>
        <div>
            <label for="title">게시글 제목</label>
            <input type="text" id="title" name="title">
        </div>    
        <div>
            <label for="context">게시글 내용</label>
            <textarea id="context" name="context" placeholder="300자 이내로 작성 부탁드립니다"></textarea>
        </div>    
        <button type="submit">등록</button>
        <a href="board.php">처음으로</a>
    </form>
    <?php include "../common/footer.php";?>
