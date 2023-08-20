<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/ProduktetMeTeShitura.css">
    <link rel='shortcut icon' type='x-icon' href='../assets/logo/Untitled design (25).png' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Luxeach</title>
</head>
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
        <div>
           <a href="../index.php" class="name"> 
            <img src="../assets/logo/Untitled design (25).png" alt="" style="width:50px; height: 50px;  " class="imgLogo" >
            <span class="name">Luxeach</span>
           </a>
            
        </div>
        <ul class="mainNav">
            <li><a href="../index.php" class="Ballina">Ballina</a></li>
            <li  class="produkti" onclick='myFunction()' ><span href="" class="Produkti" >Produktet</span>

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
                       <a href="RrobaPerFemije.html"  style="padding-left: 10px; "><span><i class="fa-solid fa-shirt" style="color: rgb(194, 14, 203);padding-right: 10px; "></i>Rroba për fëmije</span></a>
        
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
        
        
            <li><a href="../Produktet/InformataPerNe.html" class="info">Informata për ne</a></li>


            
           
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
     <div class="main-msg6">
        <div class="header">
         <div class="img">
            <img src="../assets/logo/Untitled design (20).png" alt="" style="height: 70px; width:70px">
            <div class="green"></div>

         </div>
         <div class="account">
            <h2>Luxeach</h2>
            <p>Përgjigjja do te kthehet shumë shpejt</p>
         </div>
         <i class="fa-solid fa-xmark close-res-msg6"></i>

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

    <div class="messanger6">
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
            <li  class="produkti" onclick='myFunctionRes()'><span href="" class="Produkti" >Produktet</span>

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
               <a href="RrobaPerFemije.html"  style="padding-left: 10px;"><span><i class="fa-solid fa-shirt" style="color: rgb(194, 14, 203);margin-right: 10px; "></i>Rroba për fëmije</span></a>

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
    <!-- <img src="../assets/Photo/Top10_marketplaces.jpg" style="width: 100px; height: 100px;" class="icon-glass"  alt=""> -->
    <!-- <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, recusandae provident aspernatur quod et quibusdam enim quis animi? Dignissimos, a?</h1> -->



    <div class="ProduktetFundit">
       

        <div class="TeGjithaProduktet">
            <!-- <div class="Card">
                <img src="../assets/Photo/Ora/foto1.jpg" alt="" style="width: 100%; height: 280px; ">
                <div class="CmimiProd">
                    <span>Syze dielli PRADA </span>
                        12.99€
                    </p>
                    
                    <button>Bli tani</button>
                </div>
               

            </div> -->
            <!-- <div class="Card">
                <img src="../assets/Photo/Ora/foto2.jpg" alt="" style="width: 100%; height: auto; ">
                <div class="CmimiProd">
                    <span>Syze dielli PRADA </span>
                        12.99€
                    </p>
                <button>Bli tani</button>
                </div>
                

            </div> -->



              <!-- MODALET -->


              <div class="infosell1" >
      <i class="fa-solid fa-xmark close-mark-sell1"></i>

        <div class="info">
        <h2>Porosia u be me sukses   <span>☑️</span>  </h2>
        <p></p>
        <p>Porosia për Kosove do të mbërrij mbrenda 24 orëve.  <br/> Ndërsa për Shqiperi dhe Maqedoni 2 deri ne 3 ditë.  </p>
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
                <i class="fa-solid fa-xmark close-mark2"></i>
    
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

                <form action="#" method="post" id="manage_user3" autocomplete="off">
              <div class="form-group" style='height:22px'>
              <input class="text" type="text" name="emri" id="" placeholder="Emri(name)" >
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
              <input class="text4" type="text" name="adresa" id="" placeholder="Adresen(adress)" >
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
                
            </div>
    
                <div class="footer">
                    <p>* Porosia ju dergohet me Post.Posta për Kosove është falas për Shqiperi dhe Maqedoni është 3€</p>
                    <p style="display: flex;justify-content: center;  color: green;">Porosit mundeni te i beni edhe ne:</p>
                    <div class="iconeFooter">
                        <a href="https://m.me/100090862297917" target="_blank"><i class="fa-brands fa-facebook-messenger" style="color: #0a64e3;"></i>                    </a> 
                        <a href="https://www.instagram.com/luxeach.ad/?__coig_restricted=1"><i class="fa-brands fa-instagram" style="color: deeppink;"></i></a>
                        <a href="viber://chat?number=38343707469" target="_blank"><i class="fa-brands fa-viber" style="color:blueviolet"></i></a>
                        <a href="https://wa.me/38343707469" target="_blank"><i class="fa-brands fa-whatsapp" style="color: chartreuse;"></i></a>
                     </div> 
                </div>
    
               
    
                 
    
    
            </div>













            <div class="Card OpenShCard">
                <img src="../assets/Photo/Syzat/SyzaGrass/L (2).png" alt="" style="width: 100%; height: 280px; " class='img1'>
                <div class="CmimiProd">
                    <span>Syze dielli PRADA </span>
                    12.99€
                </p>

                <button>Bli tani</button>
                </div>
                

            </div>
            <div class="Card OpenShCard1">
                <img src="../assets/Photo/Syzat/SyzaGrass/L (36).png" alt="" style="width: 100%; height: 280px; " class='img2'>
                <div class="CmimiProd">
                    <span>Syze dielli PRADA </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card OpenShCard2">
                <img src="../assets/Photo/Ora/L (1).png" alt="" style="width: 100%; height: 280px; "class='img3'>
                <div class="CmimiProd">
                    <span>Orë ARMANI </span>
                    14.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card  OpenShCard3">
                <img src="../assets/Photo/Ora/foto7.png" alt="" style="width: 100%; height: 280px; " class='img4'>
                <div class="CmimiProd">
                    <span>Orë VERSACE </span>
                    14.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card OpenShCard4">
                <img src="../assets/Photo/Syzat/SyzaGrass/L (9).png" alt="" style="width: 100%; height: 280px; " class='img5'>
                <div class="CmimiProd">
                    <span>Syze dielli FENDI </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card OpenShCard5">
                <img src="../assets/Photo/Syzat/SyzaGrass/L (17).png" alt="" style="width: 100%; height: 280px; " class='img6'>
                <div class="CmimiProd">
                    <span>Syze dielli VERSACE </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card OpenShCard6">
                <img src="../assets/Photo/Syzat/SyzaGrass/L (47).png" alt="" style="width: 100%; height: 280px; " class='img7'>
                <div class="CmimiProd">
                    <span>Syze dielli ARMANI </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card OpenShCard7">
                <img src="../assets/Photo/Syzat/SyzaGrass/L (57).png" alt="" style="width: 100%; height: 280px; " class='img8'>
                <div class="CmimiProd">
                    <span>Syze dielli  </span>
                    12.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card OpenShCard8">
                <img src="../assets/Photo/Ora/OraGrass/OraGrass15.png" alt="" style="width: 100%; height: 280px; " class='img9'>
                <div class="CmimiProd">
                    <span>Orë VERSACE </span>
                    14.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            <div class="Card OpenShCard9">
                <img src="../assets/Photo/Ora/OraGrass/OraGrass17.png" alt="" style="width: 100%; height: 280px; " class='img10'>
                <div class="CmimiProd">
                    <span>Orë ROLEX </span>
                    14.99€
                </p>

                    <button>Bli tani</button>
                </div>
              

            </div>
            
           
            

        </div>


        
</div>


<script>
                    
                    document.querySelector('.OpenShCard').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img1').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.OpenShCard1').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img2').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.OpenShCard2').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img3').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.OpenShCard3').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img4').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.OpenShCard4').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img5').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.OpenShCard5').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img6').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.OpenShCard6').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img7').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.OpenShCard7').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img8').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.OpenShCard8').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img9').getAttribute('src');
                        document.querySelector('.inputfoto').setAttribute('value',fotoget)
                        
                    })
                    document.querySelector('.OpenShCard9').addEventListener('click',function(){
                        var fotoget=document.querySelector('.img10').getAttribute('src');
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
<!-- <script src="././Js/SyzeDielli.js"></script> -->
<!-- <script src="././Js/Ora.js"></script> -->
<script src="./Js/MeTeShiturat.js"></script>
<script src="./Js/ndryshim.js"></script>
<script src="../Produktet/Js/messanger6.js"></script>
<script src="action3.js"></script>


</html>