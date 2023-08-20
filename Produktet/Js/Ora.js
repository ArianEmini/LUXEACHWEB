
var close=document.querySelector('.arrowup').style.display='none';
// alert('');
var open=document.querySelector('.arrowdown');
var menu=document.querySelector('.mainProdukt');
// menu.setAttribute ('style', 'display: none !important;');
var cardShooping=document.querySelector('.fa-cart-shopping');
var MeteShitura=document.querySelector('.paraMeShitura');






// open.addEventListener('click',FunkOpen);
// document.querySelector('.arrowup').addEventListener('click',FunkClose);










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
// const backgroundRespo=document.querySelector('.imgLogoo');

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
    

  } else if (navbar.classList.contains('active')&&(img.classList.contains('active1'))&&(Ballina.classList.contains('active2'))&&(Produkti.classList.contains('active3'))&&(Info.classList.contains('active3'))&&(InputSearch.classList.contains('active4'))&&(InputSearch.classList.contains('active4'))   ) {
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










// Modali

document.querySelector('.infosell1').style.display='none';

var close=document.querySelector('.close-mark2');

document.querySelector('.modal-2').style.display='none';

close.addEventListener('click',FunkClick);

function FunkClick(){
  document.querySelector('.modal-2').style.display='none';
}


document.querySelector('.OpenOreCard').addEventListener('click',OpenOreCard);

function OpenOreCard(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Ora/OraGrass/OraGrass1.png';
  document.image22.src='../assets/Photo/Ora/foto3.png';
  document.querySelector('.EmriProduktit').innerText='Orë';
  document.querySelector('.FirmaProduktit').innerText='ROLEX';
  document.querySelector('.NgjyraProduktit').innerText='E bardh';


}


document.querySelector('.OpenOreCard1').addEventListener('click',OpenOreCard1);

function OpenOreCard1(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Ora/foto4.png';
  document.image22.src='../assets/Photo/Ora/foto8.png';
  document.querySelector('.EmriProduktit').innerText='Ora per qifte';
  document.querySelector('.FirmaProduktit').innerText='ROLEX';
  document.querySelector('.NgjyraProduktit').innerText='Ngjyr ari';


}

document.querySelector('.OpenOreCard2').addEventListener('click',OpenOreCard2);

function OpenOreCard2(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Ora/foto13.png';
  document.image22.src='../assets/Photo/Ora/L (1).png';
  document.querySelector('.EmriProduktit').innerText='Orë';
  document.querySelector('.FirmaProduktit').innerText='ARMANI';
  document.querySelector('.NgjyraProduktit').innerText='Ngjyr ari';


}

document.querySelector('.OpenOreCard3').addEventListener('click',OpenOreCard3);

function OpenOreCard3(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Ora/OraGrass/OraGrass3.png';
  document.image22.src='../assets/Photo/Ora/OraGrass/OraGrass4.png';
  document.querySelector('.EmriProduktit').innerText='Orë';
  document.querySelector('.FirmaProduktit').innerText='ROLEX';
  document.querySelector('.NgjyraProduktit').innerText='E bardh';


}

document.querySelector('.OpenOreCard4').addEventListener('click',OpenOreCard4);

function OpenOreCard4(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Ora/foto7.png';
  document.image22.src='../assets/Photo/Ora/L  (2).png';
  document.querySelector('.EmriProduktit').innerText='Orë';
  document.querySelector('.FirmaProduktit').innerText='VERSACI';
  document.querySelector('.NgjyraProduktit').innerText='E bardh';


}

document.querySelector('.OpenOreCard5').addEventListener('click',OpenOreCard5);

function OpenOreCard5(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Ora/OraGrass/OraGrass17.png';
  document.image22.src='../assets/Photo/Ora/OraGrass/OraGrass18.png';
  document.querySelector('.EmriProduktit').innerText='Orë për femra';
  document.querySelector('.FirmaProduktit').innerText='ROLEX';
  document.querySelector('.NgjyraProduktit').innerText='E bardh';


}

document.querySelector('.OpenOreCard6').addEventListener('click',OpenOreCard6);

function OpenOreCard6(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Ora/foto9.png';
  document.image22.src='../assets/Photo/Ora/OraGrass/OraGrass25.png';
  document.querySelector('.EmriProduktit').innerText='Orë ';
  document.querySelector('.FirmaProduktit').innerText='G-SHOCK';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}


document.querySelector('.OpenOreCard7').addEventListener('click',OpenOreCard7);

function OpenOreCard7(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Ora/OraGrass/OraGrass15.png';
  document.image22.src='../assets/Photo/Ora/OraGrass/OraGrass16.png';
  document.querySelector('.EmriProduktit').innerText='Orë për femra';
  document.querySelector('.FirmaProduktit').innerText='VERSACE';
  document.querySelector('.NgjyraProduktit').innerText='Ngjyr Ari';


}


document.querySelector('.OpenOreCard8').addEventListener('click',OpenOreCard8);

function OpenOreCard8(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Ora/ORaGrass/OraGrass20.png';
  document.image22.src='../assets/Photo/Ora/ORaGrass/OraGrass22.png';
  document.querySelector('.EmriProduktit').innerText='Orë për femra ';
  document.querySelector('.FirmaProduktit').innerText='ARMANI';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}
document.querySelector('.OpenOreCard9').addEventListener('click',OpenOreCard9);

function OpenOreCard9(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Ora/foto12.png';
  document.image22.src='../assets/Photo/Ora/OraGrass/OraGrass12.png';
  document.querySelector('.EmriProduktit').innerText='Orë';
  document.querySelector('.FirmaProduktit').innerText='S&T';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}
document.querySelector('.OpenOreCard10').addEventListener('click',OpenOreCard10);

function OpenOreCard10(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Ora/foto16.png';
  document.image22.src='../assets/Photo/Ora/foto17.png';
  document.querySelector('.EmriProduktit').innerText='Orë ROLEX';
  document.querySelector('.FirmaProduktit').innerText='ROLEX';
  document.querySelector('.NgjyraProduktit').innerText='E kaltert';


}
document.querySelector('.OpenOreCard11').addEventListener('click',OpenOreCard11);

function OpenOreCard11(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Ora/Untitled design (31).png';
  document.image22.src='../assets/Photo/Ora/Untitled design (31).png';
  document.querySelector('.EmriProduktit').innerText='Orë';
  document.querySelector('.FirmaProduktit').innerText='Versace';
  document.querySelector('.NgjyraProduktit').innerText='E bardh';


}
document.querySelector('.OpenOreCard12').addEventListener('click',OpenOreCard12);

function OpenOreCard12(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Ora/Untitled design (33).png';
  document.image22.src='../assets/Photo/Ora/Untitled design (33).png';
  document.querySelector('.EmriProduktit').innerText='Orë ';
  document.querySelector('.FirmaProduktit').innerText='S&T';
  document.querySelector('.NgjyraProduktit').innerText='E bardh';


}
document.querySelector('.OpenOreCard13').addEventListener('click',OpenOreCard13);

function OpenOreCard13(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Ora/Untitled design (32).png';
  document.image22.src='../assets/Photo/Ora/Untitled design (32).png';
  document.querySelector('.EmriProduktit').innerText='Ora';
  document.querySelector('.FirmaProduktit').innerText='ROLEX';
  document.querySelector('.NgjyraProduktit').innerText='E arit';


}
document.querySelector('.OpenOreCard14').addEventListener('click',OpenOreCard14);

function OpenOreCard14(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Ora/Untitled design (311).png';
  document.image22.src='../assets/Photo/Ora/fUntitled design (311).png';
  document.querySelector('.EmriProduktit').innerText='Orë ';
  document.querySelector('.FirmaProduktit').innerText='S&T';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}
document.querySelector('.OpenOreCard15').addEventListener('click',OpenOreCard15);

function OpenOreCard15(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Ora/Untitled design (36).png';
  document.image22.src='../assets/Photo/Ora/Untitled design (36).png';
  document.querySelector('.EmriProduktit').innerText='Ora';
  document.querySelector('.FirmaProduktit').innerText='ROLEX';
  document.querySelector('.NgjyraProduktit').innerText='E arit';


}
document.querySelector('.OpenOreCard16').addEventListener('click',OpenOreCard16);

function OpenOreCard16(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Ora/Untitled design (37).png';
  document.image22.src='../assets/Photo/Ora/Untitled design (37).png';
  document.querySelector('.EmriProduktit').innerText='Orë ';
  document.querySelector('.FirmaProduktit').innerText='G-SHOCK';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}






document.querySelector('.inputfoto').style.visibility='hidden'




let slides = document.getElementsByClassName("slider__slide");
let navlinks = document.getElementsByClassName("slider__navlink");
let currentSlide = 0;

document.getElementById("nav-button--next").addEventListener("click", () => {
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