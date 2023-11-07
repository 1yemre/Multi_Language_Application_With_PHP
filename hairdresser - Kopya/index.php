<?php

session_start();



if(empty($_SESSION["sitedili"]))
{
     include("language_tr.php");

}else{
        if($_SESSION["sitedili"]=="Turkish")
         {
            include("language_tr.php");
         }else{
              include("language_en.php");
         }

}        

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hangül Kadın Kuaförü</title>
    <!-------------CSS LİNKS----------->
    <link rel="stylesheet" href="main.css" />
    <link
      rel="stylesheet"
      media="screen and (max-width: 768px)"
      href="resposive.css"
    />

    <!--------------FONT AWESOME---------------->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-------------Animate-------------->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
      ScrollReveal({ reset: true });
    </script>
  </head>
  <body>
    <div class="container">
      <nav id="nav" class="">
        <ul
          class="nav-items animate__animated animate__backInLeft"
          id="nav-items"
        >
          <li class="nav-item"><a href="#nav"><?php echo m1; ?></a></li>

          <li class="nav-item"><a href="#aboutus"><?php echo m2; ?></a></li>
        </ul>

        <div class="logo animate__animated animate__backInDown">
          <li class="nav-item">
            <img src="assets/img/Hangül.png" alt="HangulkuaforLogo" />
          </li>
        </div>
        <ul
          class="nav-items animate__animated animate__backInRight"
          id="nav-items "
        >
          <li class="nav-item"><a href="#services"><?php echo m3;?></a></li>
          <li class="nav-item"><a href="#contact"><?php echo m4 ?></a></li>; 
        </ul>
        <li class="nav-item language">
          <a href="secim.php?dilSecimi=Turkish">TR</a>
        </li>
          
        <li class="nav-item language"><a href="secim.php?dilSecimi=English">EN</a></li>
      </nav>
      <span class="fa-solid fa-bars" id="resposive-bar"></span>
    </div>

    <section class="aboutus" id="aboutus">
      <h3><?php echo m2 ;?></h3>
      <div class="about-page">
        <div class="left card-1">
          <h2><?php echo title1;  ?></h2>
          <p>
            <?php 
            echo   title2;
           
            ?>
            <br />
              
            <?php
              echo ad1;

             ?>
          </p>

          <p><a class="button" href="tel:+90542*******"><?php  echo c1; ?></a></p>
        </div>
        <div class="right card-2"></div>
      </div>
    </section>

    <section class="services-page" id="services">
      <h3><?php echo title3    ?></h3>
      <div class="services">
        <div class="left-service">
          <div class="text">
            <p><?php  echo title4   ?></p>
            <p><a class="button" href="tel:+90542******"><?php  echo c1;  ?></a></p>
          </div>
        </div>
        <!--card 1-->
        <div class="right-service">
          <div class="box card-1">
            <div class="header">
              <img src="assets/img/service-1.png" alt="" />
            </div>

            <div class="text">
              <h4><?php echo product1 ;?></h4>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Accusamus, sit!
              </p>
            </div>
          </div>

          <!--card 2-->
          <div class="box card-2">
            <div class="header">
              <img src="assets/img/service-2.png" alt="" />
            </div>

            <div class="text">
              <h4><?php echo product2 ?></h4>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Accusamus, sit!
              </p>
            </div>
          </div>

          <!--card 3-->
          <div class="box card-1">
            <div class="header">
              <img src="assets/img/service-3.png" alt="" />
            </div>

            <div class="text">
              <h4><?php  echo product3 ;?></h4>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Accusamus, sit!
              </p>
            </div>
          </div>

          <!--card 4-->
          <div class="box card-2">
            <div class="header">
              <img src="assets/img/service-4.png" alt="" />
            </div>

            <div class="text">
              <h4><?php echo   product4; ?></h4>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Accusamus, sit!
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="contact-page" id="contact">
      <h3><?php  echo m4;?></h3>
      <div class="contact">
        <div class="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3133.474472746891!2d36.91104431219448!3d38.2453003717533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152d1300e3209b5b%3A0x8599caff2de8e9fa!2sHang%C3%BCl%20Bayan%20Kuaf%C3%B6ru!5e0!3m2!1str!2str!4v1693431057195!5m2!1str!2str"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>

        <div class="contact-all">
          <div class="contact-left animate__animated animate__backInLeft">
            <h3><?php echo a1;  ?></h3>
            <h2><?php  echo  title1;  ?></h2>
            <p>Turkey/Kahramanmaraş</p>
          </div>

          <div class="contact-right animate__animated animate__backInRight">
            <h2><?php echo c2; ?></h2>
            <p>
               <?php 
                    
                     echo title5;
         
          ?>
            </p>

            <p><a class="button" href="tel:+90542*******"><?php  echo c1;  ?></a></p>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="footer">
        <div class="about">
          <div class="about-text">
            <p>
                  <?php echo f1; ?>

              <br />
                <?php 
                       echo f2;
                ?>
            </p>
          </div>

          <div class="adress">
            <h2><?php  echo title1;  ?></h2>
            <p>Turkey/Kahramanmaraş</p>

            <p><i class="fa-solid fa-phone"></i>90 542 *** ****</p>

            <h2><?php  echo social;  ?></h2>
            <div class="social-media">
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
          </div>
        </div>
      </div>
      <h3 class="copright">Tüm hakları saklıdır | DESİGNED BY ONUR ARDIÇ</h3>
    </footer>

    <script src="main.js"></script>

    <script>
      ScrollReveal().reveal(".animation", { delay: 500 });
      ScrollReveal().reveal(".card-1", { delay: 500 });
      ScrollReveal().reveal(".card-2", { delay: 1000 });
    </script>
  </body>
</html>
