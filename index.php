
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Swiftaboki</title>

    <!-- Favicon -->
    
    <link rel="icon" href="https://digitrader.netlify.app/img/core-img/logofintech-removebg-preview.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="https://digitrader.netlify.app/css/style.css">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="https://digitrader.netlify.app/css/responsive.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
     <style>
      #fade{
        width: 581px; 
        left: 0px; 
        top: 0px; 
        color:black; 
        font-size: 72px; 
        font-family: Lato; 
        font-weight: 800;
      }
      .sec{
        width:100%;
        height:150px;
        background:#2E004F;
       } 
       .head{
        text-align:center;
        font-size:30px;
        
       }
       .head h1{
        word-wrap: break-word; 
        padding-bottom:30px; 
        padding-top:30px;
       }
       .containers{
        width:100%;
        background-color:rgb(197, 193, 193);
       }
      .card-container{
        display:grid;
        grid-template-columns: 1fr 1fr;
        width:100%;
        
        justify-content: center;
       

      }
     .card{
       width:600px;
       padding:12px;
       background-color:#fff;
       margin-top:40px;
       margin-left:47px;
       height: 500px;
       overflow: hidden;
       transition:2s;
       border-radius:25px;
     }
     .card:nth-child(1):hover{
      background-color:#4B0082;
     }
     .card:nth-child(1):hover .crd{
      color: #fff;
     }
     .crd{
        width: 422px; 
        left: 0px; 
        top: 0px; 
         color: #4B0082;
         font-size: 48px; 
         font-family: Lato; 
         font-weight: 700; 
         word-wrap: break-word
     }
     .crd2{
        width: 443px; 
        left: 0px; 
        top: 182px;  
        color: black; 
        font-size: 32px; 
        font-family: Lato; 
        font-weight: 300; 
        word-wrap: break-word
     }
  
     .card:hover .crd2{
      color: #fff;
     }
     .card:nth-child(1) .imgs{
      position:absolute;
      padding-top:20px;
      transition:  2s;
      right:-50px;
      bottom:-350px;
      height:260px;
     
     }
     .card:nth-child(1):hover .imgs{
      animation-name: example;
      animation-duration: 4s;
      right:30px;
      bottom:-40px;
      
     }
     .card:nth-child(1):hover .imgs img{
       width:200px;
       
     }

     .card:nth-child(2) .imgs{
      position:absolute;
      padding-top:20px;
      transition:  2s;
      right:-50px;
      bottom:-350px;
      height:300px;
     
     }
     .card:nth-child(2):hover .imgs{
      animation-name: example;
      animation-duration: 4s;
      right:30px;
      bottom:-30px;
      
     }
     .card:nth-child(2):hover .imgs img{
       width:300px;
       
     }


     .card:nth-child(3) #sell  {
      position:absolute;
      padding-top:20px;
      transition:  2s;
      left:-20px;
      bottom:-350px;
      height:270px;
     }
     .card:nth-child(3):hover  #sell{
      animation-name: example;
      animation-duration: 4s;
      left:300px;
      bottom:-20px;
      
     }

     .card:nth-child(3) #buy{
      display:flex;
      justify-content:right;
      height:400px;
     }


     .card:nth-child(3):hover #buy{
      display:none;
      
     }

     .card:nth-child(4) .imgs{
      position:absolute;
      padding-top:20px;
      transition:  2s;
      left:-370px;
      bottom:27px;
     }
     .card:nth-child(4):hover .imgs{
      animation-name: example;
      animation-duration: 4s;
      left:280px;
      
     }
     

     .card:nth-child(5) .imgs{
      display:flex;
      justify-content:right;
      height:300px;
      margin-top:47px;
      
     }
      
     .card:nth-child(5):hover #dollar{
      display:none;
     }


     #naira{
      display:none;
     }


     .card:nth-child(5):hover #naira{
      display:flex;
     }


     .card:nth-child(6) .imgs{
      display:none;
      justify-content:right;
      transition:  12s;
     }

     .card:nth-child(6):hover .imgs{
      display:flex;
      
     }


    .card:nth-child(2):hover{
     background:#333;
     }
     .card:nth-child(2) .crd{
      color:#333 ;
     }
     .card:nth-child(2):hover .crd{
      color:#fff;
     }
     .card:nth-child(3):hover{
     background:#eb1498;
     }
     .card:nth-child(3) .crd{
       color:#eb1498;
     }
     
     .card:nth-child(3):hover .crd{
       color:#fff;
     }

     .card:nth-child(4):hover{
     background:#03491e;
     }
     .card:nth-child(4) .crd{
       color:#03491e;
     }
     .card:nth-child(4):hover .crd{
       color:#fff;
     }

     .card:nth-child(5):hover{
     background:black;
     }
     .card:nth-child(5) .crd{
       color:black;
     }
     .card:nth-child(5):hover .crd{
       color:#fff;
     }

     .card:nth-child(6):hover{
     background:#4B0082;
     }
     .card:nth-child(6) .crd{
       color:black;
     }
     .card:nth-child(6):hover .crd{
       color:#fff;
     }
      
     .earns-rap{
      padding:30px
     }
     .earns{
      display:flex;
      justify-content:space-between;
      background:black;
      border-radius:20px;
      padding:30px;
     }
     .ern-crd{
      width: 422px; 
        left: 0px; 
        top: 0px; 
         color: #fff;
         font-size: 48px; 
         font-family: Lato; 
         font-weight: 700; 
         word-wrap: break-word
     }
     .ern-crd2{
      color:#fff;
     }

     .refer-btn{
      padding-top:12px;
     }

     .refer-btn button{
      padding:33px;
      border-radius:15px;
      width:250px;
      font-size:20px;
      font-weight: 30px;
      background:transparent;
      color:#fff;
      border-color:#fff;
     }

    .question{
      background:rgb(197, 193, 193);
    }
    
     .swift{
      display: flex;
      width:100%;
      justify-content:center;
      
     }
     .content{
      margin-right:167px;
      color:black;
      font-size:17px;
     }
     .angle{
      color:black;
     }
     
     
     .horizo-line{
      display:flex;
      justify-content:center;
     }
     .line{
      background-color: black;
      width:500px;
      height: 1px;
      margin-top:10px;
      margin-bottom:30px;
     }
     .anser{
      display:none;
     }
     .swift:hover .anser{
      display:block;
     }

     .footer-container{
      padding:50px;
      background:#4B0082;
      display:flex;
      justify-content:space-around;
     }
     .but-inpt{
      display:flex;

     }
     .but-inpt input{
      width:250px;
      border-top-left-radius:13px;
      border-bottom-left-radius:13px;
      border:none;
      height:50px;
     }
     .but-inpt button{
      padding:10px;
      background:rgb(133, 130, 130);
      border:none;
      border-top-right-radius:13px;
      border-bottom-right-radius:13px;
      color:#fff;
     }
     .logo-menu-foot{
      display:flex;
      justify-content:space-between;
      margin-top:27px;
      
     }
     .menu-foot a{
      margin-left:7px;
      color:#fff;
      font-size:20px;
     }
     
     .soiac-icons a{
      margin-left:15px;
     }
     .contact{
      padding:25px;
      color:#fff;
     }
     @media only screen and (max-width: 1300px){
      .head h1{
        font-size:25px;
      }
        .card-container{
        display:grid;
        grid-template-columns: 1fr ;
        
      }
      .card{
        width:600px;
        margin-top:10px;
       
      }
     }
     @media only screen and (max-width: 1000px) {
        .footer-container{
        display:grid;
      }
      .soiac-icons{
      margin-top:30px;
     }
      }
     @media only screen and (max-width: 900px){
      .head h1{
        font-size:25px;
      }
        .card-container{
        display:grid;
        grid-template-columns: 1fr ;
        
      }
      .card{
        width:600px;
        margin-top:10px;
        
      }

      .crd{
        font-size:20px;
      }
      .crd2{
        font-size:20px;
      }
      .footer-container{
        display:grid;
      }
      .soiac-icons{
      margin-top:30px;
     }
     }


     @media only screen and (max-width: 600px){
      #fade{
        width: 581px; 
        left: 0px; 
        top: 0px; 
        color:black; 
        font-size: 32px; 
        font-family: Lato; 
        font-weight: 800;
      }
      #row-cont{
        height: 900px;
      }
      .head h1{
        font-size:20px;
      }
        .card-container{
        display:grid;
        grid-template-columns: 1fr ;
      }
      .card{
        width:400px;
        margin-top:10px;
        margin-left:47px;
        height:350px;
        border-radius:17px;
      }

      .crd{
        font-size:20px;
      }
      .crd2{
        font-size:20px;
      }
      .logo-menu-foot{
       
      }
      .menu-foot a{
        margin-top:10px;
        font-size:17px;
      }
      .footer-container{
        display:grid;
      }
      .soiac-icons{
      margin-top:30px;
     }

     .card:nth-child(5) .imgs{
      display:flex;
      justify-content:right;
      height:300px;
      margin-top:17px;
      
     }

     .card:nth-child(3) #sell  {
      position:absolute;
      padding-top:20px;
      transition:  2s;
      left:-10px;
      bottom:-350px;
      height:150px;
     }
     .card:nth-child(3):hover  #sell{
      animation-name: example;
      animation-duration: 4s;
      left:190px;
      bottom:0px;
      height:200px;
      
     }

    

     .card:nth-child(3) #buy{
      display:flex;
      justify-content:right;
      height:170px;
      margin-top:77px;
     }

     }


     </style>
