

//cont1 영역
const slide = document.querySelector(".slide");
const paging = document.querySelectorAll(".paging li");
const slideWrap = document.querySelector(".cont1 .center");

let slIder = 0;

for(let i = 0; i < paging.length; i++){
    paging[i].addEventListener("click",function(e){
        e.preventDefault();
        for(let j = 0; j < paging.length; j++){
            paging[j].classList.remove("start");
        }
        paging[i].classList.add("start");
        slIder = i;
        slide.style.marginLeft = -100 * slIder + "%";
    });
}

let autoSlide = setInterval(function(){
    if(slIder == paging.length-1){
        slIder = 0;
    }
    else{
        slIder++;
    }
    for(let i = 0; i < paging.length; i++){
        paging[i].classList.remove("start");
    }
    paging[slIder].classList.add("start");
    slide.style.marginLeft = -100 * slIder + "%";
},5000);

slideWrap.addEventListener("mouseenter",function(){
    clearInterval(autoSlide);
});

slideWrap.addEventListener("mouseleave",function(){
    autoSlide = setInterval(function(){
        if(slIder == paging.length-1){
            slIder = 0;
        }
        else{
            slIder++;
        }

        for(let i = 0; i < paging.length; i++){
            paging[i].classList.remove("start");
        }
        paging[slIder].classList.add("start");

        slide.style.marginLeft = -100 * slIder + "%";
    },5000);
});
//cont2 영역
var swiper1 = new Swiper(".mySwiper2", {
    slidesPerView: 1,
    spaceBetween: 30,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: true,
      },
  });

//cont3 영역
const left = document.querySelector(".left"); //fixed로 변경될 대상

    window.addEventListener("scroll",function(){
        let scTop = window.scrollY;//세로방향 스크롤바 위치값
        let cont3Top = document.querySelector(".cont3").offsetTop; 
        let cont4Top = document.querySelector(".cont4").offsetTop; 

        if(scTop >= cont3Top && scTop < cont4Top - Math.ceil(cont4Top*0.21)){ 

            left.style.position = "fixed";
            
            left.style.top = Math.ceil((window.outerHeight*0.50)*0.45) + "px";
        }
        else if(scTop >= cont4Top - Math.ceil(cont4Top*0.30)){ 
            left.style.position = "absolute";
            
            left.style.top = "unset";
            left.style.bottom = "11%";
        }

        else if(scTop < cont3Top) { 
            left.style.position = "absolute";
            
            left.style.top = "200px";      
        }
    });

//cont3 반응형
const right = document.querySelector(".right");
let rightHeight = right.offsetHeight+200; 

right.parentElement.parentElement.style.height = rightHeight + "px";

window.addEventListener("resize",function(){
    rightHeight = right.offsetHeight+200;

    right.parentElement.parentElement.style.height = rightHeight + "px";
});

//cont4 영역

// init Isotope
let grid = document.querySelector('.c3-wrap');

let iso = new Isotope( grid, {
    // options
    itemSelector: '.c3-fl',
    layoutMode: 'fitRows',
    transitionDuration: '0.5s' 
});

imagesLoaded(grid).on( 'progress', function() {
 
  iso.layout();
});

const btns = document.querySelectorAll(".btn1");
    btns.forEach(function(item,index){
        item.addEventListener("click",function(e){
            e.preventDefault();
            let attrValue = item.getAttribute("data-filter");

            iso.arrange({
                filter: attrValue
            });
            btns.forEach(function(items,index){
                items.classList.remove("on");
            });
            item.classList.add("on");
        }); 
    });

//cont5 영역
const eventWrap = document.querySelectorAll(".event > div");
let more = document.querySelector(".c5-btn");

let mClick = 3;

more.addEventListener("click",function(){
    for(let i = 0; i < mClick + 3; i++){
        eventWrap[i].style.display = "block";
    }
    mClick = mClick + 3;
    if(mClick >= eventWrap.length){
        more.style.display = "none";
    }
});

//up 영역
const up = document.querySelector(".up");
const allCont = document.querySelectorAll(".acont");
let contStart = [];

window.addEventListener("scroll",function(){

    let scTop = window.scrollY;

    for(let i = 0; i < allCont.length; i++){
        contStart[i] = allCont[i].offsetTop;
    }

    if(scTop > contStart[0]){
        up.classList.add("fix");
    }
    else{
        up.classList.remove("fix");
    }
});
up.addEventListener("click",function(e){
    e.preventDefault();
    
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});

//aos
AOS.init();