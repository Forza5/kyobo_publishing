//form태그 이벤트 submit 걸어주기 위한 세팅
const join = document.querySelector("#join");
//input태그들 선택
const checkAll = document.querySelector("#checkAll"); //전체동의 체크박스
const check = document.querySelectorAll(".check"); //필수동의 체크박스 2개 선택

const userId = document.querySelector("#userId"); //아이디입력 input태그
const userPass = document.querySelector("#userPass"); //비밀번호입력 input태그
const userPassCheck = document.querySelector("#userPassCheck"); //비밀번호확인입력 input태그
const userEmail = document.querySelector("#userEmail"); //이메일 입력 input태그
const userPhone = document.querySelector("#userPhone"); //연락처 입력 input태그
const userName = document.querySelector("#userName"); //이름 입력 input태그
const userBirth = document.querySelector("#userBirth"); //생년월일 입력 input태그

const gender = document.querySelectorAll(".gender"); //radio버튼 남성 여성 input태그 2개 선택
const genderCheck = document.querySelector(".gender_check"); //radio버튼들 감싸는 div태그

//모든 input태그들이 전부 올바르게 입력됐을때 회원가입 처리가 될 수 있는 역할의 변수
let allValid = {
    //필수동의 체크했을때 
    mustvalid:false,
    //아이디 체크했을때
    idvalid:false,
    //비밀번호 체크했을때
    passvalid:false,
    //비밀번호 확인 체크했을때
    passcheckvalid:false,
    //이메일 확인 체크했을때
    emailvalid:false,
    //연락처 확인 체크했을때
    phonevalid:false,
    //이름 확인 체크했을때
    namevalid:false,
    //생년월일 확인 체크했을때
    birthvalid:false,
    //성별 확인 체크했을때
    gendervalid:false
}

//전체동의 클릭시 필수동의 체크박스 2개가 체크된 상태로 바뀌게 처리
checkAll.addEventListener("click",function(){
    let isChecked = checkAll.checked; //체크박스 체크상태(true,false)
        
    check.forEach(function(items,index){
        items.checked = isChecked;
    });

    //전체동의 체크값이 true이면 valid 변수의 값을 true / 그게아니면 false값으로 변경
    if(isChecked == true){
        allValid.mustvalid = true;
    }
    else{
        allValid.mustvalid = false;
    }
});

check.forEach(function(items,index){
    items.addEventListener("click",function(){
        let count = document.querySelectorAll(".check:checked").length;

        //체크된 체크박스의 갯수값이랑 필수동의 체크박스 갯수값이랑 일치할때
        if(count == check.length){
            checkAll.checked = true; //전체동의 체크상태로 바꿈
            allValid.mustvalid = true;
        }
        else{
            checkAll.checked = false; //전체동의 체크해제상태로 바꿈
            allValid.mustvalid = false;
        }
    });
});

