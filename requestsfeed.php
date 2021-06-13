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
          <div class="requests-wraper">
              <ul>
                  <li>
                      <div class="request-contianer wide-box">
                              <div class="request-img-div" style="background-image: url(./images/p1.jpg);">
                              <!-- <img src="./images/p1.jpg" alt="" class="request-img"> -->
                              </div>
                          <a href="./requestsdetails.php" >
                              <div class="request-data">
                                  <h3 class="request-title">reuwest titel</h3>
                                  <div class="custemr-n-div">
                                    <i class="fas fa-user"></i>
                                    <span class="custmer-name">costemr name</span>
                                  </div>
                                  <p class="prife-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ipsa doloremque quo voluptates repellendus unde?</p>
                             </div>
                         </a>
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
                                    <i class="fas fa-user"></i>
                                    <span class="custmer-name">costemr name</span>
                                  </div>
                                  <p class="prife-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ipsa doloremque quo voluptates repellendus unde?</p>
                             </div>
                      </div>
                  </li>
                 
              </ul>
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