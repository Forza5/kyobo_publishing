//header 영역
const gnbWrap = document.querySelector(".gnbWrap");
const gnbBg = document.querySelector(".gnbBg");
const gnb = document.querySelectorAll(".gnb > li");
const depth2 = document.querySelectorAll(".depth2");
const depth2Li = document.querySelector(".depth2 li").offsetHeight;

let count = 0; //depth2 li태그 갯수값 담는 변수
let maxHeight = 0; //li태그 높이값 / depth2 li 갯수값 연산해서 높이값 담는 변수
let depth2Height = []; //depth2 li태그 높이값 배열

//마우스 올렸을때
gnbWrap.addEventListener("mouseenter",function(){
    gnb.forEach(function(item,index){
        count = item.querySelectorAll(".depth2 li").length;
        depth2Height[index] = depth2Li * count;

        depth2[index].style.height = depth2Height[index] + "px";

        if(maxHeight < depth2Height[index]){
            maxHeight = depth2Height[index];
        }
    });
    gnbBg.style.height = maxHeight + "px";
    gnbBg.style.borderTop = "1px solid #eaeaea";
});

//마우스 내렸을때
gnbWrap.addEventListener("mouseleave",function(){
    depth2.forEach(function(item,index){
        item.style.height = "0px";
    });
    gnbBg.style.height = "0px";
    gnbBg.style.borderTop = "0px";
});

//s-menu 부분
const hamMenu = document.querySelector(".ham_menu");
const col = document.querySelector(".col img");
const smenu = document.querySelector(".s-menu");
const bgnbAll = document.querySelectorAll(".b_gnb > li");
const xlogo = document.querySelector(".xlogo");

hamMenu.addEventListener("click",function(e){
    e.preventDefault();
    smenu.classList.add("move");
});
xlogo.addEventListener("click",function(e){
    e.preventDefault();
    smenu.classList.remove("move");
});

//s-menu 부드럽게 등장
window.addEventListener("resize",function(){
    if(window.matchMedia("(min-width:1300px)").matches){
        smenu.classList.remove("move");
    }
});

hamMenu.addEventListener("click",function(){
    document.querySelector(".body_bg").style.display = "block";
});
xlogo.addEventListener("click",function(){
    document.querySelector(".body_bg").style.display = "none";
});

for(let i = 0; i < bgnbAll.length; i++){
    bgnbAll[i].addEventListener("click",function(){
        if(bgnbAll[i].classList.contains("react")){
            bgnbAll[i].classList.remove("react");
            bgnbAll[i].querySelector("i").className = "fa-solid fa-chevron-up"
        }
        else{
            const bgnbAllX = document.querySelectorAll(".b_gnb > li.react");
            for(let j = 0; j < bgnbAllX.length; j++){
                bgnbAllX[j].classList.remove("react");
                bgnbAllX[j].querySelector("i").className = "fa-solid fa-chevron-up";
            }
            bgnbAll[i].classList.add("react");
            bgnbAll[i].querySelector("i").className = "fa-solid fa-chevron-down";
        }
    });
}

//footer family_list 영역
const flist = document.querySelector(".family_list");
const flDrop = document.querySelector(".fl_droplist");
const dropArrow = document.querySelector(".drop_arrow i");

flist.addEventListener("click",function(){
    if(dropArrow.className == "xi-caret-down"){
        flDrop.classList.add("drop");
        dropArrow.className = "xi-caret-up";
    }
    else{
        flDrop.classList.remove("drop");
        dropArrow.className = "xi-caret-down";
    }
});