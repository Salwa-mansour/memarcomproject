<!-- IN THE NAME OF ALLAH
     MEMARCOM PROJECT  -->
<?php  
    include_once("./config/opratoins.config.php");
    $architects=getdata("SELECT * FROM `architect` ORDER BY `architect number` limit  10;");
   
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
         
        <div class="usersfeedback ">
            <div class="container feed">
                <!-- <h1>uesers review</h1> -->
                <?php foreach($architects as $architect): ?>
            
                    <div class="user-review-item">
                        <div class="user-review">
                            <p><?php echo $architect["address"] ?></p>
                            <h4> <?php echo $architect["name"] ?> </h4>
                        
                            
                        </div>
                        <img src="./images/<?php echo $architect["photo"] ?>" style="width: 60px; height: 60px;" alt="">
                    </div>
                
                    
            
                <?php endforeach; ?>
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