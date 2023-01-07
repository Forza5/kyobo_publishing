<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link rel="stylesheet" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/css/style.css'; ?>">
</head>
    <body>
        <div class="body_bg"></div>
        <div id="header">
            <ul class="h-top">                
                <?php if(isset($_SESSION['userId'])) { ?>
                    <li><i class="fas fa-user"></i><span><?php echo $_SESSION['userId']; ?>님</span></li>
                    <li><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/login/logout.php'; ?>">로그아웃</a></li>
                    <?php } else{?>
                    <li><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/join/join.php'; ?>"><span>회원가입</span></a></li>
                    <li><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/login/login.php'; ?>"><span>로그인</span></a></li>
                <?php }?>
            </ul>
            <div class="center">
                <h1 class="logo"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/index.php'; ?>"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/img/kyobo_logo.png'; ?>"></a></h1>
                <div class="gnbWrap">
                    <div class="gnbBg"></div>
                    <ul class="gnb">
                        <li>
                            <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/sub/company_intro.php'; ?>">회사소개</a>
                            <ul class="depth2">
                                <li><a href="#">CEO 인사말</a></li>
                                <li><a href="#">교보문고 비전</a></li>
                                <li><a href="#">연혁</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">국내도서</a>
                            <ul class="depth2">
                                <li><a href="#">이주의 신간</a></li>
                                <li><a href="#">오늘의 책</a></li>
                                <li><a href="#">소설</a></li>
                                <li><a href="#">경제/경영</a></li>
                                <li><a href="#">청소년</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">eBook</a>
                            <ul class="depth2">
                                <li><a href="#">이주의 신간</a></li>
                                <li><a href="#">베스트</a></li>
                                <li><a href="#">추천</a></li>
                                <li><a href="#">이벤트</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/sub/location.php'; ?>">지점안내</a>
                            <ul class="depth2">
                                <li><a href="#">지점 소개</a></li>
                                <li><a href="#">지점 위치</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/board/board.php'; ?>">고객센터</a>
                            <ul class="depth2">
                                <li><a href="#">공지사항</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>    
                <ul class="info">
                    <li>
                        <input type="text" id="search" name="search">
                        <a href="#"><i class="xi-search search"></i></a>
                    </li>
                    <li><a href="#"><i class="xi-heart-o"></i></a></li>
                    <li><a href="#"><i class="xi-cart-o"></i></a></li>
                </ul>
                <a class="ham_menu" href="#"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/img/hamburger.png'; ?>"></a>
                
            </div>    
        </div>
        <div class="s-menu">
            <div class="col"><h1 class="slogo"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/img/kyobo_logo_smenu.png'; ?>"></h1><span class="xlogo"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/img/mov-close.png'; ?>"></span></div>
            <ul class="b_gnb">
                <li>
                    <div class="m_title">
                        <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/sub/company_intro.php'; ?>">회사소개</a>
                        <i class="fa-solid fa-chevron-up"></i>
                    </div>    
                    <ul class="s_gnb">
                        <li><a href="#">CEO 인사말</a></li>
                        <li><a href="#">교보문고 비전</a></li>
                        <li><a href="#">연혁</a></li>
                    </ul>
                </li>
                <li>
                    <div class="m_title">
                        <a href="#">국내도서</a>
                        <i class="fa-solid fa-chevron-up"></i>
                    </div>    
                    <ul class="s_gnb">
                        <li><a href="#">이주의 신간</a></li>
                        <li><a href="#">오늘의 책</a></li>
                        <li><a href="#">소설</a></li>
                        <li><a href="#">경제/경영</a></li>
                        <li><a href="#">청소년</a></li>
                    </ul>
                </li>
                <li>
                    <div class="m_title">
                        <a href="#">eBook</a>
                        <i class="fa-solid fa-chevron-up"></i>
                    </div>    
                    <ul class="s_gnb">
                        <li><a href="#">이주의 신간</a></li>
                        <li><a href="#">베스트</a></li>
                        <li><a href="#">추천</a></li>
                        <li><a href="#">이벤트</a></li>
                    </ul>
                </li>
                <li>
                    <div class="m_title">
                        <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/sub/location.php'; ?>">지점안내</a>
                        <i class="fa-solid fa-chevron-up"></i>
                    </div>    
                    <ul class="s_gnb">
                        <li><a href="#">지점 소개</a></li>
                        <li><a href="#">지점 위치</a></li>
                    </ul>
                </li>
                <li>
                    <div class="m_title">
                        <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/board/board.php'; ?>">고객센터</a>
                        <i class="fa-solid fa-chevron-up"></i>
                    </div>    
                    <ul class="s_gnb">
                        <li><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/board/board.php'; ?>">공지사항</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="d_info">
                <?php if(isset($_SESSION['userId'])) { ?>
                    <li><i class="fas fa-user"></i><span><?php echo $_SESSION['userId']; ?>님</span></li>
                    <li><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/login/logout.php'; ?>">로그아웃</a></li>
                    <?php } else{?>
                    <li><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/join/join.php'; ?>"><span>회원가입</span></a></li>
                    <li><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/kyobo/login/login.php'; ?>"><span>로그인</span></a></li>
                <?php }?>
            </ul>
        </div>
        <div id="container">
