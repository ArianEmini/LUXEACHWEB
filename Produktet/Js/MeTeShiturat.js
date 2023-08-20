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
















document.querySelector('.close-res').addEventListener('click',CloseResX);
document.querySelector('.Main-Reponse').style.display='none';

function CloseResX(){

  document.querySelector('.Main-Reponse').style.display='none';


}

document.querySelector('.icon-bars').addEventListener('click',OpenResBars);

function OpenResBars(){
  document.querySelector('.Main-Reponse').style.display='flex';
}







// Modali

document.querySelector('.infosell1').style.display='none';

var close=document.querySelector('.close-mark2');

document.querySelector('.modal-2').style.display='none';

close.addEventListener('click',FunkClick);

function FunkClick(){
  document.querySelector('.modal-2').style.display='none';
}


document.querySelector('.OpenShCard').addEventListener('click',OpenOreCard);

function OpenOreCard(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/L (2).png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L.png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (1).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='PRADA';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}

document.querySelector('.OpenShCard1').addEventListener('click',OpenOreCard1);

function OpenOreCard1(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/L (36).png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (35).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (34).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='PRADA';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}
// document.querySelector('.OpenShCard1').addEventListener('click',OpenOreCard1);

// function OpenOreCard1(){
//   document.querySelector('.modal-2').style.display='inline';
//   document.image11.src='../assets/Photo/Ora/foto4.png';
//   document.image22.src='../assets/Photo/Syzat/foto11.png';
//   document.querySelector('.EmriProduktit').innerText='Syza Dielli';
//   document.querySelector('.FirmaProduktit').innerText='PRADA';
//   document.querySelector('.NgjyraProduktit').innerText='E zez';


// }

document.querySelector('.OpenShCard2').addEventListener('click',OpenOreCard2);

function OpenOreCard2(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Ora/L (1).png';
  document.image22.src='../assets/Photo/Ora/L.png';
  document.image33.src='../assets/Photo/Ora/foto13.png';

  document.querySelector('.EmriProduktit').innerText='Orë ';
  document.querySelector('.FirmaProduktit').innerText='ARMANI';
  document.querySelector('.NgjyraProduktit').innerText='Ngjyr Ari';


}

document.querySelector('.OpenShCard3').addEventListener('click',OpenOreCard3);

function OpenOreCard3(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Ora/foto7.png';
  document.image22.src='../assets/Photo/Ora/L  (2).png';
  document.image33.src='../assets/Photo/Ora/L  (3).png';

  document.querySelector('.EmriProduktit').innerText='Orë';
  document.querySelector('.FirmaProduktit').innerText='VERSACE';
  document.querySelector('.NgjyraProduktit').innerText='E bardh';


}

document.querySelector('.OpenShCard4').addEventListener('click',OpenOreCard4);

function OpenOreCard4(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/L (9).png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (8).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (10).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='FENDI';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}

document.querySelector('.OpenShCard5').addEventListener('click',OpenOreCard5);

function OpenOreCard5(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/L (17).png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (18).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (19).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='VERSACE';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}

document.querySelector('.OpenShCard6').addEventListener('click',OpenOreCard6);

function OpenOreCard6(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/L (47).png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (48).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (49).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='ARMANI';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}


document.querySelector('.OpenShCard7').addEventListener('click',OpenOreCard7);

function OpenOreCard7(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/L (57).png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (58).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (56).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='';
  document.querySelector('.NgjyraProduktit').innerText='E bardh';


}


document.querySelector('.OpenShCard8').addEventListener('click',OpenOreCard8);

function OpenOreCard8(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Ora/OraGrass/OraGrass15.png';
  document.image22.src='../assets/Photo/Ora/OraGrass/OraGrass16.png';
  document.image33.src='../assets/Photo/Ora/OraGrass/OraGrass15.png';

  document.querySelector('.EmriProduktit').innerText='Orë ';
  document.querySelector('.FirmaProduktit').innerText='VERSACE';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}
document.querySelector('.OpenShCard9').addEventListener('click',OpenOreCard9);

function OpenOreCard9(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Ora/OraGrass/OraGrass17.png';
  document.image22.src='../assets/Photo/Ora/OraGrass/OraGrass18.png';
  document.image33.src='../assets/Photo/Ora/OraGrass/OraGrass17.png';

  document.querySelector('.EmriProduktit').innerText='Orë ';
  document.querySelector('.FirmaProduktit').innerText='Rolex';
  document.querySelector('.NgjyraProduktit').innerText='E bardh';


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