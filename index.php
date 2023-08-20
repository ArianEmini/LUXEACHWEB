<!DOCTYPE  html >
<html lang="en" style="padding: 0; margin: 0;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='shortcut icon' type='x-icon' href='assets/logo/Untitled design (25).png' />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Luxeach</title>
</head>
<?php error_reporting (E_ALL ^ E_NOTICE); ?> 
<?php error_reporting(0);


?> 
<div class="preloader">
    
    </div>

    <script>
        var loader=document.querySelector('.preloader');

        window.addEventListener("load",function(){
            loader.style.display='none'
        })
    </script>


<header>
    <nav class="nav">
        <div >
           <a href="#Homee" class="name"> 
            <img src="assets/logo/Untitled design (25).png" alt="" style="width:50px; height: 50px;  " class="imgLogo" >
            <span class="name">Luxeach</span>
           </a>
            
        </div>
        <ul class="mainNav">
            <li><a href="#Homee" class="Ballina">Ballina</a></li>
            <li  class="produkti" onclick='myFunction()'><span href="" class="Produkti"  style='font-size:20px; font-weight: bold;'>Produktet</span>

                   <div  class="arrowdown">
                    <i class="fa-solid fa-angle-down"></i>

                   </div>
                   <div class="arrowup">
                    <i class="fa-solid fa-angle-up" ></i>

                   
                    <div class="mainProdukt" >
                        <a href="Produktet/SyzeDielli.php"  style="padding-left: 10px;"> <span><i class="fa-solid fa-glasses" style="color: blue;margin-right: 10px; "></i>Syze dieli</span></a>
                        <!-- <hr> -->
                        <a href="Produktet/OraDore.php" style="padding-left: 10px;"> <span><img src="assets/logo/wristwatch.png"style ="height:20px; width:20px;  margin-right: 10px; "alt=""> Ora dore</span></a>
                        <!-- <hr> -->
                        <a href="Produktet/Qanta.html"  style="padding-left: 10px;"><span><i class="fa-solid fa-bag-shopping"  style="color: red
                        ; margin-right: 10px;"></i>Qanta </span></a>
                       <!-- <hr> -->
                       <a href="Produktet/RrobaPerFemije.html"  style="padding-left: 10px;"><span><i class="fa-solid fa-shirt" style="color: rgb(194, 14, 203);margin-right: 10px; "></i>Rroba për fëmijë</span></a>
        
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
        
        
            <li><a href="Produktet/InformataPerNe.html" class="info">Informata për ne</a></li>

            
           
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
            <a href="./index.php" class="namee"> 
                <img src="assets/logo/Untitled design (25).png" alt="" style="width:50px; height: 50px;  " class="imgLogoo" >
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





