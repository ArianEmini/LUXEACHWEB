


var n=0;
var Foton=[];
var Timen=2000;

Foton[0]=' rgba(0, 0, 0, 0.35) 0px 5px 15px';
Foton[1]='  blue 0px 30px 90px'
// foto[2]='foto33.png';
// foto[3]='foto44.png';


// Messanger
function ndryshoFoton() {
    document.querySelector('.messanger3').style.boxShadow=Foton[n];
     
    if(n<Foton.length-1){
      n++;
    }else{
       n=0;
    }
    setTimeout("ndryshoFoton()",Timen)

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
 
addLoadEvent(ndryshoFoton); 




let data=new Date();
let currentHour=data.getHours()
let currentMinute=data.getMinutes()



document.querySelector('.main-msg3').style.display='none';

document.querySelector('.messanger3').addEventListener('click',function(){
    document.querySelector('.main-msg3').style.display='inline';
    document.querySelector('.date-hour').textContent=currentHour+':'+(currentMinute<10?'0'+currentMinute:currentMinute);


});
document.querySelector('.close-res-msg3').addEventListener('click',function(){
    document.querySelector('.main-msg3').style.display='none';
    document.querySelector('.date-hour').textContent='none';
    
});
