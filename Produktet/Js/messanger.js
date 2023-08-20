let j=0;
var foto=[];
var time=2000;

foto[0]='assets/Photo/Syzat/SyzaGrass/L (2).png';
foto[1]='assets/Photo/Syzat/SyzaGrass/L (36).png';
foto[2]='assets/Photo/Ora/L (1).png';
foto[3]='assets/Photo/Ora/foto7.png';
foto[4]='assets/Photo/Syzat/SyzaGrass/L (9).png';
foto[5]='assets/Photo/Syzat/SyzaGrass/L (17).png';
foto[6]='assets/Photo/Syzat/SyzaGrass/L (47).png';
foto[7]='assets/Photo/Syzat/SyzaGrass/L (57).png';
foto[8]='assets/Photo/Ora/OraGrass/OraGrass16.png';
foto[9]='assets/Photo/Ora/OraGrass/OraGrass17.png';

var p=0;
var Foto=[];
var Time=3000;


Foto[0]=' rgba(0, 0, 0, 0.35) 0px 5px 15px';
Foto[1]='  blue 0px 30px 90px'
// foto[2]='foto33.png';
// foto[3]='foto44.png';


// Messanger
function ndryshoFoto() {
    document.querySelector('.messanger').style.boxShadow=Foto[p];
     
    if(p<Foto.length-1){
      p++;
    }else{
       p=0;
    }
    setTimeout("ndryshoFoto()",time)

}




// img slider

function ndryshoFotot(){
    document.slider.src=foto[j];
   
    if((j<foto.length-1)){
      j++;
    
    }else{
       j=0;
      
    }

    setTimeout("ndryshoFotot()",time)
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


 
addLoadEvent(ndryshoFotot); 
addLoadEvent(ndryshoFoto); 




// index
let data=new Date();
let currentHour=data.getHours()
let currentMinute=data.getMinutes()



document.querySelector('.main-msg').style.display='none';

document.querySelector('.messanger').addEventListener('click',function(){
    document.querySelector('.main-msg').style.display='inline';
    document.querySelector('.date-hour').textContent=currentHour+':'+(currentMinute<10?'0'+currentMinute:currentMinute);


});
document.querySelector('.close-res-msg').addEventListener('click',function(){
    document.querySelector('.main-msg').style.display='none';
    document.querySelector('.date-hour').textContent='none';
    
});


// SyzeDielli

// let data1=new Date();
// let currentHour1=data.getHours()
// let currentMinute1=data.getMinutes()



