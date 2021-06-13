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
         </div>
         <div class="work-imgs-detailed">
             <p class="work-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates, facere.</p>
             <div class="work-img" style="background-image: url(./images/3.jpg);"></div>
             <div class="work-img" style="background-image: url(./images/3.jpg);"></div>
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