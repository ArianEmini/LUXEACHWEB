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