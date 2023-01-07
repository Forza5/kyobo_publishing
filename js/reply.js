const repUpdate = document.querySelectorAll(".reply_update");
const closeOut = document.querySelectorAll(".closeout");

repUpdate.forEach(function(item,index){
    item.addEventListener("click",function(e){
        e.preventDefault();

        item.style.display = "none";
        item.parentElement.querySelector("textarea").style.display = "inline-block";
        item.parentElement.querySelector("button").style.display = "block";
        item.parentElement.querySelector(".closeout").style.display = "block";
    }); 
});
closeOut.forEach(function(item,index){
    item.addEventListener("click",function(e){
        e.preventDefault();

        item.style.display = "none";
        item.parentElement.querySelector("textarea").style.display = "none";
        item.parentElement.querySelector("button").style.display = "none";
        item.parentElement.querySelector(".upd_btn").style.display = "none";
        item.parentElement.parentElement.querySelector(".reply_update").style.display = "inline-block";
    });
});

