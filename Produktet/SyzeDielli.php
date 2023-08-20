<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='shortcut icon' type='x-icon' href='../assets/logo/Untitled design (25).png' />
    <link rel="stylesheet" href="./style/SyzeDielli.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Luxeach</title>
   
    <div class="preloader">
    
    </div>

    <script>
        var loader=document.querySelector('.preloader');

        window.addEventListener("load",function(){
            loader.style.display='none'
        })
    </script>


</head>
<header>
    <nav class="nav">
        <div>
           <a href="../index.php" class="name"> 
            <img src="../assets/logo/Untitled design (25).png" alt="" style="width:50px; height: 50px;  " class="imgLogo" >
            <span class="name">Luxeach</span>
           </a>
            
        </div>
        <ul class="mainNav">
            <li><a href="../index.php" class="Ballina">Ballina</a></li>
            <li  class="produkti" onclick='myFunction()' ><span href="" class="Produkti"  style='font-size:20px; font-weight: bold; '>Produktet</span>

                   <div  class="arrowdown">
                    <i class="fa-solid fa-angle-down"></i>

                   </div>
                   <div class="arrowup">
                    <i class="fa-solid fa-angle-up" ></i>

                   
                    <div class="mainProdukt" >
                        <a href="SyzeDielli.php"  style="padding-left: 10px;"> <span><i class="fa-solid fa-glasses" style="color: blue; padding-right: 10px;"></i>Syze dieli</span></a>
                        <!-- <hr> -->
                        <a href="OraDore.php" style="padding-left: 10px;"> <span><img src="../assets/logo/wristwatch.png"style ="height:20px; width:20px; padding-right: 10px;  "alt=""> Ora dore</span></a>
                        <!-- <hr> -->
                        <a href="Qanta.html"  style="padding-left: 10px;"><span><i class="fa-solid fa-bag-shopping"  style="color: red
                        ;padding-right: 10px;"></i>Qanta </span></a>
                       <!-- <hr> -->
                       <a href="RrobaPerFemije.html"  style="padding-left: 10px; "><span><i class="fa-solid fa-shirt" style="color: rgb(194, 14, 203);padding-right: 10px; "></i>Rroba për fëmijë</span></a>
        
                      </div>
                      
                   </div>
                  
               
            </li>
            <script>
     function myFunction() {
  var x = document.querySelector('.arrowup');
  if (x.style.display === "none" ) {
    x.style.display = "block";
    document.querySelector('.arrowdown').style.display='none';

  } else {
    x.style.display = "none";
    document.querySelector('.arrowdown').style.display='inline';



  }
}
</script>
        
        
            <li><a href="InformataPerNe.html" class="info">Informata për ne</a></li>


            
           
        </ul>
        <div class="Search">
            <div class="search">
                <input type="search" name="Search" id="" placeholder="Kerko..." class="inputSearch">
                <i class="fa-solid fa-magnifying-glass"></i>

            </div>

        </div>
       
        
    </nav>
    <!-- <hr> -->
     <!-- Response navbar -->

     <div class="nav-response">
        <div class="logo-response">
            <a href="../index.php" class="namee"> 
                <img src="../assets/logo/Untitled design (25).png" alt="" style="width:50px; height: 50px;  " class="imgLogoo" >
                <span class="name">Luxeach</span>
               </a>
        </div>

        <div class="mainNav-response">
              <div class="icon-bars">
                <i class="fa fa-bars"></i>

              </div>
        </div>
    </div>
        
