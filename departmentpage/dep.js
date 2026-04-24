function toggle(eventaname){
let seciton=document.getElementsByClassName(eventaname)[0];
if(seciton.style.display==="none"){
    seciton.style.display="";
}
else{
    seciton.style.display="none";
}
}
function hod(){
    let hods=document.getElementsByClassName("hodmess")[0].innerHTML="<blockquote>ATTENDENCE IS COMPULSORY </blockquote>"
    if(hods.style.display==="none"){
        hods.style.display="";
    }
    else{
        hods.style.display="none";
    }
}