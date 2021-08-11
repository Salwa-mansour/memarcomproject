<!-- IN THE NAME OF ALLAH
     MEMARCOM PROJECT  -->
     <?php  
    include_once("./config/opratoins.config.php");
    if(isset($_POST['work-search'])){
        $orders=orderfilter();
     
    }else{
    $orders=getdata("SELECT * FROM `orders` ORDER BY `orderId` DESC ;");}
  
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
    <!-- <aside class="aside">
           <ul>
               <li><a href="./orders.php?tab=interior">interio design</a></li>
               <li><a href="./orders.php?tab=bools">simming bools</a></li>
               <li><a href="./orders.php?tab=villas">villas</a></li>
               <li><a href="./orders.php?tab=buildings">buildign</a></li>
               <li><a href="./orders.php?tab=house">house</a></li>
             
           </ul>
       </aside> -->
       <section class="mian-section ">
         
       <div class="requests-wraper">
              <ul>
                  <!-- /////////////sagasu//////////////// -->
              <!-- <li class="middleContainer">
                      <div class=" ">
                          <form action="" method="post" class="felx-form" >
                        <?php //include('./parts/workTypelist.php') ?>
                        <button type="submit" class="btn btn-primary" name="work-search" value="" ><li class="fa fa-search"></li> </button>
                          </form>        
                         </a>
                      </div>
                  </li> -->
              <li class="middleContainer">
                      <div class="request-contianer wide-box">
                        
                          
                                  <h5 class="request-title middle"> add your oreder
                                      <a href="./forms.php?n=orderUplaod">click here</a>
                                  </h5>
                                 
                      
                      </div>
                  </li>
              <?php  if(isset($orders)): ?>
              <?php
               foreach($orders as $order):
                    $clientId=$order['custmerId'];
                    // echo $clientId;
                    $client=gitselectedrow("SELECT `client number`, `name`,`photo`, `state` FROM `client` WHERE `client number`='$clientId';");
                    // print_r($client);
                ?>
             
               
                  <li>
                      <div class="request-contianer wide-box">
                        
                              <div class="request-img-div" style="background-image: url(<?php echo($client['photo']) ?>);"> </div>
                             
                          <a href="./requestsdetails.php?orderId=<?php echo($order['orderId']) ?>" class="inner-link">
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
                 
                  <?php else:// if(isset($orders)): ?>
                    <li class="middleContainer">
                      <div class="request-contianer wide-box">
                        
                          
                                  <h5 class="request-title middle"> no results exist
                                      
                                  </h5>
                                 
                         </a>
                      </div>
                  </li>
                  <?php endif;// if(isset($orders)): ?>
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