</header>
<body id="Homee">


     <!-- Messanger -->
     <div class="main-msg1">
        <div class="header">
         <div class="img">
            <img src="../assets/logo/Untitled design (20).png" alt="" style="height: 70px; width:70px">
            <div class="green"></div>

         </div>
         <div class="account">
            <h2>Luxeach</h2>
            <p>Përgjigjja do te kthehet shumë shpejt</p>
         </div>
         <i class="fa-solid fa-xmark close-res-msg1"></i>

        </div>
        <div class="body">
            <p class="date-hour"></p>
            <div class="chat">
                <div class="img">
                    <img src="../assets/logo/Untitled design (20).png" alt="" style="height: 50px; width:50px">

                </div>
                <div class="comment">Përshendetje. <br><br>


                    Si mundemi të ju  ndihmojmë?</div>
            </div>
            <a href="https://m.me/100090862297917" target="_blank" class="btn-msg"><button ><i class="fa-brands fa-facebook-messenger"></i>
                Start Chat
            </button></a>

        </div>
    </div>

    <div class="messanger1">
        <div class="red"></div>
        <i class="fa-brands fa-facebook-messenger"></i>
    </div>



















    <!--Main Reposnse  -->
    <div class="Main-Reponse">
       
        <i class="fa-solid fa-xmark close-res"></i>
        <a href="../index.php" class="name"> 
            <img src="../assets/logo/Untitled design (25).png" alt="" style="width:100px; height: 100px;  " class="imgLogo" >
           </a>

        <ul class="mainNav">
            <li><a href="../index.php" class="Ballina">Ballina</a></li>
            <li  class="produkti" onclick='myFunctionRes()' ><span href="" class="Produkti" >Produktet</span>

                   <div  class="arrowdown-res">
                    <i class="fa-solid fa-angle-down"></i>

                   </div>
                   <div class="arrowup-res">
                    <i class="fa-solid fa-angle-up" ></i>

                   
                      
                   </div>

                   
                  
                  
               
            </li>
            <div class="mainProduktResponse" >
                <a href="SyzeDielli.php"  style="padding-left: 10px;"> <span><i class="fa-solid fa-glasses" style="color: blue;margin-right: 10px; "></i>Syze dieli</span></a>
                <a href="OraDore.php" style="padding-left: 10px;"> <span><img src="../assets/logo/wristwatch.png"style ="  margin-right: 8px; "alt=""> Ora dore</span></a>
                <a href="Qanta.html"  style="padding-left: 10px;"><span><i class="fa-solid fa-bag-shopping"  style="color: red
                ; margin-right: 10px;"></i>Qanta </span></a>
               <a href="RrobaPerFemije.html"  style="padding-left: 10px;"><span><i class="fa-solid fa-shirt" style="color: rgb(194, 14, 203);margin-right: 10px; "></i>Rroba për fëmijë</span></a>

              </div>
        
        
            <li><a href="InformataPerNe.html" class="info">Informata për ne</a></li>

            <script>
     function myFunctionRes() {
  var x = document.querySelector('.mainProduktResponse');
  if (x.style.display === "none" ) {
    x.style.display = "flex";
    document.querySelector('.arrowdown-res').style.display='none';
    document.querySelector('.arrowup-res').style.display='inline';


  } else {
    x.style.display = "none";
    document.querySelector('.arrowdown-res').style.display='inline';
    document.querySelector('.arrowup-res').style.display='none';




  }
}
</script>
           
        </ul>

        <div class="iconeFooter">
            <a href="https://www.facebook.com/profile.php?id=100090862297917"><i class="fa-brands fa-facebook" style="color: blue;"></i> </a> 
            <a href="https://www.instagram.com/luxeach.ad/?__coig_restricted=1"><i class="fa-brands fa-instagram" style="color: deeppink;"></i></a>
            <a href="viber://chat?number=38343707469" target="_blank"><i class="fa-brands fa-viber" style="color:blueviolet"></i></a>
             <a href="https://wa.me/38343707469" target="_blank"><i class="fa-brands fa-whatsapp" style="color: chartreuse;"></i></a>
         </div> 


    </div>
















    <div class="Sunglass">
        
            <!-- <img src="../assets/Photo/Syzat/Background/foto3 (2).jpg" alt="" class="ImgSunglass" style="width: 100%; height:75vh"> -->
         

    </div>
    <i class="fa-solid fa-glasses icon-glass"></i>
    <h1>Brendet më të fundit te syzeve mundeni të i gjeni ketu.Me çmim të volitshumë dhe të arsyeshumë për ju. </h1>



    <div class="ProduktetFundit">


               <!-- MODALET -->


               <div class="infosell1" >
      <i class="fa-solid fa-xmark close-mark-sell1"></i>

        <div class="info">
        <h2>Porosia u be me sukses   <span>☑️</span>  </h2>
        <p></p>
        <p>Porosia per Kosove do te mberrij mbrenda 24 ore.  <br/> Ndersa për Shqipëri dhe Maqedoni 2 deri ne 3 ditë.  </p>
         <br><br><br>
         <!-- <p>Per cdo informat na kontakotni ne rrjetet tona sociale</p> -->
         
         <div class="iconeFooter">
                    <a href="https://m.me/100090862297917" target="_blank"><i class="fa-brands fa-facebook-messenger" style="color: #0a64e3;"></i>                    </a> 
                    <a href="https://www.instagram.com/luxeach.ad/?__coig_restricted=1"><i class="fa-brands fa-instagram" style="color: deeppink;"></i></a>
                    <a href="viber://chat?number=38343707469" target="_blank"><i class="fa-brands fa-viber" style="color:blueviolet"></i></a>
                    <a href="https://wa.me/38343707469" target="_blank"><i class="fa-brands fa-whatsapp" style="color: chartreuse;"></i></a>
                 </div> 
                 </div>
      </div>














       

               <div class="modal-2">
                <i class="fa-solid fa-xmark close-mark1"></i>
    
                <div class="header">
                    <div class="container">
                        <div class="slider">
                          <div class="slider__slides">
                            <div class="slider__slide active">
                               <img src="" alt="Fotografia ka probleme" name="image11" />
                            </div>
                            <div class="slider__slide">
                                <img src="" alt="Fotografia ka probleme" name="image22" />
                            </div>
                            <div class="slider__slide">
                                <img src="" alt="Fotografia ka probleme" name="image33" />
                            </div>
                           
                          </div>
                          <div id="nav-button--prev" class="slider__nav-button"></div>
                          <div id="nav-button--next" class="slider__nav-button"></div>
                          <div id="nav-button--next1" class="slider__nav-button"></div>

                          <div class="slider__nav">
                            <div class="slider__navlink active"></div>
                            <div class="slider__navlink"></div>
                            <div class="slider__navlink"></div>

                          
                          </div>
                        </div>
                        
                        <div class="Detajet" style=" display: flex; flex-direction: column;">
                            
                            <strong style="color: red;">Detajet e produktit<p class=""></p> </strong>
                            <strong>Produkti:<span class="EmriProduktit"></span> </strong>
                            <strong>Firma:<span class="FirmaProduktit"></span> </strong>
                            <strong>Ngjyra:<span class="NgjyraProduktit"></span> </strong>
    
                        </div>
    
                      </div>
                </div>
                <div class="body">
             
              


                <form action="#" method="post" id="manage_user1" autocomplete="off">
              <div class="form-group" style='height:22px'>
              <input class="text" type="text" name="emri" id="" placeholder="Emrin(name)" >
              </div>
              <br>
              <div class="form-group" style='height:22px'>
              <input class="text1" type="text" name="mbiemri" id="" placeholder="Mbiemrin(surname)" >
              </div>
              <br>
              <div class="form-group" style='height:22px'>
              <input class="text2" type="text" name="shteti" id="" placeholder="Shtetin(country)" >
              </div>
              <br>
              <div class="form-group" style='height:22px'>
              <input class="text3" type="text" name="qyteti" id="" placeholder="Qytetin(city)" >
              </div>
              <br>
              <div class="form-group" style='height:22px'>
              <input class="text4" type="text" name="adresa" id="" placeholder="adresen(adress)" >
              </div>
              <br>
              <div class="form-group" style='height:22px'>
              <input class="text5" type="text" name="telefoni" id="" placeholder="Numrin(number)" >
              </div>
              <br>
              <div class="form-group">
                <button class="btn btn-success button-modal2" type="submit" >Porosit</button>
              </div>
              <div id="error_msg"></div>
              <input class='inputfoto' type="text" name='emrifotot' value='' >

            </form>

            <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
                
            </div>
    
                <div class="footer">
                    <p>* Porosia ju dërgohet me Post.Posta për Kosove është falas për Shqiperi dhe Maqedoni është 3€</p>
                    <p style="display: flex;justify-content: center;  color: green;">Porosit mundeni të i beni edhe në:</p>
                    <div class="iconeFooter">
                        <a href="https://m.me/100090862297917" target="_blank"><i class="fa-brands fa-facebook-messenger" style="color: #0a64e3;"></i>                    </a> 
                        <a href="https://www.instagram.com/luxeach.ad/?__coig_restricted=1"><i class="fa-brands fa-instagram" style="color: deeppink;"></i></a>
                        <a href="viber://chat?number=38343707469" target="_blank"><i class="fa-brands fa-viber" style="color:blueviolet"></i></a>
                        <a href="https://wa.me/38343707469" target="_blank"><i class="fa-brands fa-whatsapp" style="color: chartreuse;"></i></a>
                     </div>  
                </div>
    
               
    
                 
    
    
            </div>












       

        <div class="TeGjithaProduktet">
            <div class="Card SyzeOpenCard1">
                <img src="../assets/Photo/Syzat/SyzaGrass/L (2).png" alt="" style="width: 100%; height: 280px; " class='img2'>
                <div class="CmimiProd">
                    <span>Syze dielli PRADA </span>
                        12.99€
                    </p>
                    
                    <button>Bli tani</button>
                </div>
               

            </div>
            <div class="Card SyzeOpenCard2">
                <img src="../assets/Photo/Syzat/SyzaGrass/SyzaGrass5.png" alt="" style="width: 100%; height: 280px; " class='img3'>
                <div class="CmimiProd">
                    <span>Syze dielli PRADA </span>
                        10.99€
                    </p>
                <button>Bli tani</button>
                </div>
                

            </div>
            <div class="Card SyzeOpenCard3">
                <img src="../assets/Photo/Syzat/SyzaGrass/SyzaGrass10.png" alt="" style="width: 100%; height: 280px; " class='img4'>
                <div class="CmimiProd">
                    <span>Syze dielli  </span>
                    11.99€
                </p>

                <button>Bli tani</button>
                </div>
                

            </div>
            <div class="Card SyzeOpenCard4">
                <img src="../assets/Photo/Syzat/SyzaGrass/L (49).png" alt="" style="width: 100%; height: 280px; "  class='img5'>
                <div class="CmimiProd">
                    <span>Syze dielli ARMANI </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card SyzeOpenCard5">
                <img src="../assets/Photo/Syzat/SyzaGrass/SyzaGrass47.png" alt="" style="width: 100%; height: 280px; " class='img6'>
                <div class="CmimiProd">
                    <span>Syze dielli </span>
                    9.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card SyzeOpenCard6">
                <img src="../assets/Photo/Syzat/SyzaGrass/L (27).png" alt="" style="width: 100%; height: 280px; " class='img7'>
                <div class="CmimiProd">
                    <span>Syze dielli BURBERRY </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card SyzeOpenCard7">
                <img src="../assets/Photo/Syzat/SyzaGrass/L (24).png" alt="" style="width: 100%; height: 280px; " class='img8'>
                <div class="CmimiProd">
                    <span>Syze dielli Dolce Gabbana </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card  SyzeOpenCard8">
                <img src="../assets/Photo/Syzat/SyzaGrass/L (50).png" alt="" style="width: 100%; height: 280px; " class='img9'>
                <div class="CmimiProd">
                    <span>Syze dielli </span>
                    11.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card SyzeOpenCard9">
                <img src="../assets/Photo/Syzat/SyzaGrass/L (3).png" alt="" style="width: 100%; height: 280px; " class='img10'>
                <div class="CmimiProd">
                    <span>Syze dielli VERSACE </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card SyzeOpenCard10">
                <img src="../assets/Photo/Syzat/SyzaGrass/SyzaGrass30.png" alt="" style="width: 100%; height: 280px; " class='img11'>
                <div class="CmimiProd">
                    <span>Syze dielli FENDI </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card SyzeOpenCard11">
                <img src="../assets/Photo/Syzat/SyzaGrass/SyzaGrass3.png" alt="" style="width: 100%; height: 280px; " class='img12'>
                <div class="CmimiProd">
                    <span>Syze dielli PRADA </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card SyzeOpenCard12">
                <img src="../assets/Photo/Syzat/SyzaGrass/L (18).png" alt="" style="width: 100%; height: 280px; " class='img13'>
                <div class="CmimiProd">
                    <span>Syze dielli VERSACE </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card SyzeOpenCard13">
                <img src="../assets/Photo/Syzat/SyzaGrass/SyzaGrass41.png" alt="" style="width: 100%; height: 280px; " class='img14'>
                <div class="CmimiProd">
                    <span>Syze dielli VERSACE </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card SyzeOpenCard14">
                <img src="../assets/Photo/Syzat/SyzaGrass/SyzaGrass42.png" alt="" style="width: 100%; height: 280px; " class='img15'>
                <div class="CmimiProd">
                    <span>Syze dielli  </span>
                    9.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card SyzeOpenCard15">
                <img src="../assets/Photo/Syzat/SyzaGrass/SyzaGrass27.png" alt="" style="width: 100%; height: 280px; " class='img16'>
                <div class="CmimiProd">
                    <span>Syze dielli  </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card SyzeOpenCard16">
                <img src="../assets/Photo/Syzat/SyzaGrass/SyzaGrass21.png" alt="" style="width: 100%; height: 280px; " class='img17'>
                <div class="CmimiProd">
                    <span>Syze dielli VERSACE </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card SyzeOpenCard17">
                <img src="../assets/Photo/Syzat/SyzaGrass/SyzaGrass29.png" alt="" style="width: 100%; height: 280px; " class='img18'>
                <div class="CmimiProd">
                    <span>Syze dielli  </span>
                    10.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>

            <div class="Card SyzeOpenCard18">
                <img src="../assets/Photo/Syzat/SyzaGrass/SyzaGrass35.png" alt="" style="width: 100%; height: 280px; " class='img19'>
                <div class="CmimiProd">
                    <span>Syze dielli  </span>
                    10.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card SyzeOpenCard19">
                <img src="../assets/Photo/Syzat/SyzaGrass/SyzaGrass40.png" alt="" style="width: 100%; height: 280px; " class='img20'>
                <div class="CmimiProd">
                    <span>Syze dielli  </span>
                    10.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card SyzeOpenCard20">
                <img src="../assets/Photo/Syzat/SyzaGrass/SyzaGrass55.png" alt="" style="width: 100%; height: 280px; " class='img21'>
                <div class="CmimiProd">
                    <span>Syze dielli  </span>
                    10.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card SyzeOpenCard21">
                <img src="../assets/Photo/Syzat/SyzaGrass/SyzaGrass56.png" alt="" style="width: 100%; height: 280px; " class='img22'>
                <div class="CmimiProd">
                    <span>Syze dielli  </span>
                    10.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card SyzeOpenCard22">
                <img src="../assets/Photo/Syzat/SyzaGrass/SyzaGrass57.png" alt="" style="width: 100%; height: 280px; " class='img23'>
                <div class="CmimiProd">
                    <span>Syze dielli  </span>
                    10.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <!-- <div class="Card SyzeOpenCard23">
                <img src="../assets/Photo/Syzat/SyzaGrass/SyzaGrass58.jpg" alt="" style="width: 100%; height: 280px; " class='img18'>
                <div class="CmimiProd">
                    <span>Syze dielli  </span>
                    10.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div> -->
            <div class="Card SyzeOpenCard24">
                <img src="../assets/Photo/Syzat/SyzaGrass/L (11).png" alt="" style="width: 100%; height: 280px; " class='img24'>
                <div class="CmimiProd">
                    <span>Syze dielli Dolce Gabbana  </span>
                    10.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card SyzeOpenCard25">
                <img src="../assets/Photo/Syzat/SyzaGrass/L (16).png" alt="" style="width: 100%; height: 280px; " class='img25'>
                <div class="CmimiProd">
                    <span>Syze dielli VERSACE </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card SyzeOpenCard26">
                <img src="../assets/Photo/Syzat/SyzaGrass/L (43).png" alt="" style="width: 100%; height: 280px; " class='img26'>
                <div class="CmimiProd">
                    <span>Syze dielli  </span>
                    10.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card SyzeOpenCard27">
                <img src="../assets/Photo/Syzat/SyzaGrass/L (32).png" alt="" style="width: 100%; height: 280px; " class='img27'>
                <div class="CmimiProd">
                    <span>Syze dielli  </span>
                    10.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card SyzeOpenCard28">
                <img src="../assets/Photo/Syzat/SyzaGrass/L (36).png" alt="" style="width: 100%; height: 280px; " class='img28'>
                <div class="CmimiProd">
                    <span>Syze dielli PRADA</span>
                    10.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            

        </div>


        
