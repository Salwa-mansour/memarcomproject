<!-- IN THE NAME OF ALLAH
     MEMARCOM PROJECT  -->
     <!DOCTYPE html>
<html lang="en">
<head>

   <?php require_once("./parts/meta.php")?>
   
    <title>Document</title>
</head>

<body>

    <?php
     
     require_once("./parts/layoutgridstart.php");
     require_once("./parts/nav.php");
     require_once("./parts/mainstart.php");
     
     ?>
 
   
    <!-- ////////////////////////////////////// -->
    <aside class="aside">
           <ul>
               <li><a href="#">Lorem, ipsum.</a></li>
               <li><a href="#">Lorem, ipsum.</a></li>
               <li><a href="#">Lorem, ipsum.</a></li>
               <li><a href="#">Lorem, ipsum.</a></li>
               <li><a href="#">Lorem, ipsum.</a></li>
               <li><a href="#">Lorem, ipsum.</a></li>
           </ul>
       </aside>
       <section class="mian-section">
        <div class="work-detial-div">
            <div class="request-img-div previus-work-archtict" style="background-image: url(./images/p1.jpg);">
                          
            </div>
            <h4>archtict naem</h4>
            <button class="conrol-btn">hire me</button>
            <button class="conrol-btn">reviw my work</button>
         </div>
         <!-- //////// -->
         <div class="request-detail  wide-box">
            <h3>about me</h3>
            <div class="custemr-n-div requst-custemr">
          
           </div>
            <p class="prife-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ipsa doloremque quo voluptates repellendus unde?</p>
          
 </div>
   <!-- ///////custemr revewes/////// -->
   <div class="requests-wraper">
    <h3>custemr revwoes</h3>
    <ul>
        <li>
            <div class="request-contianer wide-box">
                    <div class="request-img-div" style="background-image: url(./images/p1.jpg);">
                    <!-- <img src="./images/p1.jpg" alt="" class="request-img"> -->
                    </div>
                
                    <div class="request-data">
                        <h3 class="request-title">reuwest titel</h3>
                        <div class="custemr-n-div">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <!-- <span class="custmer-name">costemr name</span> -->
                        </div>
                        <p class="prife-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ipsa doloremque quo voluptates repellendus unde?</p>
                   </div>
            </div>
        </li>
       
        <li>
            <div class="request-contianer wide-box">
                    <div class="request-img-div" style="background-image: url(./images/userplacehoder.jpg);">
                    <!-- <img src="./images/p1.jpg" alt="" class="request-img"> -->
                    </div>
                
                    <div class="request-data">
                        <h3 class="request-title">reuwest titel</h3>
                        <div class="custemr-n-div">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <!-- <span class="custmer-name">costemr name</span> -->
                        </div>
                        <p class="prife-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ipsa doloremque quo voluptates repellendus unde?</p>
                   </div>
            </div>
        </li>
       
    </ul>
</div>
<!-- //////////previas works -->
     
<div class="features">
    <h3>previas works</h3>
    <div class="container feed">
        <!-- //////////1////// -->
        <div class="main-f-box">
            <div class="feature-box">
                <div class="feature-img">
                    <img src="../imgs/1.jpg" style="max-width: 100%;" alt="">
                </div>
            </div>
          
          
            <div class="feature-details">
                <h4>los ansulos</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente illo vel eveniet, fugiat inventore eius? Tempora impedit fugiat, praesentium ipsam beatae fugit excepturi dignissimos earum eius architecto vero in qui.</p>
               
            </div>
        </div>
        <!-- //////////2////// -->
        <div class="main-f-box">
            <div class="feature-box">
                <div class="feature-img">
                    <img src="../imgs/1.jpg" style="max-width: 100%;" alt="">
                </div>
            </div>
          
          
            <div class="feature-details">
                <h4>los ansulos</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente illo vel eveniet, fugiat inventore eius? Tempora impedit fugiat, praesentium ipsam beatae fugit excepturi dignissimos earum eius architecto vero in qui.</p>
               
            </div>
        </div>
        
        <!-- //////////3////// -->
        <div class="main-f-box">
            <div class="feature-box">
                <div class="feature-img">
                    <img src="../imgs/1.jpg" style="max-width: 100%;" alt="">
                </div>
            </div>
          
          
            <div class="feature-details">
                <h4>los ansulos</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente illo vel eveniet, fugiat inventore eius? Tempora impedit fugiat, praesentium ipsam beatae fugit excepturi dignissimos earum eius architecto vero in qui.</p>
               
            </div>
        </div>
    </div>
</div>

     </section>
    <!-- ////////////////////////////////////// -->
  
<?php

 require_once("./parts/mainend.php");
 require_once("./parts/footer.php");
 require_once("./parts/layoutgridend.php");

?>

    <!-- hello I'm javaScript -->
    <script src="./script.js"></script>
</body>

</html>