</head>

<body class="" style="background:#fff;">
    <!-- Preloader 
    <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>-->

    <!-- ##### Header Area Start ##### -->
    <header class="header-area wow fadeInDown" data-wow-delay="0.2s" style="background:#fff;">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="dreamNav" >

                    <!-- Logo -->
                    <a class="nav-brand" href="index-2.html"><img draggable="false" src="asset/img/logofintech-removebg-preview.png" alt="logo"></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler" >
                        <span class="navbarToggler"><span style="background:#4B0082;"></span><span style="background:#4B0082;"></span><span style="background:#4B0082;"></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li ><a href="#home"  style="color:black;">Products <i class="fa fa-angle-down" aria-hidden="true"></i> </a></li>
                                <li><a href="#about" style="color:black;">Company <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                                <li><a href="#services"style="color:black;">Community <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                            </ul>

                            <!-- Button -->
                            <a href="#" class="btn login-btn ml-50" style="color:#333; background:#fff;">Sign in</a>
                            <a href="#" class="btn login-btn ml-50" style="color:#fff; border:none; background:#4B0082;">Create an Account</a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Welcome Area Start ##### -->
    <section class="welcome_area clearfix dzsparallaxer auto-init none" data-options='{direction: "normal"}' id="home" style="background:#fff;">
        <div class="divimage dzsparallaxer--target" style="width: 101%; height: 130%; background-image: url()"></div>

        <!-- Hero Content -->
        <div class="hero-content transparent">
            <!-- blip -->
            <div class="dream-blip blip1"></div>
            <div class="dream-blip blip2"></div>
            <div class="dream-blip blip3"></div>
            <div class="dream-blip blip4"></div>

            <div class="container h-100">
                <div class="row h-100 align-items-center" id="row-cont">
                    <!-- Welcome Content -->
                    <div class="col-12 col-lg-6 col-md-12">
                        <div class="welcome-content">
                            <h1 class="wow fadeInUp" data-wow-delay="0.2s" id="fade" >Master Your Financial World</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.3s" style="color:black; font-size:20px;">Simplify Dolar Payments,Savings,Reciepts with <b style="color:black;">SWIFTABOKI</b></p>
                            <div class="dream-btn-group wow fadeInUp" data-wow-delay="0.4s">
                                <a href="#" class="btn dream-btn mr-3" style="background:#fff;"><img src="asset/img/googleabokiup.PNG"  alt=""></a>
                                <a href="#" class="btn dream-btn mr-3" style="background:#fff;"><img src="asset/img/appstoreup.PNG"  alt=""></a>
                            </div>
                        </div>
                    </div>
                    <img src="asset/img/fintech-removebg-preview.png" width="500px" height="500px" alt="">
                </div>
                
            </div>
        </div>
    </section>
  
    <section style="margin-top:37px; background: rgb(197, 193, 193);">
    <div class="sec"></div>
    <div class="containers">
    <div class="head"><h1>Seamless Dollar Payments, Exchanges,<br> Receiving and Saving - All in One Place</h1></div>
    <div class="card-container">
     <div class="card">
     <div class="crd" >Seamless Naira and Dollar International Transfers</div>
     <div class="crd2">Your Gateway to Global Finance</div>
     <div class="imgs">
      <img src="asset/img/dollaracct-removebg-preview.png" alt="">
     </div>
    
     </div>

     <div class="card">
     <div class="crd" >Unlock Global Upportunities</div>
     <div class="crd2">Recieve International Payments <br>and Own Your Dollar Account</div>
     <div class="imgs">
      <img src="asset/img/unlockaboki-removebg-preview.png" alt="">
     </div>
     </div>

     <div class="card">
     <div class="crd" >Transform Dollars in an Instant</div>
     <div class="crd2">Exchange with Ease through<br>Our Instant Exchange and P2P Network</div>
     <div class="imgs" id="buy">
      <img src="asset/img/buy-removebg-preview.png" alt="">
     </div>
     <div class="imgs" id="sell">
      <img src="asset/img/sell-removebg-preview.png" alt="">
     </div>
     </div>

     <div class="card">
     <div class="crd" >Shop The World Seamlessly</div>
     <div class="crd2">Explore Borderless Spending <br>with Our Virtual Card </div>
     <div class="imgs">
      <img src="asset/img/vitual-card-removebg-preview.png" alt="">
     </div>
     </div>


     <div class="card">
     <div class="crd" >Elevate Your Wealth</div>
     <div class="crd2">Savings,Flexibility,and Dollars.<br>Discover the power of dual currency savings </div>
     <div class="imgs" id="dollar">
      <img src="asset/img/elevateaboki-removebg-preview.png" alt="">
     </div>
     <div class="imgs" id="naira">
      <img src="asset/img/elevatenairaaboki-removebg-preview.png" alt="">
     </div>
     </div>

     <div class="card">
     <div class="crd" > Over-Recharged? Fix It Here</div>
     <div class="crd2">Accidentally over-recharged? We&#039;ve got your back. Easily
            convert excess airtime into cash </div>
     <div class="imgs">
      <img src="asset/img/fixaboki-removebg-preview.png" alt="">
     </div>
     </div>

