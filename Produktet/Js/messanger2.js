


var m=0;
var Fotom=[];
var Timem=2000;

Fotom[0]=' rgba(0, 0, 0, 0.35) 0px 5px 15px';
Fotom[1]='  blue 0px 30px 90px'
// foto[2]='foto33.png';
// foto[3]='foto44.png';


// Messanger
function ndryshoFotom() {
    document.querySelector('.messanger2').style.boxShadow=Fotom[m];
     
    if(m<Fotom.length-1){
      m++;
    }else{
       m=0;
    }
    setTimeout("ndryshoFotom()",Timem)

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
 
addLoadEvent(ndryshoFotom); 




let data=new Date();
let currentHour=data.getHours()
let currentMinute=data.getMinutes()



document.querySelector('.main-msg2').style.display='none';

document.querySelector('.messanger2').addEventListener('click',function(){
    document.querySelector('.main-msg2').style.display='inline';
    document.querySelector('.date-hour').textContent=currentHour+':'+(currentMinute<10?'0'+currentMinute:currentMinute);


});
document.querySelector('.close-res-msg2').addEventListener('click',function(){
    document.querySelector('.main-msg2').style.display='none';
    document.querySelector('.date-hour').textContent='none';
    
});
