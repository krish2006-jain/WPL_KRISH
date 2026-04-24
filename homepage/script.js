let date=new Date();
document.getElementsByClassName("date")[0].innerHTML=
"Date:-"+date.toDateString();

function names(){
let name =window.prompt("Enter your name");
document.getElementsByClassName("name")[0].innerHTML=
"Welcome :- "+name;
}

setTimeout(function(){
   names();
},1000)