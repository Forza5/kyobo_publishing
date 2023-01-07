<?php
    $title = "회원가입";
    include "../common/header.php";
?>
    <div class="join_all">
        <form id="join" action="join_insert.php" method="post">
        <div class="join_text">회원가입</div>
            <!--이용약관 체크동의 구역-->
            <div class="must_check">
                <div class="form_control">
                    <input type="checkbox" id="checkAll" name="checkAll">
                    <label for="checkAll">필수 이용약관 전체동의</label>
                </div>
                <div class="form_control">
                    <input type="checkbox" id="check1" name="check1" class="check">
                    <label for="check1">이용약관 동의</label>
                    <div class="able_box">
                        <p>제1조(목적) 이 약관은 업체 회사(전자상거래 사업자)가 운영하는 업체 교보문고(이하 “교보문고”라 한다)에서 제공하는 인터넷 관련 서비스(이하 “서비스”라 한다)를 이용함에 있어 교보문고와 이용자의 권리․의무 및 책임사항을 규정함을 목적으로 합니다.<br><br>
 
                            제2조(정의)<br><br>
 
                            ① “교보문고”란 업체 회사가 재화 또는 용역(이하 “재화 등”이라 함)을 이용자에게 제공하기 위하여 컴퓨터 등 정보통신설비를 이용하여 재화 등을 거래할 수 있도록 설정한 가상의 영업장을 말하며, 아울러 사이버몰을 운영하는 사업자의 의미로도 사용합니다.<br><br>
 
                            ② “이용자”란 “교보문고”에 접속하여 이 약관에 따라 “교보문고”가 제공하는 서비스를 받는 회원 및 비회원을 말합니다.<br><br>
 
                            ③ ‘회원’이라 함은 “교보문고”에 회원등록을 한 자로서, 계속적으로 “교보문고”가 제공하는 서비스를 이용할 수 있는 자를 말합니다.<br>
                        </p>
                    </div>
                </div>
                <div class="form_control">
                    <input type="checkbox" id="check2" name="check2" class="check">
                    <label for="check2">개인정보 수집 및 이용 동의</label>
                    <div class="able_box">
                        <p>개인정보처리방침<br><br>
                        1. 총칙<br><br>

                        본 업체 사이트는 회원의 개인정보보호를 소중하게 생각하고, 회원의 개인정보를 보호하기 위하여 항상 최선을 다해 노력하고 있습니다.<br><br> 
                        1) 회사는 「정보통신망 이용촉진 및 정보보호 등에 관한 법률」을 비롯한 모든 개인정보보호 관련 법률규정을 준수하고 있으며, 관련 법령에 의거한 개인정보처리방침을 정하여 이용자 권익 보호에 최선을 다하고 있습니다.<br><br>
                        2) 회사는 「개인정보처리방침」을 제정하여 이를 준수하고 있으며, 이를 인터넷사이트 및 모바일 어플리케이션에 공개하여 이용자가 언제나 용이하게 열람할 수 있도록 하고 있습니다.<br><br>
                        3) 회사는 「개인정보처리방침」을 통하여 귀하께서 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며 개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다.<br><br>
                        4) 회사는 「개인정보처리방침」을 홈페이지 첫 화면 하단에 공개함으로써 귀하께서 언제나 용이하게 보실 수 있도록 조치하고 있습니다.<br><br>
                        5) 회사는  「개인정보처리방침」을 개정하는 경우 웹사이트 공지사항(또는 개별공지)을 통하여 공지할 것입니다.<br><br>
                        </p>
                    </div>
                </div>
            </div>
            <!--회원정보 기입하는 부분-->
            <p class="caution_star">*는 필수입력칸입니다.</p>
            <div class="member_infor">
                <div class="form_control">
                    <label for="userId">아이디*</label>
                    <input type="text" id="userId" name="userId" placeholder="아이디를 입력해주세요">
                    <i class="fas fa-user-check"></i>
                    <i class="fas fa-exclamation-triangle"></i>
                    <span class="error_msg"></span>
                </div>
                <div class="form_control">
                    <label for="userPass">비밀번호*</label>
                    <input type="password" id="userPass" name="userPass" placeholder="비밀번호를 입력해주세요">
                    <i class="fas fa-user-check"></i>
                    <i class="fas fa-exclamation-triangle"></i>
                    <span class="error_msg"></span>
                </div>
                <div class="form_control">
                    <label for="userPassCheck">비밀번호확인*</label>
                    <input type="password" id="userPassCheck" name="userPassCheck" placeholder="비밀번호를 다시한번 입력해주세요">
                    <i class="fas fa-user-check"></i>
                    <i class="fas fa-exclamation-triangle"></i>
                    <span class="error_msg"></span>
                </div>
                <div class="form_control">
                    <label for="userEmail">이메일주소*</label>
                    <input type="text" id="userEmail" name="userEmail" placeholder="이메일을 입력해주세요">
                    <i class="fas fa-user-check"></i>
                    <i class="fas fa-exclamation-triangle"></i>
                    <span class="error_msg"></span>
                </div>
                <div class="form_control">
                    <label for="userPhone">연락처*</label>
                    <input type="text" id="userPhone" name="userPhone" placeholder="연락처를 입력해주세요">
                    <i class="fas fa-user-check"></i>
                    <i class="fas fa-exclamation-triangle"></i>
                    <span class="error_msg"></span>
                </div>
                <div class="form_control">
                    <label for="userName">이름*</label>
                    <input type="text" id="userName" name="userName" placeholder="이름을 입력해주세요">
                    <i class="fas fa-user-check"></i>
                    <i class="fas fa-exclamation-triangle"></i>
                    <span class="error_msg"></span>
                </div>
                <div class="form_control">
                    <label for="userBirth">생년월일*</label>
                    <input type="date" id="userBirth" name="userBirth" placeholder="생년월일을 선택해주세요">
                    <span class="error_msg"></span>
                </div>
                <div class="form_control">
                    <div class="gender_check">
                        <label for="gender">성별*</label>
                        <div>
                            <input type="radio" id="woman" name="gender" class="gender" value="여성">
                            <label for="woman"><span></span>여성</label>
                        </div>
                        <div>
                            <input type="radio" id="man" name="gender" class="gender" value="남성">
                            <label for="man"><span></span>남성</label>
                        </div>
                    </div>    
                    <span class="error_msg"></span>
                </div>
            </div>
            <div class="btns">
                <button class="join_ok" type="submit">회원가입</button>
                <button class="reset_ok" type="reset">다시입력</button>
            </div>
        </form>
    </div>
<?php
    $join = "join";
    include "../common/footer.php"; 
?>
