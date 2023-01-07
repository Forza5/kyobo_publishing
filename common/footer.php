    </div>
    <div id="footer">
        <div class="f-top">
            <div class="center">
                <div class="ft-all">
                    <ul class="f-gnb">
                        <li><a href="#">회사소개</a></li>
                        <li><a href="#">이용약관</a></li>
                        <li><a href="#">개인정보 처리방침</a></li>
                        <li><a href="#">고객센터</a></li>
                    </ul>
                    <div class="ft-left">
                        <ul class="f-sns">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                        <div class="family_all">
                            <div class="family_list">
                                FAMILY SITE
                                <span class="drop_arrow"><i class="xi-caret-down"></i></span>
                            </div>
                            <div class="fl_droplist">
                                <ul>
                                    <li><a href="#">교보생명</a></li>
                                    <li><a href="#">교보증권</a></li>
                                    <li><a href="#">교보정보통신</a></li>
                                    <li><a href="#">핫트랙스</a></li>
                                </ul>
                            </div>
                        </div>    
                    </div>    
                </div>    
            </div>
        </div>
        <div class="f-bot">
            <div class="center">
                <div class="fb-arrange">
                    <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/img/kyobo_logo_black.png';?>">
                    <div class="all"><!--나중에 class명 변경-->
                        <p>㈜ 교보문고   서울시 종로구 종로 1   대표이사 : 안병현</p>
                        <p>사업자등록번호 : 102-81-11670</p>
                        <p>COPYRIGHT(C) KYOBO BOOK CENTRE ALL RIGHTS RESERVED.</p>
                    </div>    
                </div>    
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/js/script.js'; ?>"></script>
    <?php if(isset($main)){ ?>
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/js/'.$main.'.js'; ?>"></script>
    <?php } ?>
    <?php if(isset($join)){ ?>
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/js/'.$join.'.js'; ?>"></script>
    <?php } ?>
    <?php if(isset($map)){ ?>
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/js/'.$map.'.js'; ?>"></script>
    <?php } ?>
    <?php if(isset($reply)) { ?>
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/js/'.$reply.'.js'; ?>"></script>
    <?php } ?> 
    <?php if(isset($company_intro)){ ?>
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/js/'.$company_intro.'.js'; ?>"></script>
    <?php } ?>
</body>
</html>
