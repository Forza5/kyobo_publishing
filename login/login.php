<?php 
    $title = "로그인";
    include "../common/header.php"; ?>    
<div class="login_box">
    <form action="db_login.php" method="post">
        <div class="logo"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/index.php'; ?>"><img src="../img/kyobo_logo.png"></a></div>
        <div class="id_box">
            <label for="log_id">아이디</label>
            <input type="text" id="log_id" name="log_id" placeholder="아이디를 입력해주세요">
        </div>
        <div class="pass_box">
            <label for="log_pass">비밀번호</label>
            <input type="password" id="log_pass" name="log_pass" placeholder="비밀번호를 입력해주세요">
        </div> 
        <button type="submit">로그인</button>
        <a class="join" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/join/join.php'; ?>">회원가입</a>
    </form>
</div>
<?php include "../common/footer.php"; ?>