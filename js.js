// element.style.setProperty("display", "inline", "important");
var close=document.querySelector('.arrowup').style.display='none';
// alert('');
var open=document.querySelector('.arrowdown');
var menu=document.querySelector('.mainProdukt');
// menu.setAttribute ('style', 'display: none !important;');
var cardShooping=document.querySelector('.fa-cart-shopping');
var MeteShitura=document.querySelector('.paraMeShitura');


let i=0;
let colors=['#DB404C','#FFB45E','#FCF2EC'];




function changeColor(){
    cardShooping.style.color = colors[i];
    MeteShitura.style.color=colors[i]
    i++;
    if(i>=colors.length){
        i=0;  
    }
}
setInterval(changeColor, 1000);



// open.addEventListener('click',FunkOpen);
// document.querySelector('.arrowup').addEventListener('click',FunkClose);


// var infoo=document.querySelector('.info');
// var infoooo=document.querySelector('.paraa');
// infoooo.style.display='none';

// infoo.addEventListener('click',myinfo);


// function myinfo(){
//   infoooo.classList.toggle('showee');

// }






// function FunkOpen(){
//     open.setAttribute ('style', 'display: none !important;');
//     document.querySelector('.arrowup').style.display='inline';
//     menu.style.display='inline'
// }

// function FunkClose(){
//     document.querySelector('.arrowup').style.display="none";
//     document.querySelector('.arrowdown').style.display='inline';
//     menu.setAttribute ('style', 'display: none !important;');
// }



const navbar = document.querySelector('.nav')
const img=document.querySelector('.imgLogo')
const Ballina=document.querySelector('.Ballina');
const Produkti=document.querySelector('.Produkti');
const Info=document.querySelector('.info');
const InputSearch=document.querySelector('.inputSearch');
// const ReponseIndex=document.querySelector('.nav-response');
// const backgroundRespo=document.querySelector('.imgLogoRes');

window.addEventListener('scroll', function(e) {
  const lastPosition = window.scrollY
  if (lastPosition > 50 ) {
    navbar.classList.add('active')
    img.classList.add('active1')
    Ballina.classList.add('active2')
    Produkti.classList.add('active3')
    Info.classList.add('active3')
    InputSearch.classList.add('active4')
    // ReponseIndex.classList.add('active5')
    // backgroundRespo.classList.add('active1')
    
    

  } else if (navbar.classList.contains('active')&&(img.classList.contains('active1'))&&(Ballina.classList.contains('active2'))&&(Produkti.classList.contains('active3'))&&(Info.classList.contains('active3'))&&(InputSearch.classList.contains('active4'))  ) {
    navbar.classList.remove('active');
    img.classList.remove('active1')
    Ballina.classList.remove('active2');
    Produkti.classList.remove('active3');
    Info.classList.remove('active3')
    InputSearch.classList.remove('active4')
    // ReponseIndex.classList.remove('active5')
    // backgroundRespo.classList.remove('active1')



  } else {
    navbar.classList.remove('active')
    img.classList.remove('active1');
    Ballina.classList.remove('active2')
    Produkti.classList.remove('active3')
    Info.classList.remove('active3')
    InputSearch.classList.remove('active4')
    // ReponseIndex.classList.remove('active5')
    // backgroundRespo.classList.remove('active1')



  }
})


// 10 Produktet me te shitura


// let j=0;
// var foto=[];
// var time=2000;

// foto[0]='../assets/Photo/Syzat/foto11.png';
// foto[1]='../assets/Photo/Syzat/foto22.png';
// foto[2]='../assets/Photo/Syzat/foto33.png';
// foto[3]='../assets/Photo/Syzat/foto44.png';


// var p=0;
// var Foto=[];
// var Time=3000;

// Foto[0]=' rgba(0, 0, 0, 0.35) 0px 5px 15px';
// Foto[1]='  blue 0px 30px 90px'
// // foto[2]='foto33.png';
// // foto[3]='foto44.png';


// // Messanger
// function ndryshoFoto() {
//     document.querySelector('.messanger').style.boxShadow=Foto[p];
     
