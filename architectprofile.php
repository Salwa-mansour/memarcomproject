<!-- IN THE NAME OF ALLAH
     MEMARCOM PROJECT  -->
     <!DOCTYPE html>
<html lang="en">
<head>

   <?php require_once("./parts/meta.php")?>
   <?php require_once("./config/opratoins.config.php")?>
   <!-- <link rel="stylesheet" href="../assets/dist/css/bootstrap.min.css"> -->
    <title>Document</title>
</head>

<body>

    <?php
     
     require_once("./parts/layoutgridstart.php");
     require_once("./parts/nav.php");
     require_once("./parts/mainstart.php");
     
     ?>
  <?php if(isset($_GET['archid'])):
        $archId=$_GET['archid'];
    //    echo($arch)
     ?>
     <?php $architect=gitselectedrow("SELECT * FROM `architect` WHERE `architect number`='$archId' ");
        //  $archKey=$architect['architect number'];
         // echo $clientId;
         $previousWroks=getData("SELECT * FROM `previuasworks` WHERE `architectNumber`='$archId';");
        //  print_r($previousWroks);
     ?>
   <?php else://if(isset($_GET['orderId'])): ?>
   <?php endif;//if(isset($_GET['orderId'])): ?>
   <?php  ?>
   
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
        <div class="work-detial-div">
            <div class="request-img-div previus-work-archtict" style="background-image: url(<?php echo($architect['photo']); ?>);">
                          
            </div>
            <h4><?php echo($architect['name']); ?></h4>
            <?php if(isset($_SESSION['clientId'])): ?>
            <button class="btn btn-primary">conact me</button>
            <a href="./forms.php?n=reviwArch&archid=<?php echo($archId); ?>&clientid=<?php echo($_SESSION['clientId']); ?>"><button type="button" class="btn btn-info">feed back</button></a>
            
            <?php endif; //if(isset($_SESSION['clientId'])): ?>
         </div>
         <!-- //////// -->
         <?php if(isset($_SESSION['archId']) && $archId==$_SESSION['archId']):
        //  **********************loged in arch page -edit funciotnalty added-***********************************
      // echo('cmparson:'.$archId==$_SESSION['archId']);?>
         <div class="request-detail  wide-box">
            <h3>about me</h3>
            <div class="custemr-n-div requst-custemr">
          
           </div>
            <p class="prife-description"><?php echo($architect['aboutme']); ?></p>
           <!-- <div class="f-icons"> -->
           <?php if(isset($_SESSION['archId'])):
          // echo("nav".$archId);
           //echo("loged".$_SESSION['archId']);
            ?>
               <a href=" " class="f-icons" > <i class="fa fa-edit"></i></a>
               <?php endif;// if(isset($_SESSION['archId']?>
           </div>
            

 
<!-- //////////previas works -->
     
<div class="features">
    <h3>previas works</h3>
    <?php include('./parts/messeges.php') ?>
    <div class="container feed">
        <!-- //////////0////// -->
     
        <a href="./forms.php?n=workuplaod&archid=<?php echo $archId ?>" role="link button " style=" text-decoration: none ; color:inherit" >
        <div class="main-f-box">
            <div class="feature-box">
                <div class="feature-img">
                    <img src="./images/imgplaceholder.png" style="max-width: 100%;" alt="">
                </div>
            </div>
          
          
            <div class="feature-details inner-link">
                <h4 class=" inner-link">add new work</h4>
                <!-- <p>Lorem ipsum dolor sit amet con? Tempora impedit fugiat, praesentium ip dignissimos earum eius architecto vero in qui.
             
                </p>
                <a href="">hhhhhhhhhhhhhhhhhhhhhhhhh</a>  -->
                <!-- <span><i class="fa fa-edit"></span> -->
            </div>
        </div>
         </a>
      
        <!-- //////////1////// -->
        <?php foreach($previousWroks as $previousWrok): ?>
        <div class="main-f-box">
            <div class="feature-box">
                <div class="feature-img">
                    <img src="<?php echo($previousWrok['photo']) ?>" style="max-width: 100%;" alt="">
                </div>
            </div>
          
          
            <div class="feature-details">
                <h4>  <?php  echo($previousWrok['workTitle']); ?></h4>
                <h6><?php  echo($previousWrok['workType']); ?></h6>
                <p>
                <?php  echo($previousWrok['workDescriptoin']); ?>
                    
                     
                   
                      <div class="f-icons">
                    <a href="./forms.php?n=workUpdate&workId=<?php echo($previousWrok['workId']); ?> " class="" > <i class="fa fa-edit"></i></a> 
                     <a href=" architectprofile.php?delete=work&workId=<?php echo$previousWrok['workId']; ?>"  > <i class="fa fa-trash-alt"></i></a> 
                    </div>
                </p>
               
            </div>
        </div>
        <?php endforeach;//foreach($previousWroks as $previousWrok): ?>
    </div>