</div>



<script>
                    
                    document.querySelector('.SyzeOpenCard1').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img2').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard2').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img3').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard3').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img4').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard4').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img5').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard5').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img6').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard6').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img7').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard7').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img8').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard8').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img9').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard9').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img10').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard10').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img11').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard11').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img12').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard12').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img13').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard13').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img14').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard14').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img15').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard15').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img16').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard16').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img17').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard17').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img18').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard18').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img19').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard19').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img20').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard20').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img21').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard21').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img22').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard22').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img23').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                  
                    document.querySelector('.SyzeOpenCard24').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img24').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard25').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img25').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard26').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img26').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard27').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img27').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.SyzeOpenCard28').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img28').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })


                 </script>




   
</body>


<footer>

<div class="headerFooter">
        <div class="logoFooter">
            <img src="../assets/logo/Untitled design (30).png" alt="" style="width:100px; height: 100px;  " class="imgLogo" >
             <p>A taste for luxe</p>
            
        </div>
        <div class="divi1">
            <h3>Dyqani i jonë</h2>
            <p>Luxeach është dyqan që bënë shitjen e Aksesoreve dhe produkteve tjera që po i shihni në faqen tonë. </p>
        </div>
        <div class="divi2">
            <h3>Produktet</h3>
            <p>Luxeach ofron disa produkte këto janë:Syze dielli,Ora dore,Qanta,Rroba për fëmije etj.</p>
        </div>
        <div class="divi3">
            <h3>Linqet </h3>
            <p>
                <a href="https://www.facebook.com/profile.php?id=100090862297917">Facebook account </a></br>
                <a href="https://www.instagram.com/luxeach.ad/?__coig_restricted=1">Instagram account</a>
                <a href="https://www.styledblonde.com/2018/01/10-best-places-to-buy-accessories-online.html">Accesores top website</a>


            </p>
        </div>
        <div class="divi4">
            <h3>Kontakti</h3>
            <p>
                Email:luxeach58@gmail.com,<br>
                Tel.:+38343707469, <br>
                Facebook:luxeach,<br>
                Instagram:luxeach.ad

            </p>
        </div>
    </div>
    <hr>
    <div class="footerFooter">
        <div class="iconeFooter">
            <a href="https://www.facebook.com/profile.php?id=100090862297917"><i class="fa-brands fa-facebook" style="color: blue;"></i> </a> 
            <a href="https://www.instagram.com/luxeach.ad/?__coig_restricted=1"><i class="fa-brands fa-instagram" style="color: deeppink;"></i></a>
            <a href="viber://chat?number=38343707469" target="_blank"><i class="fa-brands fa-viber" style="color:blueviolet"></i></a>
             <a href="https://wa.me/38343707469" target="_blank"><i class="fa-brands fa-whatsapp" style="color: chartreuse;"></i></a>
         </div> 
    <div class="copyright">

    <p>@2023 Copyright:wwww.luxeach.com</p>
</div>


    </div>
    
    <!-- <div>

    </div> -->

</footer>
<script src="././Js/SyzeDielli.js"></script>
<script src="../Produktet/Js/ndryshim.js"></script>
<script src="../Produktet/Js/messanger1.js"></script>
<script src="action1.js"></script>



</html>