</div>
<div class="head"><h1>You can also Pay your Bills,Recharge,Flight and <br>Hotel Bookings and many more.</h1></div>
<div class="earns-rap">
<div class="earns">
 <div class="super">
    <div class="ern-crd" >Supercharge Your Earnings:<br> Refer and Earn Big</div>
    <div class="ern-crd2"> How it works: Invite someone to join our platform,<br> and when they make
        their first deposit, you&#039;ll both <br> unlock your prosperity.
        <br />It&#039;s a win-win opportunity. </div>
        <div class="refer-btn"><a href=""><button><b>Refer And Earn</b></button> </a></div>
  </div>
  <div class="refer-anima">
    
  </div>
</div>
</div>
<div class="question">
<div class="head"><h1>Your Questions, Our Answers: FAQs</h1></div>
<div class="qestion-container">
<div class="qestion">
    <div class="swift">
          <div class="content" ><b>Is Swift Aboki Available on Mobile?</b>
        <div class="anser">Yes,Swift Aboki is Available on Mobile </div>
        </div>
          <div class="angle"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
    </div>
    <div class="horizo-line">
    <div class="line"></div>
    </div>
    <div class="swift">
          <div class="content" ><b>Is Swift Aboki Available on Mobile?</b>
          <div class="anser">Yes,Swift Aboki is Available on Mobile </div>
        </div>
          <div class="angle"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
    </div>
    <div class="horizo-line">
    <div class="line"></div>
    </div>
    <div class="swift">
          <div class="content" ><b>Is Swift Aboki Available on Mobile?</b>
          <div class="anser">Yes,Swift Aboki is Available on Mobile </div>
        </div>
          <div class="angle"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
    </div>
    <div class="horizo-line">
    <div class="line"></div>
    </div>
 </div>
