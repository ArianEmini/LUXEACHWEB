


var q=0;
var Fotoq=[];
var Timeq=2000;

Fotoq[0]=' rgba(0, 0, 0, 0.35) 0px 5px 15px';
Fotoq[1]='  blue 0px 30px 90px'
// foto[2]='foto33.png';
// foto[3]='foto44.png';


// Messanger
function ndryshoFotoq() {
    document.querySelector('.messanger4').style.boxShadow=Fotoq[q];
     
    if(q<Fotoq.length-1){
      q++;
    }else{
       q=0;
    }
    setTimeout("ndryshoFotoq()",Timeq)

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
 
addLoadEvent(ndryshoFotoq); 




let data=new Date();
let currentHour=data.getHours()
let currentMinute=data.getMinutes()



document.querySelector('.main-msg4').style.display='none';

document.querySelector('.messanger4').addEventListener('click',function(){
    document.querySelector('.main-msg4').style.display='inline';
    document.querySelector('.date-hour').textContent=currentHour+':'+(currentMinute<10?'0'+currentMinute:currentMinute);


});
document.querySelector('.close-res-msg4').addEventListener('click',function(){
    document.querySelector('.main-msg4').style.display='none';
    document.querySelector('.date-hour').textContent='none';
    
});
