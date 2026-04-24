let remaining=100;
function availableseat(){

        if(remaining>0){
            remaining--;
            document.getElementById("seatcount").innerText=remaining;
            document.getElementById("message").innerText="🎉🎉Successfully  Book the  Ticket🎉🎉";  
        }
        else{
             document.getElementById("message").innerText="Sorry the  Ticket is Fulled";   
        }

}