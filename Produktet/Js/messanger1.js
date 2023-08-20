


var e=0;
var Fotoe=[];
var Timee=2000;

Fotoe[0]=' rgba(0, 0, 0, 0.35) 0px 5px 15px';
Fotoe[1]='  blue 0px 30px 90px'
// foto[2]='foto33.png';
// foto[3]='foto44.png';


// Messanger
function ndryshoFotoe() {
    document.querySelector('.messanger1').style.boxShadow=Fotoe[e];
     
    if(e<Fotoe.length-1){
      e++;
    }else{
       e=0;
    }
    setTimeout("ndryshoFotoe()",Timee)

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
 
addLoadEvent(ndryshoFotoe); 




let data=new Date();
let currentHour=data.getHours()
let currentMinute=data.getMinutes()



document.querySelector('.main-msg1').style.display='none';

document.querySelector('.messanger1').addEventListener('click',function(){
    document.querySelector('.main-msg1').style.display='inline';
    document.querySelector('.date-hour').textContent=currentHour+':'+(currentMinute<10?'0'+currentMinute:currentMinute);


});
document.querySelector('.close-res-msg1').addEventListener('click',function(){
    document.querySelector('.main-msg1').style.display='none';
    document.querySelector('.date-hour').textContent='none';
    
});
