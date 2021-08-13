<!-- IN THE NAME OF ALLAH
     MEMARCOM PROJECT  -->
     <!DOCTYPE html>
<html lang="en">
<head>

   <?php require_once("./parts/meta.php");
        require_once('./config/opratoins.config.php');
        if(isset($_POST['previousWork-find'])):
            $previuasWorks=prevWorkFilter();
        else://(isset($_POST['previousWork-find'])):
         $previuasWorks=getData("SELECT * FROM `previuasworks` ORDER BY `workId` DESC ");
        endif;//(isset($_POST['previousWork-find'])):
       
     //prevWorkFilter
  ?>
   
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
       
           <div class="features">
            
              <!-- /////////////sagasu2//////////////// -->
                 <div class="requests-wraper">
                
              <div class="middleContainer">
                      <div class=" ">
                          <form action="" method="post" class="felx-form" >
                        <?php include('./parts/workTypelist.php') ?>
                        <button type="submit" class="btn btn-primary" name="previousWork-find" value="" ><li class="fa fa-search"></li> </button>
                          </form>        
                         </a>
                      </div>
                </div>
          
            </div>
          
            <!-- <h1>featured destiantions</h1> -->
            <div class="container feed">
                <!-- //////////1////// -->
               <?php if($previuasWorks!=false): ?>
                   <?php foreach($previuasWorks as $previuasWork): ?>
                    <div class="main-f-box">
                    <div class="feature-box">
                        <div class="feature-img">
                            <img src="<?php echo( $previuasWork['photo']); ?>" style="max-width: 100%;" alt="">
                        </div>
                    </div>
                
                  
                    <div class="feature-details">
                        <h4><?php echo( $previuasWork['workTitle']); ?></h4>
                         <h6><?php echo ($previuasWork['workType']); ?></h6>
                        <p><?php echo ($previuasWork['workDescriptoin']); ?></p>
                       
                    </div>
                </div>
                   <?php endforeach;//foreach($previuasWorks as $previuasWork): ?>
               <?php else://if(isset($previuasWorks)): ?>
                        <h3>no prieus works yet</h3>
               <?php endif;//if(isset($previuasWorks)): ?>
              
                <!-- //////////2////// -->
                <!-- <div class="main-f-box">
                    <div class="feature-box">
                        <div class="feature-img">
                            <img src="../imgs/1.jpg" style="max-width: 100%;" alt="">
                        </div>
                        
                    </div>
                  
                  
                    <div class="feature-details">
                        <h4>los ansulos</h4>
                         <h6>work type</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente illo vel eveniet, fugiat inventore eius? Tempora impedit fugiat, praesentium ipsam beatae fugit excepturi dignissimos earum eius architecto vero in qui.</p>
                       
                    </div>
                </div> -->
                
               
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