//     if(p<Foto.length-1){
//       p++;
//     }else{
//        p=0;
//     }
//     setTimeout("ndryshoFoto()",time)

// }


// // img slider

// function ndryshoFotot(){
//     document.slider.src=foto[j];
   
//     if((j<foto.length-1)){
//       j++;
    
//     }else{
//        j=0;
      
//     }

//     setTimeout("ndryshoFotot()",time)
// }

// function addLoadEvent(func) { 
//   var oldonload = window.onload; 
//   if (typeof window.onload != 'function') { 
//     window.onload = func; 
//   } else { 
//     window.onload = function() { 
//       if (oldonload) { 
//         oldonload(); 
//       } 
//       func(); 
//     } 
//   } 
// }
 
// addLoadEvent(ndryshoFotot); 
// addLoadEvent(ndryshoFoto); 
















// MODAL

document.querySelector(".infosell").style.display="none";





var close=document.querySelector('.close-mark');
var openCard=document.querySelector('.openCard');

document.querySelector('.modal-1').style.display='none';

openCard.addEventListener('click',FunkOpenCard);
close.addEventListener('click',FunkClick);

function FunkClick(){
  document.querySelector('.modal-1').style.display='none';
}

function FunkOpenCard(){
  document.querySelector('.modal-1').style.display='inline';
  document.image1.src="assets/Photo/Syzat/SyzaGrass/L (2).png";
  document.image2.src='assets/Photo/Syzat/SyzaGrass/L (1).png';
  document.image3.src='assets/Photo/Syzat/SyzaGrass/L (2).png';

  
  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='PRADA';
  document.querySelector('.NgjyraProduktit').innerText='E zez';
}  

document.querySelector('.openCard1').addEventListener('click',CardOpen1);

