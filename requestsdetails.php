<!-- IN THE NAME OF ALLAH
     MEMARCOM PROJECT  -->
     <!DOCTYPE html>
<html lang="en">
<head>

   <?php require_once("./parts/meta.php")?>
   <?php require_once("./config/opratoins.config.php")?>
   <?php if(isset($_GET['orderId'])):
        $orderId=$_GET['orderId'];
       
     ?>
     <?php $order=gitselectedrow("SELECT * FROM `orders` WHERE `orderId`='$orderId' ");
         $clientId=$order['custmerId'];
         // echo $clientId;
         $client=gitselectedrow("SELECT `client number`, `name`,`photo`, `state` FROM `client` WHERE `client number`='$clientId';");
         // print_r($client);
     ?>
   <?php else:exit;//if(isset($_GET['orderId'])): ?>
   <?php endif;//if(isset($_GET['orderId'])): ?>
   <?php  ?>
   
    <title>Document</title>
</head>

<body>

    <?php
     
     require_once("./parts/layoutgridstart.php");
     require_once("./parts/nav.php");
     require_once("./parts/mainstart.php");
     
     ?>
 
   
    <!-- ////////////////////////////////////// -->
    <!-- <aside class="aside">
           <ul>
               <li><a href="#">Lorem, ipsum.</a></li>
               <li><a href="#">Lorem, ipsum.</a></li>
               <li><a href="#">Lorem, ipsum.</a></li>
               <li><a href="#">Lorem, ipsum.</a></li>
               <li><a href="#">Lorem, ipsum.</a></li>
               <li><a href="#">Lorem, ipsum.</a></li>
           </ul>
       </aside> -->
       <section class="mian-section">
          <div class="requests-wraper">
              <div class="request-detail  wide-box">
                       <h3 role="request title"> <?php echo($order['orederTitle']) ?> </h3>
                       <div class="custemr-n-div requst-custemr">
                        <i class="fas fa-user"></i>
                        <span class="custmer-name"><?php echo $client['name'] ?></span>
                      </div>
                       <p class="prife-description" role="order details" ><?php echo($order['orderDetails']) ?></p>
            </div>
              <div class="request-detail  wide-box">
                       <h3>do you want to apply an offer</h3>
                       <div class="buttons-div">
                            <button class="conrol-btn">sign up</button>
                      <button class="conrol-btn">sign in</button>
                       </div>
                     
            </div>
              <div class="request-detail  wide-box">
                       <h3> apply an offer</h3>
                       <form method="POST" class="buttons-div">
                        <textarea name="" id="" cols="0" rows="10" class="details-texteara"></textarea>
                      <button class="conrol-btn">apply</button>
                       </form>
                     
            </div>
             <ul>
                 <h3 class="offers-list-title">offers for this request</h3>
                  <li class="wide-box">
                      <div class="request-contianer">
                             <a href="./architectprofile.php">
                              <div class="request-img-div" style="background-image: url(./images/p1.jpg);"> </div>
                             </a>
                              <div class="request-data">
                                  <h3 class="request-title">reuwest titel</h3>
                                  <div class="custemr-n-div">
                                    <i class="fas fa-user"></i>
                                    <span class="custmer-name">engineer name</span>
                                  </div>
                                  <p class="prife-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ipsa doloremque quo voluptates repellendus unde?</p>
                             </div>
                      </div>
                  </li>
                 
                  <li  class="wide-box">
                      <div class="request-contianer">
                              <div class="request-img-div" style="background-image: url(./images/userplacehoder.jpg);">
                          
                              </div>
                          
                              <div class="request-data">
                                  <h3 class="request-title">reuwest titel</h3>
                                  <div class="custemr-n-div">
                                    <i class="fas fa-user"></i>
                                    <span class="custmer-name">engineer name</span>
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