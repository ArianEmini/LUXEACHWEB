


var r=0;
var Fotor=[];
var Timer=2000;

Fotor[0]=' rgba(0, 0, 0, 0.35) 0px 5px 15px';
Fotor[1]='  blue 0px 30px 90px'
// foto[2]='foto33.png';
// foto[3]='foto44.png';


// Messanger
function ndryshoFotor() {
    document.querySelector('.messanger5').style.boxShadow=Fotor[r];
     
    if(r<Fotor.length-1){
      r++;
    }else{
       r=0;
    }
    setTimeout("ndryshoFotor()",Timer)

}




function addLoadEvent(func) { 
  var oldonload = window.onload; 
  if (typeof window.onload != 'function') { 
    window.onload = func; 
  } else { 
    window.onload = function() { 
      if (oldonload) { 
        oldonload(); 
      } 
      func(); 
    } 
  } 
}
 
addLoadEvent(ndryshoFotor); 




let data=new Date();
let currentHour=data.getHours()
let currentMinute=data.getMinutes()



document.querySelector('.main-msg5').style.display='none';

document.querySelector('.messanger5').addEventListener('click',function(){
    document.querySelector('.main-msg5').style.display='inline';
    document.querySelector('.date-hour').textContent=currentHour+':'+(currentMinute<10?'0'+currentMinute:currentMinute);


});
document.querySelector('.close-res-msg5').addEventListener('click',function(){
    document.querySelector('.main-msg5').style.display='none';
    document.querySelector('.date-hour').textContent='none';
    
});
