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
         
        <div class="usersfeedback">
            <!-- <h1>uesers review</h1> -->
            <div class="container feed">
                <div class="user-review-item">
                    <div class="user-review">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia odit praesentium repellat aperiam aliquid incidunt, eum doloremque animi reprehenderit consequuntur rerum similique molestiae, voluptatem ad dolore dicta corporis iure recusandae.</p>
                        <h4>person mame</h4>
                        <small>los anolos</small>
                        
                    </div>
                    <img src="./images/p1.jpg" style="width: 60px; height: 60px;" alt="">
                </div>
                <div class="user-review-item">
                    <div class="user-review">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia odit praesentium repellat aperiam aliquid incidunt, eum doloremque animi reprehenderit consequuntur rerum similique molestiae, voluptatem ad dolore dicta corporis iure recusandae.</p>
                        <h4>person mame</h4>
                        <small>los anolos</small>
                        
                    </div>
                    <img src="../images/p2.jpg" style="width: 60px; height: 60px;" alt="">
                </div>
                <div class="user-review-item">
                    <div class="user-review">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia odit praesentium repellat aperiam aliquid incidunt, eum doloremque animi reprehenderit consequuntur rerum similique molestiae, voluptatem ad dolore dicta corporis iure recusandae.</p>
                        <h4>person mame</h4>
                        <small>los anolos</small>
                        
                    </div>
                    <img src="./images/p3.jpg" style="width: 60px; height: 60px;" alt="">
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