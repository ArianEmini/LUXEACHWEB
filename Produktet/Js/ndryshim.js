


// const navbar = document.querySelector('.nav')
// const img=document.querySelector('.imgLogo')
// const Ballina=document.querySelector('.Ballina');
// const Produkti=document.querySelector('.Produkti');
// const Info=document.querySelector('.info');
// const InputSearch=document.querySelector('.inputSearch');
const ReponseIndex=document.querySelector('.nav-response');
const backgroundRespo=document.querySelector('.imgLogoo');

window.addEventListener('scroll', function(e) {
  const lastPosition = window.scrollY
  if (lastPosition > 50 ) {
    // navbar.classList.add('active')
    // img.classList.add('active1')
    // Ballina.classList.add('active2')
    // Produkti.classList.add('active3')
    // Info.classList.add('active3')
    // InputSearch.classList.add('active4')
    ReponseIndex.classList.add('active5');
    backgroundRespo.classList.add('active1');
    
    

  } else if (ReponseIndex.classList.contains('active5')&&(backgroundRespo.classList.contains('active1'))) {
    // navbar.classList.remove('active');
    // img.classList.remove('active1')
    // Ballina.classList.remove('active2');
    // Produkti.classList.remove('active3');
    // Info.classList.remove('active3')
    // InputSearch.classList.remove('active4')
    ReponseIndex.classList.remove('active5');
    backgroundRespo.classList.remove('active1');




  } else {
    // navbar.classList.remove('active')
    // img.classList.remove('active1');
    // Ballina.classList.remove('active2')
    // Produkti.classList.remove('active3')
    // Info.classList.remove('active3')
    // InputSearch.classList.remove('active4')
    ReponseIndex.classList.remove('active5')
    backgroundRespo.classList.remove('active1')




  }
})