<body id="Homee" >

    <!-- <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-91eff5b4-c33d-4bea-be4d-aeff2ef20e98"></div> -->

    <!-- Messanger -->
    <div class="main-msg">
        <div class="header">
         <div class="img">
            <img src="assets/logo/Untitled design (20).png" alt="" style="height: 70px; width:70px">
            <div class="green"></div>

         </div>
         <div class="account">
            <h2>Luxeach</h2>
            <p>Përgjigjja do të kthehet shumë shpejt</p>
         </div>
         <i class="fa-solid fa-xmark close-res-msg"></i>

        </div>
        <div class="body">
            <p class="date-hour"></p>
            <div class="chat">
                <div class="img">
                    <img src="assets/logo/Untitled design (20).png" alt="" style="height: 50px; width:50px">

                </div>
                <div class="comment">Përshendetje. <br><br>

                    Si mundemi të ju  ndihmojmë?</div>
            </div>
            <a href="https://m.me/100090862297917" target="_blank" class="btn-msg"><button ><i class="fa-brands fa-facebook-messenger"></i>
                Start Chat
            </button></a>

        </div>
    </div>

    <div class="messanger">
        <div class="red"></div>
        <i class="fa-brands fa-facebook-messenger"></i>
    </div>






    <!-- Main -->
    <div class="Main-Reponse">
       
        <i class="fa-solid fa-xmark close-res"></i>
        <a href="./index.php" class="name"> 
            <img src="assets/logo/Untitled design (25).png" alt="" style="width:100px; height: 100px;  " class="imgLogo" >
           </a>

        <ul class="mainNav">
            <li><a href="#Homee" class="Ballina">Ballina</a></li>
            <li  class="produkti" onclick='myFunctionRes()' ><span href="" class="Produkti" >Produktet</span>

                   <div  class="arrowdown-res">
                    <i class="fa-solid fa-angle-down"></i>

                   </div>
                   <div class="arrowup-res">
                    <i class="fa-solid fa-angle-up" ></i>

                   
                      
                   </div>

                   
                  
                  
               
            </li>
            <div class="mainProduktResponse" >
                <a href="Produktet/SyzeDielli.php"  style="padding-left: 10px;"> <span><i class="fa-solid fa-glasses" style="color: blue;margin-right: 10px; "></i>Syze dieli</span></a>
                <a href="Produktet/OraDore.php" style="padding-left: 10px;"> <span><img src="assets/logo/wristwatch.png"style ="  margin-right: 8px; "alt=""> Ora dore</span></a>
                <a href="Produktet/Qanta.html"  style="padding-left: 10px;"><span><i class="fa-solid fa-bag-shopping"  style="color: red
                ; margin-right: 10px;"></i>Qanta </span></a>
               <a href="Produktet/RrobaPerFemije.html"  style="padding-left: 10px;"><span><i class="fa-solid fa-shirt" style="color: rgb(194, 14, 203);margin-right: 10px; "></i>Rroba për fëmijë</span></a>
              </div>
        


        
            <li><a href="Produktet/InformataPerNe.html" class="info">Informata për ne</a></li>

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









    <div class="Body-main">
        <div class="left">
            <img src="assets/logo/Untitledluxeach.png" alt="" style="width: 20%; height: 20%; margin-left: 3%; margin-top:30px; border-radius: 60px;">
            <div class="Paragraf">
                <!-- <h2>Luxeach</h2> -->
                <p>Ashtu që nga komoditeti i shtëpise tuaj të posedoni luks dhe kualitet.
                Nëse doni të keni diçka që nuk e keni pasur kurrë, këtë do ta gjeni tek LUXEACH </p>
                <a href="#ProduktetFundit"><button>Shiko produketet e fundit</button> </a> 
                
            </div>

          
        </div>
        <div class="right">
            <!-- <img src="assets/Photo/Untitled design (29).png" alt=""> -->
            <div class="icon">
            <i class="fa-solid fa-cart-shopping">
                <i class="fa-solid fa-bag-shopping">

                      
                </i>

                <i class="fa-brands fa-shopify"></i>

             
            </i>
            


            

        </div>
        </div>

    </div>

    <div id="ProduktetFundit"></div>

    <div class="ProduktetFundit" >
        <div class="ProduktetMeTeShitura">
            <h2 class="paraMeShitura">Shiko 10 produktet tona më të shitura</h2>

            <div class="ProduktetShitura">
            <div class="Photo">
               <img src="" alt="" name='slider'  width="500px" height="400px">
            </div>
            <a href="Produktet/ProduktetMeTeShitura.php"><button>Shiko 10 produktet më të shitura</button></a>

        </div>
        </div>
        <h1  class='shikoProd'style='margin-top:50px;'>Shiko produketet e fundit </h1>
        <hr style='margin-bottom:50px;'>



        <!-- MODALET -->


      <div class="infosell" >
      <i class="fa-solid fa-xmark close-mark-sell"></i>

        <div class="info">
        <h2>Porosia u bë me sukses   <span>☑️</span>  </h2>
        <p>Porosia për Kosove do të mbërrij mbrenda 24 orëve.  <br/> Ndërsa për Shqiperi dhe Maqedoni 2 deri në 3 ditë.  </p>
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






       
      

        <div class="modal-1">
            <i class="fa-solid fa-xmark close-mark"></i>

            <div class="header">
                <div class="container">
                    <div class="slider">
                      <div class="slider__slides">
                        <div class="slider__slide active">
                           <img src="assets/Photo/Syzat/foto11.png" alt="Fotografia ka probleme" name="image1" />
                        </div>
                        <div class="slider__slide">
                            <img src="assets/Photo/Syzat/foto12.png" alt="Fotografia ka probleme" name="image2" />
                        </div>
                        <div class="slider__slide">
                            <img src="assets/Photo/Syzat/foto12.png" alt="Fotografia ka probleme" name="image3" />
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
                        
                        <strong style="color: red;">Detajet e produktit </strong>
                        <strong>Produkti:<span class="EmriProduktit"></span> </strong>
                        <strong>Firma:<span class="FirmaProduktit"></span> </strong>
                        <strong>Ngjyra:<span class="NgjyraProduktit"></span> </strong>

                    </div>

                  </div>
            </div>
            
           
           
                  
                 

           
            <div class="body">
            
            <form action="#" method="post" id="manage_user" autocomplete="off">
              <div class="form-group"  >
              <input class="text" type="text" name="emri" id=""   placeholder="Emrin(name)" >
              </div>
              <br>
              <div class="form-group" >
              <input class="text1" type="text" name="mbiemri" id="" placeholder=" Mbiemrin(surname)" >
              </div>
              <br>
              <div class="form-group" >
              <input class="text2" type="text" name="shteti" id="" placeholder=" Shtetin(country)" >
              </div>
              <br>
              <div class="form-group" >
              <input class="text3" type="text" name="qyteti" id="" placeholder=" Qytetin(city)" >
              </div>
              <br>
              <div class="form-group" >
              <input class="text4" type="text" name="adresa" id="" placeholder=" Adresen(adressa)" >
              </div>
              <br>
              <div class="form-group" >
              <input class="text5" type="text" name="telefoni" id="" placeholder=" Numrin(number)" >
              </div>
              <br>
              <div class="form-group">
                <button class="btn btn-success button-modal1" type="submit" >Porosit</button>
              </div>
              <div id="error_msg"></div>
              <input class='inputfoto' type="text" name='emrifotot' value='' >

            </form>
         
            
            
            
        </div>

        <!-- <script>
      var formToReset = document.querySelector('.text');
      var butoninput=document.querySelector('.inputfoto'); 

      butoninput.addEventListener('click',function(){
        formToReset.value='1212'

      });


      
   </script> -->

       
       

            <div class="footer">
                <p>* Porosia ju dergohet me Poste.Posta për Kosove është falas për Shqiperi dhe Maqedoni është 3€</p>
                <p style="display: flex;justify-content: center; color: green;">Porosit mundeni të i bëni edhe në:</p>
                <div class="iconeFooter">
                    <a href="https://m.me/100090862297917" target="_blank"><i class="fa-brands fa-facebook-messenger" style="color: #0a64e3;"></i>                    </a> 
                    <a href="https://www.instagram.com/luxeach.ad/?__coig_restricted=1"><i class="fa-brands fa-instagram" style="color: deeppink;"></i></a>
                    <a href="viber://chat?number=38343707469" target="_blank"><i class="fa-brands fa-viber" style="color:blueviolet"></i></a>
                    <a href="https://wa.me/38343707469" target="_blank"><i class="fa-brands fa-whatsapp" style="color: chartreuse;"></i></a>
                 </div> 
            </div>

           

             


        </div>
        
        





        
















        <div class="TeGjithaProduktet">
            <div class="Card openCard">
                <img src="assets/Photo/Syzat/SyzaGrass/L (2).png" alt="" style="width: 100%; height: 280px; " class='img1'>
                <div class="CmimiProd">
                    <span>Syze dielli PRADA </span>
                        12.99€
                    </p>
                    
                    <button>Bli tani</button>
                </div>
               

            </div>
            <div class="Card openCard1">
                <img src="assets/Photo/Syzat/SyzaGrass/L (36).png" alt="" style="width: 100%; height: 280px; "class='img2'>
                <div class="CmimiProd">
                    <span>Syze dielli PRADA </span>
                        12.99€
                    </p>
                <button>Bli tani</button>
                </div>
                

            </div>
            <div class="Card openCard2">
                <img src="assets/Photo/Syzat/SyzaGrass/L (57).png" alt="" style="width: 100%; height: 280px; " class='img3'>
                <div class="CmimiProd">
                    <span>Syze dielli </span>
                    12.99€
                </p>

                <button>Bli tani</button>
                </div>
                

            </div>
            <div class="Card openCard3">
                <img src="assets/Photo/Syzat/SyzaGrass/L (47).png" alt="" style="width: 100%; height: 280px; " class='img4'>
                <div class="CmimiProd">
                    <span>Syze dielli ARMANI </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card openCard4">
                <img src="assets/Photo/Syzat/SyzaGrass/L (45).png" alt="" style="width: 100%; height: 280px; " class='img5'>
                <div class="CmimiProd">
                    <span>Syze dielli PRADA </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card openCard5">
                <img src="assets/Photo/Syzat/SyzaGrass/L (27).png" alt="" style="width: 100%; height: 280px; " class='img6'>
                <div class="CmimiProd">
                    <span>Syze dielli BURBERRY </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card openCard6">
                <img src="assets/Photo/Ora/foto1.jpg" alt="" style="width: 100%; height: 280px; " class='img7'>
                <div class="CmimiProd">
                    <span>Ora për qifte</span>
                    44.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card openCard7">
                <img src="assets/Photo/Ora/foto10.png" alt="" style="width: 100%; height: 280px; " class='img8'>
                <div class="CmimiProd">
                    <span>Orë Rolex </span>
                    22.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card openCard8">
                <img src="assets/Photo/Syzat/SyzaGrass/L (5).png" alt="" style="width: 100%; height: 280px; " class='img9'>
                <div class="CmimiProd">
                    <span>Syze dielli VERSACE </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card openCard9">
                <img src="assets/Photo/Syzat/SyzaGrass/L (10).png" alt="" style="width: 100%; height: 280px; " class='img10'>
                <div class="CmimiProd">
                    <span>Syze dielli FENDI </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card openCard10">
                <img src="assets/Photo/Syzat/SyzaGrass/L (50).png" alt="" style="width: 100%; height: 280px; " class='img11'>
                <div class="CmimiProd">
                    <span>Syze dielli  </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card openCard11">
                <img src="assets/Photo/Syzat/SyzaGrass/L (17).png" alt="" style="width: 100%; height: 280px; " class='img12'>
                <div class="CmimiProd">
                    <span>Syze dielli VERSACE </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card openCard12">
                <img src="assets/Photo/Ora/foto13.png" alt="" style="width: 100%; height: 280px; " class='img13'>
                <div class="CmimiProd">
                    <span>Orë dore </span>
                    14.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card openCard13">
                <img src="assets/Photo/Ora/foto12.png" alt="" style="width: 100%; height: 280px; " class='img14'>
                <div class="CmimiProd">
                    <span>Orë S&T </span>
                    16.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card openCard14">
                <img src="assets/Photo/Syzat/SyzaGrass/L (22).png" alt="" style="width: 100%; height: 280px; "class='img15'>
                <div class="CmimiProd">
                    <span>Syze dielli  </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card openCard15">
                <img src="assets/Photo/Syzat/SyzaGrass/L (14).png" alt="" style="width: 100%; height: 280px; "class='img16'>
                <div class="CmimiProd">
                    <span>Syze dielli VERSACE</span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            

        </div>


        
