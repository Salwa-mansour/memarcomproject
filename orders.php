<!-- IN THE NAME OF ALLAH
     MEMARCOM PROJECT  -->
     <?php  
    include_once("./config/opratoins.config.php");
    $orders=getdata("SELECT * FROM `orders` ORDER BY `orderId` limit  10;");
    
?>

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
       <section class="mian-section ">
         
       <div class="requests-wraper">
              <ul>
              <?php foreach($orders as $order):
                    $clientId=$order['custmerId'];
                    // echo $clientId;
                    $client=gitselectedrow("SELECT `client number`, `name`,`photo`, `state` FROM `client` WHERE `client number`='$clientId';");
                    // print_r($client);
                ?>
            
                  <li>
                      <div class="request-contianer wide-box">
                        
                              <div class="request-img-div" style="background-image: url(./images/<?php echo($client['photo']) ?>);"> </div>
                             
                          <a href="./requestsdetails.php" class="inner-link">
                              <div class="request-data">
                                  <h3 class="request-title"> <?php echo($order['orederTitle']) ?></h3>
                                  <div class="custemr-n-div">
                                    <i class="fas fa-user"></i>
                                    <span class="custmer-name"><?php echo($client['name']) ?></span>
                                  </div>
                                  <p class="prife-description"><?php echo($order['orderDetails']) ?></p>
                             </div>
                         </a>
                      </div>
                  </li>
                  <?php endforeach; ?>
              </ul>
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