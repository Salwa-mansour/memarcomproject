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
    // //////////////////getting offers data
    $offers=getData("SELECT * FROM `offers` WHERE `orderNumber`='$orderId' ORDER BY `offer number` DESC; ");
   // print_r ($offers);
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
         <?php //echo($order['isRunning']);?>
              <div class="request-detail  wide-box">
              <?php if($order['isRunning']==true):  
              ?>
                              <span class="badge badge-success" style="background-color: #00c851;">Running Order</span>
                             <?php else:/*if($order['asRunning']==true) */  ?> 
                              <span class="badge badge-warning" style="background-color: #fb3;" >Cachted Order</span>
                             <?php endif;//if($order['asRunning']==true) ?>
                       <h3 role="request title"> <?php echo($order['orederTitle']) ?> </h3>
                       <div class="custemr-n-div requst-custemr">
                        <i class="fas fa-user"></i>
                        <span class="custmer-name"><?php echo $client['name'] ?></span>
                      </div>
                       <p class="prife-description" role="order details" ><?php echo($order['orderDetails']) ?></p>
                    <?php include('./parts/messeges.php'); ?>
                    <!-- <a  href="./forms.php?n=reviwArch&archid=<?php //echo($architect['architect number']); ?>&clientid=<?php echo($_SESSION['clientId']); ?>">
                                    <button type="button" class="btn btn-info">قيم المهندس</button></a> -->
                </div>
           <?php if(isset($_SESSION['archId'])):?>
            <div class="request-detail  wide-box">
                       <h3> apply an offer</h3>
                       <form method="POST" class="buttons-div">
                        <textarea name="offer-apply-txt" id="" cols="0" rows="10" class="details-texteara"></textarea>
                        <input type="hidden" name="order-id" value="<?php echo($order['orderId']);?>"/>
                      <button  name="offer-apply-btn"  class="btn btn-primary">apply</button>
                      <?php //require('./parts/messeges.php'); ?> 
                     
                       </form>
                     
            </div>
           <?php elseif(isset($_SESSION['clientId']))://(isset($_SESSION['archId'])):?>
           <!-- not to disply any of the containers for logged in client -->
            <?php else://(isset($_SESSION['archId'])):?>
            <div class="request-detail  wide-box">
                       <h3>do you want to apply an offer</h3>
                       <div class="buttons-div">
                           <a href="forms.php?n=userSignUp&userType=architect"><button class="btn btn-primary">sign up</button></a> 
                            <a href="forms.php?n=userlogin"><button class="btn btn-primary">sign in</button></a>
                       </div>
           
                </div>      
                  <?php endif;//(isset($_SESSION['archId'])):?>
             
                     
           
       
             <ul>
                 <h3 class="offers-list-title">offers for this request</h3>
                 <?php if($offers!=false):?>
                    <?php foreach($offers as $offer):
                        $archId=$offer['architectNumber'];
                    $architect=gitselectedrow("SELECT * FROM `architect` where `architect number`=$archId ;");
                    ?>

                    <li class="wide-box">
                      <div class="request-contianer">
                             <a href="./architectprofile.php?archid=<?php echo($architect['architect number']); ?>">
                              <div class="request-img-div" style="background-image: url(<?php echo($architect['photo']);  ?>);"> </div>
                             </a>
                              <div class="request-data">
                             <a class="inner-link" href="./architectprofile.php?archid=<?php echo($architect['architect number']); ?>">

                                 <h5>
                                      <div class="custemr-n-div">
                                    <!-- <i class="fas fa-user"></i> -->
                                    <span class="custmer-name"><?php echo($architect['name']);  ?></span>
                                  </div>
                                </h5>
                             </a>   
                                  <p class="prife-description"><?php echo($offer['offerDetails']);  ?></p>
                             </div>
                            <?php if(isset($_SESSION['clientId'])): 
                                $logedClient=$_SESSION['clientId']?>
                                <?php if($logedClient==$clientId):  ?>

                                           <?php if( $offer['isAccepted']=='yes' ):  ?>
                                                        <?php $feedbefor= checkRowExist("SELECT * from feedback where orderId=$orderId and `archId`=$archId") ?>
                                                        <?php if($feedbefor==true):?>
                                                            <a  href="#" title="reviw sent orredy" ><button type="button" class="btn btn-info disabled" >feed back</button></a>
                                                        <?php //include('./parts/messeges.php'); ?>
                                                        <?php else://if($feedbefor==true):?>
                                                              <a  href="./forms.php?n=reviwArch&archid=<?php echo($architect['architect number']); ?>&orderId=<?php echo($orderId); ?>">
                                                        <button type="button" class="btn btn-info " >feed back</button></a>
                                                        <?php endif;//if($feedbefor==true):?>
                                                      
                                           <?php else://(isset($_POST['offer-accept-btn'])): ?>
                                            <form action="" method="post">
                                        <input type="hidden" name='archId' value="<?php echo($architect['architect number']); ?>">
                                        <input type="hidden" name='orderId' value="<?php echo($orderId); ?>">
                                        
                                        <button  name="offer-accept-btn"  class="btn btn-primary">accept</button>
                                    </form>
                                     
                                    
                                    
                                           <?php endif;//(isset($_POST['offer-accept-btn'])): ?>
                                           
                                <?php endif;//($logedClient==$clientId): ?>
                            <?php endif;//(isset($_SESSION['clientId'])): ?>
                            
                             
                      </div>
                  </li>
                <?php endforeach;// foreach($offers as $offer):?>
                 <?php else://if($offers!=false):?>
                    <h3>no offers yet</h3>
                 <?php endif;//if($offers!=false):?>
       
                 
                 
                  <!-- <li  class="wide-box">
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
                  </li> -->
                 
              </ul> 
          </div>
     </section>

    <!-- ////////////////////////////////////// -->
  
<?php

 require_once("./parts/mainend.php");
 require_once("./parts/footer2.php");
 require_once("./parts/layoutgridend.php");

?>

    <!-- hello I'm javaScript -->
    <script src="./script.js"></script>
</body>

</html>