function CardOpen1(){
  document.querySelector('.modal-1').style.display='inline';
  document.image1.src='assets/Photo/Syzat/SyzaGrass/L (36).png';
  document.image2.src='assets/Photo/Syzat/SyzaGrass/L (35).png';
  document.image3.src='assets/Photo/Syzat/SyzaGrass/L (34).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='PRADA';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}

document.querySelector('.openCard2').addEventListener('click',CardOpen2);
function CardOpen2(){
  document.querySelector('.modal-1').style.display='inline';
  document.image1.src='assets/Photo/Syzat/SyzaGrass/L (57).png';
  document.image2.src='assets/Photo/Syzat/SyzaGrass/L (56).png';
  document.image3.src='assets/Photo/Syzat/SyzaGrass/L (58).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='';
  document.querySelector('.NgjyraProduktit').innerText='E bardh';
}

document.querySelector('.openCard3').addEventListener('click',CardOpen3);
function CardOpen3(){
  document.querySelector('.modal-1').style.display='inline';
  document.image1.src='assets/Photo/Syzat/SyzaGrass/L (47).png';
  document.image2.src='assets/Photo/Syzat/SyzaGrass/L (48).png';
  document.image3.src='assets/Photo/Syzat/SyzaGrass/L (49).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='ARMANI';
  document.querySelector('.NgjyraProduktit').innerText='E zez';
}

document.querySelector('.openCard4').addEventListener('click',CardOpen4);
function CardOpen4(){
  document.querySelector('.modal-1').style.display='inline';
  document.image1.src='assets/Photo/Syzat/syzaGrass/L (45).png';
  document.image2.src='assets/Photo/Syzat/syzaGrass/L (44).png';
  document.image3.src='assets/Photo/Syzat/syzaGrass/L (46).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='PRADA';
  document.querySelector('.NgjyraProduktit').innerText='E kalter';
}
document.querySelector('.openCard5').addEventListener('click',CardOpen5);
function CardOpen5(){
  document.querySelector('.modal-1').style.display='inline';
  document.image1.src='assets/Photo/Syzat/SyzaGrass/L (27).png';
  document.image2.src='assets/Photo/Syzat/SyzaGrass/L (28).png';
  document.image3.src='assets/Photo/Syzat/SyzaGrass/L (29).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli BURBERRY';
  document.querySelector('.FirmaProduktit').innerText='BURBERRY';
  document.querySelector('.NgjyraProduktit').innerText='E zez';
}

document.querySelector('.openCard6').addEventListener('click',CardOpen6);
function CardOpen6(){
  document.querySelector('.modal-1').style.display='inline';
  document.image1.src='assets/Photo/Ora/foto1.jpg';
  document.image2.src='assets/Photo/Ora/OraGrass/OraGrass6.png';
  document.image3.src='assets/Photo/Ora/OraGrass/OraGrass9.png';

  document.querySelector('.EmriProduktit').innerText='Ora për qifte';
  document.querySelector('.FirmaProduktit').innerText='ROLEX';
  document.querySelector('.NgjyraProduktit').innerText='Ngjyr Ari';
}
document.querySelector('.openCard7').addEventListener('click',CardOpen7);
function CardOpen7(){
  document.querySelector('.modal-1').style.display='inline';
  document.image1.src='assets/Photo/Ora/foto10.png';
  document.image2.src='assets/Photo/Ora/OraGrass/OraGrass3.png';
  document.image3.src='assets/Photo/Ora/OraGrass/OraGrass4.png';

  document.querySelector('.EmriProduktit').innerText='Orë';
  document.querySelector('.FirmaProduktit').innerText='ROLEX';
  document.querySelector('.NgjyraProduktit').innerText='E bardh';
}

document.querySelector('.openCard8').addEventListener('click',CardOpen8);
function CardOpen8(){
  document.querySelector('.modal-1').style.display='inline';
  document.image1.src='assets/Photo/Syzat/SyzaGrass/L (5).png';
  document.image2.src='assets/Photo/Syzat/SyzaGrass/L (3).png';
  document.image3.src='assets/Photo/Syzat/SyzaGrass/L (4).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='VERSACE';
  document.querySelector('.NgjyraProduktit').innerText='Ngjyr Ari';
}
document.querySelector('.openCard9').addEventListener('click',CardOpen9);
function CardOpen9(){
  document.querySelector('.modal-1').style.display='inline';
  document.image1.src='assets/Photo/Syzat/SyzaGrass/L (10).png';
  document.image2.src='assets/Photo/Syzat/SyzaGrass/L (9).png';
  document.image3.src='assets/Photo/Syzat/SyzaGrass/L (8).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='FENDI';
  document.querySelector('.NgjyraProduktit').innerText='E zez';
}

document.querySelector('.openCard10').addEventListener('click',CardOpen10);
function CardOpen10(){
  document.querySelector('.modal-1').style.display='inline';
  document.image1.src='assets/Photo/Syzat/SyzaGrass/L (50).png';
  document.image2.src='assets/Photo/Syzat/SyzaGrass/L (51).png';
  document.image3.src='assets/Photo/Syzat/SyzaGrass/L (52).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='B';
  document.querySelector('.NgjyraProduktit').innerText='E gjelbert';
}

document.querySelector('.openCard11').addEventListener('click',CardOpen11);
function CardOpen11(){
  document.querySelector('.modal-1').style.display='inline';
  document.image1.src='assets/Photo/Syzat/SyzaGrass/L (17).png';
  document.image2.src='assets/Photo/Syzat/SyzaGrass/L (18).png';
  document.image3.src='assets/Photo/Syzat/SyzaGrass/L (19).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='VERSACE';
  document.querySelector('.NgjyraProduktit').innerText='E zez';
}

document.querySelector('.openCard12').addEventListener('click',CardOpen12);
function CardOpen12(){
  document.querySelector('.modal-1').style.display='inline';
  document.image1.src='assets/Photo/Ora/foto13.png';
  document.image2.src='assets/Photo/Ora/foto5.png';
  document.image3.src='assets/Photo/Ora/foto13.png';

  document.querySelector('.EmriProduktit').innerText='Orë';
  document.querySelector('.FirmaProduktit').innerText='ARMANI';
  document.querySelector('.NgjyraProduktit').innerText='Ngjyr Ari';
}

document.querySelector('.openCard13').addEventListener('click',CardOpen13);
function CardOpen13(){
  document.querySelector('.modal-1').style.display='inline';
  document.image1.src='assets/Photo/Ora/foto12.png';
  document.image2.src='assets/Photo/Ora/OraGrass/OraGrass13.png';
  document.image3.src='assets/Photo/Ora/OraGrass/OraGrass14.png';

  document.querySelector('.EmriProduktit').innerText='Orë';
  document.querySelector('.FirmaProduktit').innerText='S&T';
  document.querySelector('.NgjyraProduktit').innerText='E zez';
}

document.querySelector('.openCard14').addEventListener('click',CardOpen14);
function CardOpen14(){
  document.querySelector('.modal-1').style.display='inline';
  document.image1.src='assets/Photo/Syzat/SyzaGrass/L (22).png';
  document.image2.src='assets/Photo/Syzat/SyzaGrass/L (23).png';
  document.image3.src='assets/Photo/Syzat/SyzaGrass/SyzaGrass17.png';

 
  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='MATRIC';
  document.querySelector('.NgjyraProduktit').innerText='E zez';
}

document.querySelector('.openCard15').addEventListener('click',CardOpen15);
function CardOpen15(){
  document.querySelector('.modal-1').style.display='inline';
  document.image1.src='assets/Photo/Syzat/SyzaGrass/L (14).png';
  document.image2.src='assets/Photo/Syzat/SyzaGrass/L (15).png';
  document.image3.src='assets/Photo/Syzat/SyzaGrass/L (16).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='VERSACE';
  document.querySelector('.NgjyraProduktit').innerText='E zez';
}


document.querySelector('.inputfoto').style.visibility='hidden'





let slides = document.getElementsByClassName("slider__slide");
let navlinks = document.getElementsByClassName("slider__navlink");
let currentSlide = 0;

document.getElementById("nav-button--next").addEventListener("click", () => {
    changeSlide(currentSlide + 1)
});
document.getElementById("nav-button--next1").addEventListener("click", () => {
  changeSlide(currentSlide + 1)
});

document.getElementById("nav-button--prev").addEventListener("click", () => {
    changeSlide(currentSlide - 1)
});

function changeSlide(moveTo) {
    if (moveTo >= slides.length) {moveTo = 0;}
    if (moveTo < 0) {moveTo = slides.length - 1;}
    
    slides[currentSlide].classList.toggle("active");
    navlinks[currentSlide].classList.toggle("active");
    slides[moveTo].classList.toggle("active");
    navlinks[moveTo].classList.toggle("active");
    
    currentSlide = moveTo;
}

document.querySelectorAll('.slider__navlink').forEach((bullet, bulletIndex) => {
    bullet.addEventListener('click', () => {
        if (currentSlide !== bulletIndex) {
            changeSlide(bulletIndex);
        }
    })
})


// Main-Response

document.querySelector('.arrowup-res').style.display='none';
document.querySelector('.mainProduktResponse').style.display='none';


// document.querySelector('.arrowdown-res').addEventListener('click',OpenFunkRes);


// function OpenFunkRes(){

//   document.querySelector('.mainProduktResponse').style.display='flex';
//   document.querySelector('.mainProduktResponse').style.flexdirection='column';
//   document.querySelector('.arrowup-res').style.display='inline';
//   document.querySelector('.arrowdown-res').style.display='none';
    
// }

// document.querySelector('.arrowup-res').addEventListener('click',HiddenArrowUp);

// function HiddenArrowUp(){
//   // document.querySelector('.arrowup-res').style.display='none';
//   document.querySelector('.mainProduktResponse').style.display='none';
//   document.querySelector('.arrowup-res').setAttribute('style','display:none !important');
//   document.querySelector('.arrowdown-res').style.display='inline';

  


// }

document.querySelector('.close-res').addEventListener('click',CloseResX);
document.querySelector('.Main-Reponse').style.display='none';

function CloseResX(){

  document.querySelector('.Main-Reponse').style.display='none';


}

document.querySelector('.icon-bars').addEventListener('click',OpenResBars);

function OpenResBars(){
  document.querySelector('.Main-Reponse').style.display='flex';
}