</div>


<script>
                    
                    document.querySelector('.openCard').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img1').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })


                    document.querySelector('.openCard1').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img2').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.openCard2').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img3').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.openCard3').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img4').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.openCard4').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img5').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.openCard5').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img6').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.openCard6').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img7').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.openCard7').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img8').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.openCard8').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img9').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.openCard9').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img10').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.openCard10').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img11').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.openCard11').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img12').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.openCard12').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img13').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.openCard13').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img14').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.openCard14').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img15').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.openCard15').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img16').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                  


                 </script>








   
</body>


<footer >

    <div class="headerFooter">
        <div class="logoFooter">
            <img src="assets/logo/Untitled design (30).png" alt="" style="width:100px; height: 100px;  " class="imgLogo" >
             <p>A taste for luxe</p>
            
        </div>
        <div class="divi1">
            <h3>Dyqani i jonë</h2>
            <p>Luxeach është dyqan që bënë shitjen e Aksesoreve dhe produkteve tjera që po i shihni në faqen tonë. </p>
        </div>
        <div class="divi2">
            <h3>Produktet</h3>
            <p>Luxeach ofron disa produkte keto janë:Syze dielli,Ora dore,Qanta,Rroba për fëmije etj.</p>
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
<script src="js.js"></script>
<script src="Produktet/Js/ndryshim.js"></script>
<script src="Produktet/Js/messanger.js"></script>
<script src='action.js'></script>

</html>