//회원가입 버튼 클릭시 데이터 전송 이벤트
join.addEventListener("submit",function(e){

    //인풋태그에 입력한 value값을 각각 변수에 세팅
    const IdValue = userId.value; //아이디 입력값
    const passValue = userPass.value; //비밀번호 입력값
    const passCheckValue = userPassCheck.value; //비밀번호확인 입력값
    const emailValue = userEmail.value; //이메일 입력값
    const phoneValue = userPhone.value; //연락처 입력값
    const nameValue = userName.value; //이름 입력값
    const birthValue = userBirth.value; //생년월일 입력값

    //해당 input태그에 입력한 value값을 체크할 정규표현식 코드
    const checkId = /^\w{8,12}$/;
    const checkPass = /^[\w\.!@#$%^&*-]{12,16}$/;
    const checkEmail = /^[\w]+\@[a-z]+\.[a-z\.]{2,5}$/;
    const checkPhone = /^(010)\-\d{4}\-\d{4}$/;
    const checkName = /^[ㄱ-힣]{2,4}$/;
    const checkBirth = /^(19[0-9][0-9]|20\d{2})\-(0[1-9]|1[0-2])\-(0[1-9]|[1-2][0-9]|3[0-1])$/;
    
    //아이디체크
    if(regexCheck(checkId,IdValue)){
        //맞았을때 실행할 코드
        successFor(userId);
        allValid.idvalid = true;
    }
    else{
        //틀렸을때 실행할 코드
        errorFor(userId,"8~12자리의 영문,숫자,_만 입력가능합니다.");
        allValid.idvalid = false;
    }

    //비밀번호 체크
    if(regexCheck(checkPass,passValue)){
        successFor(userPass);
        allValid.passvalid = true;
    }
    else{
        errorFor(userPass,"12~16자리의 영문,숫자,특수문자만 입력가능합니다.");
        allValid.passvalid = false;
    }

    //비밀번호 확인 체크
    if(regexCheck(checkPass,passCheckValue) && passValue == passCheckValue){
        successFor(userPassCheck);
        allValid.passcheckvalid = true;
    }
    else{
        errorFor(userPassCheck,"비밀번호가 일치하지않습니다.");
        allValid.passcheckvalid = false;
    }

    //이메일 체크
    if(regexCheck(checkEmail,emailValue)){
        successFor(userEmail);
        allValid.emailvalid = true;
    }
    else{
        errorFor(userEmail,"이메일주소 형식에 맞지않습니다.");
        allValid.emailvalid = false;
    }

    //연락처 체크
    if(regexCheck(checkPhone,phoneValue)){
        successFor(userPhone);
        allValid.phonevalid = true;
    }
    else{
        errorFor(userPhone,"연락처 형식에 맞지않습니다.");
        allValid.phonevalid = false;
    }

    //이름 체크
    if(regexCheck(checkName,nameValue)){
        successFor(userName);
        allValid.namevalid = true;
    }
    else{
        errorFor(userName,"2~4자리의 한글만 입력가능합니다.");
        allValid.namevalid = false;
    }

    //생년월일 체크
    if(regexCheck(checkBirth,birthValue)){
        successFor(userBirth);
        allValid.birthvalid = true;
    }
    else{
        errorFor(userBirth,"올바른 생년월일이 아닙니다.");
        allValid.birthvalid = false;
    }

    //성별체크가 됐는지 안됐는지 체크
    gender.forEach(function(item,index){
        //둘중 하나라도 체크가 되면 valid 변수의 값은 true / 아무것도 체크하지 않으면 false
        if(gender[0].checked == true || gender[1].checked == true){
            allValid.gendervalid = true;
            successFor(genderCheck);
        }
        else{
            errorFor(genderCheck,"성별을 선택하지 않았습니다.");
        }
    });

    //전부다 입력이 제대로 됐는지 -> true
    //하나라도 입력이 안되어있는 상태 -> false
    if(finalCheck()){
        join.submit(); //해당 백엔드 파일에 데이터를 전송하라
    }
    else if(allValid.mustvalid == false){
        e.preventDefault();
        alert("필수 이용약관 동의에 체크하셔야합니다.");
    }
    else{
        e.preventDefault(); //페이지 이동되는 기능을 중지
        alert("필수 입력사항에 전부 입력하셔야 합니다");
    }
});

//정규표현식 체크 결과가 true일때 실행할 함수
function successFor(input){
    input.parentElement.className = "form_control success";
}

//정규표현식 체크 결과가 false일때 실행할 함수
function errorFor(input,message){
    input.parentElement.className = "form_control error";

    input.parentElement.querySelector(".error_msg").innerHTML = message;

}

//해당 정규표현식 코드를 가지고 입력된 value값 체크
function regexCheck(regex,inputValue){
    let result = regex.test(inputValue);
    return result;
}

//객체 안에 있는 프로퍼티 갯수만큼 반복문을 수행해서 전부 true인지 아닌지를 체크하는 함수
function finalCheck(){

    //객체 안에 프로퍼티 value값이 전부 true면 해당 변수도 true / 그게 아니면 false
    let allCheck = true;

    for(let item in allValid){
        if(allValid[item] == false){
            allCheck = false;
        }
    }
    return allCheck;
}