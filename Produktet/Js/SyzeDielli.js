// element.style.setProperty("display", "inline", "important");
var close=document.querySelector('.arrowup').style.display='none';
// alert('');
var open=document.querySelector('.arrowdown');
var menu=document.querySelector('.mainProdukt');
// menu.setAttribute ('style', 'display: none !important;');
var cardShooping=document.querySelector('.fa-cart-shopping');
var MeteShitura=document.querySelector('.paraMeShitura');


// let i=0;
// let colors=['crimson','green','orange','pink'];




// function changeColor(){
//     cardShooping.style.color = colors[i];
//     MeteShitura.style.color=colors[i]
//     i++;
//     if(i>=colors.length){
//         i=0;  
//     }
// }
// setInterval(changeColor, 1000);



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
    

  } else if (navbar.classList.contains('active')&&(img.classList.contains('active1'))&&(Ballina.classList.contains('active2'))&&(Produkti.classList.contains('active3'))&&(Info.classList.contains('active3'))&&(InputSearch.classList.contains('active4'))   ) {
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



// Modali
document.querySelector('.infosell1').style.display='none';





var close=document.querySelector('.close-mark1');

document.querySelector('.modal-2').style.display='none';

close.addEventListener('click',FunkClick);

function FunkClick(){
  document.querySelector('.modal-2').style.display='none';
}


document.querySelector('.SyzeOpenCard1').addEventListener('click',SyzeOpenCard1);

function SyzeOpenCard1(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/L (2).png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L.png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (1).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='PRADA';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}

document.querySelector('.SyzeOpenCard2').addEventListener('click',SyzeOpenCard2);

function SyzeOpenCard2(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass5.png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass6.png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass7.png';
  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='PRADA';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}

document.querySelector('.SyzeOpenCard3').addEventListener('click',SyzeOpenCard3);

function SyzeOpenCard3(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass10.png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass9.png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass8.png';
  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}

document.querySelector('.SyzeOpenCard4').addEventListener('click',SyzeOpenCard4);

function SyzeOpenCard4(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/L (49).png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (47).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (48).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='ARMANI';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}

document.querySelector('.SyzeOpenCard5').addEventListener('click',SyzeOpenCard5);

function SyzeOpenCard5(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass47.png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (44).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (45).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='PRADA';
  document.querySelector('.NgjyraProduktit').innerText='Kaltert';


}

document.querySelector('.SyzeOpenCard6').addEventListener('click',SyzeOpenCard6);

function SyzeOpenCard6(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/L (27).png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (28).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (29).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='BURBERRY';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}

document.querySelector('.SyzeOpenCard7').addEventListener('click',SyzeOpenCard7);

function SyzeOpenCard7(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/L (24).png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (25).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (26).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='Dolce Gabbana';
  document.querySelector('.NgjyraProduktit').innerText='E bardh';


}

document.querySelector('.SyzeOpenCard8').addEventListener('click',SyzeOpenCard8);

function SyzeOpenCard8(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/L (50).png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (51).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (52).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='B';
  document.querySelector('.NgjyraProduktit').innerText='E Gjelbert';


}

document.querySelector('.SyzeOpenCard9').addEventListener('click',SyzeOpenCard9);

function SyzeOpenCard9(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/L (3).png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (4).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (5).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='VERSACE';
  document.querySelector('.NgjyraProduktit').innerText='Ngjyr ari';


}


document.querySelector('.SyzeOpenCard10').addEventListener('click',SyzeOpenCard10);

function SyzeOpenCard10(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass30.png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (8).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (9).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='FENDI';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}

document.querySelector('.SyzeOpenCard11').addEventListener('click',SyzeOpenCard11);

function SyzeOpenCard11(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass3.png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass2.png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass3.png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='PRADA';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}

document.querySelector('.SyzeOpenCard12').addEventListener('click',SyzeOpenCard12);

function SyzeOpenCard12(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/L (18).png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (17).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (19).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='VERSACE';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}


document.querySelector('.SyzeOpenCard13').addEventListener('click',SyzeOpenCard13);

function SyzeOpenCard13(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass41.png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (20).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (21).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='VERSACE';
  document.querySelector('.NgjyraProduktit').innerText='E bardh';


}


document.querySelector('.SyzeOpenCard14').addEventListener('click',SyzeOpenCard14);

function SyzeOpenCard14(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass42.png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass43.png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass44.png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}

document.querySelector('.SyzeOpenCard15').addEventListener('click',SyzeOpenCard15);

function SyzeOpenCard15(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass27.png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (22).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (23).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}


document.querySelector('.SyzeOpenCard16').addEventListener('click',SyzeOpenCard16);

function SyzeOpenCard16(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass21.png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass22.png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass23.png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='VERSACE';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}

document.querySelector('.SyzeOpenCard17').addEventListener('click',SyzeOpenCard17);

function SyzeOpenCard17(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass29.png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass28.png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (6).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='';
  document.querySelector('.NgjyraProduktit').innerText='e zez,e kaltert';


}
document.querySelector('.SyzeOpenCard18').addEventListener('click',SyzeOpenCard18);

function SyzeOpenCard18(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass35.png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (53).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (55).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}

document.querySelector('.SyzeOpenCard19').addEventListener('click',SyzeOpenCard19);

function SyzeOpenCard19(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass40.png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (38).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (40).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}

document.querySelector('.SyzeOpenCard20').addEventListener('click',SyzeOpenCard20);

function SyzeOpenCard20(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass55.png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (60).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass54.png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='';
  document.querySelector('.NgjyraProduktit').innerText='E zez';


}

document.querySelector('.SyzeOpenCard21').addEventListener('click',SyzeOpenCard21);

function SyzeOpenCard21(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass56.png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (37).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass51.png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='';
  document.querySelector('.NgjyraProduktit').innerText='E kuqe';



}


document.querySelector('.SyzeOpenCard22').addEventListener('click',SyzeOpenCard22);

function SyzeOpenCard22(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/SyzaGrass57.png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (56).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (58).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='';
  document.querySelector('.NgjyraProduktit').innerText='E bardh';



}
document.querySelector('.SyzeOpenCard24').addEventListener('click',SyzeOpenCard24);

function SyzeOpenCard24(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/L (11).png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (12).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (13).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='Dolce Gabbana';
  document.querySelector('.NgjyraProduktit').innerText='E kaft';



}
document.querySelector('.SyzeOpenCard25').addEventListener('click',SyzeOpenCard25);

function SyzeOpenCard25(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/L (16).png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (15).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (14).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='VERSACE';
  document.querySelector('.NgjyraProduktit').innerText='E zez';



}

document.querySelector('.SyzeOpenCard26').addEventListener('click',SyzeOpenCard26);

function SyzeOpenCard26(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/L (43).png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (41).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (42).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='BB';
  document.querySelector('.NgjyraProduktit').innerText='E bardh';



}

document.querySelector('.SyzeOpenCard27').addEventListener('click',SyzeOpenCard27);

function SyzeOpenCard27(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/L (32).png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (31).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (33).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='';
  document.querySelector('.NgjyraProduktit').innerText='E vjollce';



}

document.querySelector('.SyzeOpenCard28').addEventListener('click',SyzeOpenCard28);

function SyzeOpenCard28(){
  document.querySelector('.modal-2').style.display='inline';
  document.image11.src='../assets/Photo/Syzat/SyzaGrass/L (36).png';
  document.image22.src='../assets/Photo/Syzat/SyzaGrass/L (35).png';
  document.image33.src='../assets/Photo/Syzat/SyzaGrass/L (34).png';

  document.querySelector('.EmriProduktit').innerText='Syza Dielli';
  document.querySelector('.FirmaProduktit').innerText='PRADA';
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

