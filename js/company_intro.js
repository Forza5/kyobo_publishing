let text = "교보문고는 다양한 지식과 \n 예술문화경험을 제공합니다.";
let viewText = "";
let i = 0;

let autoTyping = setInterval(typing,150);

function typing(){
    viewText = text[i++];

    if(viewText == "\n"){
        document.querySelector(".com_text").innerHTML += "<br/>";
    }
    else{
        document.querySelector(".com_text").innerHTML += viewText;
    }

    if(i > text.length - 1){
        clearInterval(autoTyping);
    }
}