<?php 
 include('./config/opratoins.config.php');


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
    <div class="form-container">
                <div class="formdiv">
                <!-- <button data-close-button class="close-button">&times;</button> -->
                <?php 
                if(isset($_GET['n'])):
                $from=$_GET['n'];
                //    <!--  ************************************ -->
               if($from=="addArch"):
                 ?>

                    <form action="./dataupdateing.php?n=addArch" method="post">
                        <ul>
                            <li><label for="ArchName">name</label><input type="text" name="archName" id=""></li>
                            <li><label for="phoneNumber">phoneNumber</label><input type="text" name="phoneNumber" id=""></li>
                            <li><label for="passwrod">passWrod</label><input type="password" name="password" id=""></li>
                            <li><label for="address">address</label><input type="text" name="address" id=""></li>
                            <input type="submit" class="conrol-btn" value="archSave" name="archSave">
                        </ul>
                    </form>

                    <?php   endif; //if($from=="addArch"):?>
                   <!--  ************************************ -->
                       <?php
             
                   if($from=="updateArch"):
                    $id=$_GET['archId'];
                    $architect=gitselectedrow(" SELECT `architect number`,`name`,`cv`,`status` FROM architect WHERE `architect number`='$id';");
                //   print_r($architect);
                //     echo $architect['architect number'];
                    ?>

                    <form action="./dataupdateing.php?n=updateArch&archId=<?php echo $architect['architect number']; ?>" method="post" enctype="multipart/form-data">
                        <ul>
                          <p><?php echo $architect['name']; ?></p>
                            <li><label for="archfile">docments</label><input type="file" name="archfile" value="<?php echo $architect['name']; ?>"></li>
                            <?php if($architect['status']=='disabled'):?>
                            <li><label for="activateAccount">activateAccount</label><input type="checkbox" name="activateAccount" value="inable"></li>
                            <?php else: ?>
                            <li><label for="activateAccount">activateAccount</label><input type="checkbox" name="activateAccount" value="inable" checked="checked"></li>
                         
                            <?php endif;  //if($architect['status']=='disabled'):?>
                            <input type="submit" class="conrol-btn" value="udpateArch" name="udpateArch">
                        </ul>
                    </form>

                    <?php   endif; //if($from=="addArch"):?>
                      
                    <?php   endif; //isset($_GET['n']))?>
                  
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