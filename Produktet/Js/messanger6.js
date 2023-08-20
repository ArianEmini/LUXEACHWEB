


var rr=0;
var Fotorr=[];
var Timerr=2000;

Fotorr[0]=' rgba(0, 0, 0, 0.35) 0px 5px 15px';
Fotorr[1]='  blue 0px 30px 90px'
// foto[2]='foto33.png';
// foto[3]='foto44.png';


// Messanger
function ndryshoFotorr() {
    document.querySelector('.messanger6').style.boxShadow=Fotorr[rr];
     
    if(rr<Fotorr.length-1){
      rr++;
    }else{
       rr=0;
    }
    setTimeout("ndryshoFotorr()",Timerr)

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
 
addLoadEvent(ndryshoFotorr); 




let data=new Date();
let currentHour=data.getHours()
let currentMinute=data.getMinutes()



document.querySelector('.main-msg6').style.display='none';

document.querySelector('.messanger6').addEventListener('click',function(){
    document.querySelector('.main-msg6').style.display='inline';
    document.querySelector('.date-hour').textContent=currentHour+':'+(currentMinute<10?'0'+currentMinute:currentMinute);


});
document.querySelector('.close-res-msg6').addEventListener('click',function(){
    document.querySelector('.main-msg6').style.display='none';
    document.querySelector('.date-hour').textContent='none';
    
});