</div>
</div>
<br>
<div class="dream-btn" style="display:flex; height:150px; padding-bottom:47px; justify-content:center;background:rgb(197, 193, 193);">
<div class="dream-btn-group wow fadeInUp" data-wow-delay="0.4s">
<a href="#" class="btn dream-btn mr-3" style=" background-color:rgb(197, 193, 193);" ><img src="asset/img/googleabokidown.PNG"  alt=""></a>
<a href="#" class="btn dream-btn mr-3" style=" background-color:rgb(197, 193, 193);" ><img src="asset/img/appstoreabokidown.PNG"  alt=""></a>
 </div>
 </div>
</div>
 </section>

 <section>
  <div class="footer-container">
    <div class="foter-left">
    <P style="font-size:20px;">Sign up for our newsletter to stay updated with Swift Aboki</P>
    <div class="subscribe">
      <form action="" method="post">
        <div class="but-inpt">
        <input type="text">
        <button type="submit" name="">Sign up</button>
        </div>
      </form>
    </div>
    <div class="logo-menu-foot">
    <div class="logo-aboki"><img src="asset/img/abokilogo.PNG" alt=""></div>
    <div class="menu-foot">
      <a href="">Product</a>
      <a href="">Company</a>
      <a href="">Community</a>
      </div>
     </div>
    </div>
    <div class="foter-right">
      <div class="soiac-icons">
        <a href="#"><img src="asset/img/faceaboki-removebg-preview.png" alt=""></a>
        <a href="#"><img src="asset/img/intaaboki-removebg-preview.png" alt=""></a>
        <a href="#"><img src="asset/img/youtubeaboki-removebg-preview.png" alt=""></a>
        <a href="#"><img src="asset/img/twiteraboki-removebg-preview.png" alt=""></a>
        <a href="#"><img src="asset/img/pinintresaboki-removebg-preview.png" alt=""></a>
      </div>
      <div class="horizo-line">
    <div class="line" style="background:#fff;"></div>
    </div>
    <div class="contact">Contact: No 23 Fatgbems industrial<br> Plaza, Along Ozumba Mbadwe,<br>
          Victoria Island, Lagos, Nigeria</div>
    </div>
  </div>
 </section>



    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="https://digitrader.netlify.app/js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="https://digitrader.netlify.app/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="https://digitrader.netlify.app/js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="https://digitrader.netlify.app/js/plugins.js"></script>
    <!-- Parallax js -->
    <script src="https://digitrader.netlify.app/js/dzsparallaxer.js"></script>

    <script src="https://digitrader.netlify.app/js/jquery.syotimer.min.js"></script>

    <!-- script js -->
    <script src="https://digitrader.netlify.app/js/script.js"></script>

</body>

</html>