let Smlr=[{name:"Hackerrank2.0" ,required:true},
    {name:"Undercover2.0",required:false},
    {name:"Datathon26",required:true},
    {name :"SwdcTest The Best",required:true},
    {name:"SigmaCourse",required:false}
]
function showthelist(eventname,eventtag){
    let listname=document.getElementById(eventtag);
    for(let i=0;i<eventname.length;i++){
        let li=document.createElement("li");
        li.textContent=eventname[i].name;
        if(eventname[i].required===true){
            li.style.color="blue";
            li.style.backgroundColor="lightyellow";
            li.style.fontWeight="bold";

        }
        listname.appendChild(li);
        
    }
}
showthelist(Smlr,"dynamic");
const countting=(eventname)=>{
    return eventname.length;
}
let counts=countting(Smlr);
document.getElementById("count").innerText=counts;
