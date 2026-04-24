let menuItems=document.querySelectorAll(".dashboard ul li a");

menuItems.forEach(function(item){
    item.addEventListener("mouseover",function(){
        item.style.backgroundColor="#e0d4f5";
        item.style.borderRadius="6px";
    })
    item.addEventListener("mouseout",function(){
        item.style.backgroundColor="";
    })
})