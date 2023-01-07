<?php 
    $title = "회사소개";
    include "../common/header.php";
?>
<div class="com_wrap">
    <div class="com_intro">
        <div class="com_bg"></div>
        <div class="com_text"></div>
    </div>
</div>
<div class="vision_wrap">
    <h2 class="vision_title">교보문고인의 핵심가치</h2>
    <div class="vision_top">
        <ul class="vision_fl">
            <li>
                <div class="vision_bg vision01">
                    <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/img/vision_01.gif'; ?>">
                    <h2>도전과 창의</h2>
                    <div class="vision_text">
                        우리는 새롭게 시도하고<br>
                        실패해도 다시 도전한다
                    </div>
                </div>
            </li>
            <li>
                <div class="vision_bg vision02">
                    <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/img/vision_02.gif'; ?>">
                    <h2>고객중심</h2>
                    <div class="vision_text">
                        우리는 고객관점에서<br>
                        생각하고 행동한다
                    </div>
                </div>
            </li>
            <li>
                <div class="vision_bg vision03">
                    <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/img/vision_03.gif'; ?>">
                    <h2>정직과 성실</h2>
                    <div class="vision_text">
                        우리는 정직, 성실한 자세로<br>
                        성과 책임을 다한다
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<?php 
    $company_intro = "company_intro";
    include "../common/footer.php";
?>