</div>

        <?php  else://if(isset($_SESSION['archId']) && $archId==$_SESSION['archId']):
            //  **********************not loged arch page-anather persons page-***********************************?>
            
              <div class="request-detail  wide-box">
            <h3>about me</h3>
            <div class="custemr-n-div requst-custemr">
          
           </div>
            <p class="prife-description"><?php echo($architect['aboutme']); ?></p>
           <!-- <div class="f-icons"> -->
           <?php if(isset($_SESSION['archId'])):
          // echo("nav".$archId);
          // echo("loged".$_SESSION['archId']);
            ?>
            
               <?php endif;// if(isset($_SESSION['archId']?>
           <!-- </div> -->
              </div>
                 <!-- //////////previas works -->
     
            <div class="features">
                <h3>previas works</h3>
                <div class="container feed">
              <!-- //////////1////// -->
          <?php    if(isset($previousWroks)):
      foreach($previousWroks as $previousWrok):
      // echo($previousWroks); ?>
        <div class="main-f-box">
            <div class="feature-box">
                <div class="feature-img">
                    <img src="<?php echo($previousWrok['photo']) ?>" style="max-width: 100%;" alt="">
                </div>
            </div>
          
          
            <div class="feature-details">
                <h4>  <?php  echo($previousWrok['workTitle']); ?></h4>
                <h6><?php  echo($previousWrok['workType']); ?></h6>
                <p>
                <?php  echo($previousWrok['workDescriptoin']); ?></p>
               
            </div>
        </div>
        <?php endforeach;//foreach($previousWroks as $previousWrok): ?>
             
        <?php  else://  if(isset($previousWroks)):  ?>
            <p>no previous works yet</p>
        <?php  endif;//  if(isset($previousWroks)):  ?>
               
              </div>
              </div>
        <?php endif// if(isset($_SESSION['archId']) && $archId==$_SESSION['archId']):?>
        <!-- //////////2////// -->
        <!-- <div class="main-f-box">
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
         -->
        <!-- //////////3////// -->
        <!-- <div class="main-f-box">
            <div class="feature-box">
                <div class="feature-img">
                    <img src="../imgs/1.jpg" style="max-width: 100%;" alt="">
                </div>
            </div>
          
          
            <div class="feature-details">
                <h4>los ansulos</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente illo vel eveniet, fugiat inventore eius? Tempora impedit fugiat, praesentium ipsam beatae fugit excepturi dignissimos earum eius architecto vero in qui.</p>
               
            </div>
        </div> -->
        <!-- </div>
        </div> -->
        <!-- ////////////////////////////////////////////////////////// -->
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
    


     </section>
    <!-- ////////////////////////////////////// -->
  
<?php

 require_once("./parts/mainend.php");
 require_once("./parts/footer.php");
 require_once("./parts/layoutgridend.php");
 require_once("./parts/jsincludes.php")
?>

    <!-- hello I'm javaScript -->
    <script src="./script.js"></script>
</body>

</html>