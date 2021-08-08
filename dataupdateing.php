<?php 
 include('./config/opratoins.config.php');


?>

<!-- IN THE NAME OF ALLAH
     MEMARCOM PROJECT  -->
     <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="./assets/dist/css/bootstrap.min.css">
    <!-- <?php
   // require_once("./parts/meta.php")
    ?> -->
   
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
                <div class="">

              <?php  if(isset($_GET['n'])): ?>
                <!-- <button data-close-button class="close-button">&times;</button> -->
                <?php 
             $from=$_GET['n'];
              if($from=="addArch"):
                 ?>

                    <form action="./dataupdateing.php?n=addArch" method="post">
                        <ul>
                            <li><label for="ArchName">name</label><input type="text" name="archName" id=""></li>
                            <li><label for="phoneNumber">phoneNumber</label><input type="text" name="phoneNumber" id=""></li>
                            <li><label for="passwrod">passWrod</label><input type="password" name="password" id=""></li>
                            <li><label for="address">address</label><input type="text" name="address" id=""></li>
                            <li>
                                   
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
 
                            </li>
                         
                            <input type="submit" class="conrol-btn" value="archSave" name="archSave">
                        </ul>
                    </form>

                    <?php  // endif; // if($from=="addArch"): ?>
                <!-- **************************************** -->
                <?php 
            
                $from=$_GET['n'];
                //    <!--  ************************************ -->
               elseif($from=="ordersdata"):
                $id=$_GET['orderId'];
                $orders=gitselectedrow( "SELECT `orderId`,`orederTitle`,`orderDetails`,`published` FROM `orders` WHERE `orderId`='$id';");
            
                 ?>

                    <form action="./dataupdateing.php?n=ordersdata&orderId=<?php echo $orders['orderId'] ?>" method="post">
                        <ul>
                            <li><h5><?php echo $orders['orederTitle'] ?></h5></li>
                         
                           <li><label for="workType">workType</label><?php include('./parts/workTypelist.php') ?></li>
                            <li><label for="orderDetails">orderDetails</label><textarea name="orderDetails" class="details-texteara" rows="10"> <?php echo $orders['orderDetails'] ?> </textarea></li>
                            
                           
                                <div class="radio-div">
                                     <p>publish this order</p>
                                       <ul>
                                            <?php if($orders['published']=='false'):?>
                                          <li><label for="publish">publish</label><input type="radio" name="publish" value="true" checked></li>
                                          <li><label for="publish">not publish</label><input type="radio" name="publish" value="false" ></li>
                                         <?php else: ?>
                                            <li><label for="publish">publish</label><input type="radio" name="publish" value="true" ></li>
                                          <li><label for="publish">not publish</label><input type="radio" name="publish" value="false" checked></li>
                                          <?php endif;  //if($orders['published']=='true'):?>
                                        </ul>
                                 </div>
                         
                          
                            <input type="submit" class="conrol-btn" value=" orderUpdate" name="orderUpdate">
                            <button role="submit" class="conrol-btn" value="orderUpdate" name="orderUpdate" >hh</button>
                        </ul>
                    </form>

                    <?php  // endif; //if($from=="addArch"):?>
                   <!--  ************************************ -->
                       <?php
             
                   elseif($from=="updateArch"):
                    $id=$_GET['archId'];
                    $architect=gitselectedrow(" SELECT `architect number`,`name`,`cv`,`status` FROM architect WHERE `architect number`='$id';");
                //   print_r($architect);
                //     echo $architect['architect number'];
                    ?>

                    <form action="./dataupdateing.php?n=updateArch&archId=<?php echo $architect['architect number']; ?>" method="post" enctype="multipart/form-data">
                        <ul>
                          <p><?php echo $architect['name']; ?></p>
                            <li><label for="archfile">docments</label><input type="file" name="archfile" value="<?php echo $architect['name']; ?>"></li>
                            <?php // if($architect['status']=='disabled'):?>
                            <!-- <li><label for="activateAccount">activateAccount</label><input type="checkbox" name="activateAccount" value="inable"></li> -->
                            <?php //else: ?>
                            <!-- <li><label for="activateAccount">activateAccount</label><input type="checkbox" name="activateAccount" value="inable" checked="checked"></li> -->
                         
                            <?php //endif;  //if($architect['status']=='disabled'):?>
                                <div class="radio-div">
                                     <p>Activate this account</p>
                                       <ul>
                                            <?php if($architect['status']=='disabled'):?>
                                          <li><label for="activateAccount">activateAccount</label><input type="radio" name="activateAccount" value="inable" ></li>
                                          <li><label for="activateAccount">not activateAccount</label><input type="radio" name="activateAccount" value="disabled" checked></li>
                                         <?php else: ?>
                                            <li><label for="activateAccount">activateAccount</label><input type="radio" name="activateAccount" value="inable" checked></li>
                                          <li><label for="activateAccount">not activateAccount</label><input type="radio" name="activateAccount" value="disabled" ></li>
                                          <?php endif;  //if($architect['status']=='disabled'):?>
                                        </ul>
                                 </div>
                         
                            <input type="submit" class="conrol-btn" value="udpateArch" name="udpateArch">
                        </ul>
                    </form>
                    <!-- /////////////////////////////////////////// -->
                   <?php elseif($from=='userlogin'):

                       ?>

                    <form>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                      
                   
                      <!-- //////////////////////////////////////// -->
                    <?php  endif; //if($from=="addArch"):?>
                      
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