<!-- IN THE NAME OF ALLAH
     MEMARCOM PROJECT  -->
<?php  
    include_once("./config/opratoins.config.php");
    if(isset($_POST['arch-find'])):
        $architects=archNameFilter();
    else://(isset($_POST['arch-find'])):
         $architects=getdata("SELECT * FROM `architect` ORDER BY `architect number` ;");
    endif;//(isset($_POST['arch-find'])):
   
   
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
               <li><a href="#">Lorem, ipsum.</a></li>
               <li><a href="#">Lorem, ipsum.</a></li>
               <li><a href="#">Lorem, ipsum.</a></li>
               <li><a href="#">Lorem, ipsum.</a></li>
               <li><a href="#">Lorem, ipsum.</a></li>
               <li><a href="#">Lorem, ipsum.</a></li>
           </ul>
       </aside> -->
       <section class="mian-section ">
                <!-- /////////////sagasu3//////////////// -->
                <!-- <div class="requests-wraper">
                
                <div class="middleContainer">
                        <div class=" ">
                            <form action="" method="post" class="felx-form" >
                            <div class="form-group">
                                
                                <input type="text" class="form-control"  placeholder="type architect name " name="architect-name" >
                              
                                </div>
                          <button type="submit" class="btn btn-primary" name="arch-find" value="" ><li class="fa fa-search"></li> </button>
                            </form>        
                           </a>
                        </div>
                </div>
            
              </div> -->
        <div class="usersfeedback ">
            <div class="container feed">
                <!-- <h1>uesers review</h1> -->
                <?php foreach($architects as $architect): ?>
                  <a href="./architectprofile.php?archid=<?php echo($architect['architect number']); ?>" role="link button " style=" text-decoration: none ; color:inherit" >
                    <div class="user-review-item">
                        <div class="user-review">
                            <p><?php echo $architect["address"] ?></p>
                            <h4> <?php echo $architect["name"] ?> </h4>
                        
                            
                        </div>
                        <img src="<?php echo $architect["photo"] ?>" style="width: 60px; height: 60px;" alt="">
                    </div>
                </a>
                    
            
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