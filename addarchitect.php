<?php 
 include('./config/opratoins.config.php')
?>

<!-- IN THE NAME OF ALLAH
     MEMARCOM PROJECT  -->
     <!DOCTYPE html>
<html lang="en">
<head>

   <?php
    require_once("./parts/meta.php")?>
   
    <title>Document</title>
</head>

<body>
  

    <?php
     
     require_once("./parts/layoutgridstart.php");
     require_once("./parts/nav.php");
     require_once("./parts/mainstart.php");
     
     ?>
 
   
    <!-- ////////////////////////////////////// -->
    <div class="">
                <div class="formdiv">
                <button data-close-button class="close-button">&times;</button>
                <?php 
            //     $from=$_GET['n'];
            //    if($from=="addArch"):
                 ?>

                    <form action="./addarchitect.php" method="post">
                        <ul>
                            <li><label for="ArchName">name</label><input type="text" name="archName" id=""></li>
                            <li><label for="phoneNumber">phoneNumber</label><input type="text" name="phoneNumber" id=""></li>
                            <li><label for="passwrod">passWrod</label><input type="password" name="password" id=""></li>
                            <li><label for="address">address</label><input type="text" name="address" id=""></li>
                            <input type="submit" value="archSave" name="archSave">
                        </ul>
                    </form>

                    <?php  // endif; ?>

                </div>
         
        </div>
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