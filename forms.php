<!-- IN THE NAME OF ALLAH
     MEMARCOM PROJECT  -->
     <!DOCTYPE html>
<html lang="en">
<head>

   <?php require_once("./parts/meta.php");
         require_once('./config/opratoins.config.php');
   ?>
   
    <title>Document</title>
</head>
<style>
    .form-div{
        width: 400px;
        margin:2rem auto;
       
        line-height: 3;
        background-color: whitesmoke;
        padding: 2rem;
        border-radius: 6px;
        box-shadow: .02px .02px 10px gray;
    }
</style>
<body>

    <?php
     
     require_once("./parts/layoutgridstart.php");
     require_once("./parts/nav.php");
     require_once("./parts/mainstart.php");
     
     ?>
 
   
    <!-- ////////////////////////////////////// -->
    
            <?php if(isset($_GET['userType'])){
                  $userType=$_GET['userType'];
            }
             if(isset($_GET['n'] )): 
                $from=$_GET['n'];
              
            ?>
             <?php if($from=='userlogin'): 
               
                 ?>
                    <form   action="" method="post" enctype="multipart/form-data" class="form-div">
                 
                    <div class="form-group">
                    <label for="exampleInputEmail1"> name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter naem" name="user-name" >
                  
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="user-password" >
                    </div>
                    <div class="form-group form-check">
                    
                    <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
                    </div>
                    <button type="submit" class="btn btn-primary" name="user-login-btn" >login </button>
                    <!-- <button type="submit" class="btn btn-success" name="user-logout-btn" >sign in</button> -->
                    
                     <!-- masseges for user  -->
                     <?php require('./parts/messeges.php') ?>


                     <div class="d-flex justify-content-center links">
						لا تمتلك حساب؟ <a href="./forms.php?n=userSignUp&userType=client" class="ml-2"> سجل الان</a>
					</div>    
                </form>

                
                    <!-- //////////////////////////////////////// -->
                <?php elseif($from=='userSignUp'): ?>
                    <?php   if($userType=='client'):?>
                                <form   action="" method="post" enctype="multipart/form-data" class="form-div">
                                
                                <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="./forms.php?n=userSignUp&userType=client">عميل</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./forms.php?n=userSignUp&userType=architect">مهندس</a>
                                </li>
                                </ul>
                                <h5 class="form-title" >التسجيل كعميل</h5>
                                <div class="form-group">
                                <label for="exampleInputEmail1"> name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter naem" name="client-name" >
                                <label for="exampleInputEmail1"> phone</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter naem" name="client-phone" >
                              
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1"> emal</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter naem" name="client-email" >
                              
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="client-password" >
                                </div>
                                <div class="form-group form-check">
                                
                                <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
                                </div>
                                <button type="submit" class="btn btn-primary" name="client-signup-btn" >sign up </button>
                                <!-- <button type="submit" class="btn btn-success" name="user-logout-btn" >sign in</button> -->
                                <!-- masseges for user  -->
                                <?php require('./parts/messeges.php') ?>
                                <div class="d-flex justify-content-center links">
                                     تمتلك حساب؟ <a href="./forms.php?n=userlogin" class="ml-2"> سجل الدخول</a>
                                </div>    
                            </form>
                            <!-- ////////////////////////////////////////////////////////////////// -->
                    <?php   elseif($userType=='architect'):?>
                                 <?php   if(empty( $_SESSION["archId"])): ?>
                                <form   action="" method="post" enctype="multipart/form-data" class="form-div">
                                <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="./forms.php?n=userSignUp&userType=client">عميل</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./forms.php?n=userSignUp&userType=architect">مهندس</a>
                                </li>
                                </ul>
                                <h5 class="form-title" >التسجيل كمهندس</h5>
                                <div class="form-group">
                                <label for="exampleInputEmail1"> name</label>
                                <input require="require" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter naem" name="architect-name" >
                              
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1"> phoneNumber</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter phone" name="architect-phone" >
                              
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1"> emal</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter naem" name="architect-email" >
                              
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="architect-password" >
                                </div>
                                <div class="form-group form-check">
                                
                                <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
                                </div>
                                <button type="submit" class="btn btn-primary" name="architect-signup-btn" >sign up </button>
                                <!-- <button type="submit" class="btn btn-success" name="user-logout-btn" >sign in</button> -->
                                 <!-- masseges for user  -->
                               <?php require('./parts/messeges.php') ?>
                                <div class="d-flex justify-content-center links">
                                     تمتلك حساب؟ <a href="./forms.php?n=userlogin" class="ml-2"> سجل الدخول</a>
                                </div>    
                            </form>
                            <!-- <?php //else://  if(empty( $_SESSION["archId"])): ?>
                                <div class="form-div">
                                     <div class="alert alert-warning" role="alert">
                                   ! انت جاي تستهبل علينا        
                                     </div>  
                    -->
                                        
                                   </div>  
                                
                            <?php endif;//  if(empty( $_SESSION["archId"])): ?>
                            <?php endif;//  if($userType=='client'):?>
                    <!-- ///////////////////////////////////////// -->
                    <?php elseif($from=='orderUplaod'): ?>
                            <?php    if(isset($_SESSION["clientId"])): ?>
                                    <form action="" method="post" class="form-div">

                                    <label for="order-title"> order title</label>
                                   <input require="require" type="text" class="form-control" id="order-title" aria-describedby="emailHelp" placeholder="oreder title" name="order-title" >
                                   
                                   <?php include('./parts/workTypelist.php') ?>
                                   
                                   <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="order-details" placeholder="type order details" ></textarea>
                                      </div>
                                      <button type="submit" class="btn btn-primary" name="order-submit" >submit order </button>
                                      <?php require('./parts/messeges.php') ?>
                                    </form>
                                    <?php else://if(isset($_SESSION["clientId"])) ?>
                                    <div class="form-div">
                                     <div class="alert alert-warning" role="alert">
                                      انت غير مسجل بحساب عميل  
                                     </div>  
                   
                                        <div class="d-flex justify-content-center links">
					        	        لا تمتلك حساب؟ <a href="./forms.php?n=userSignUp&userType=client" class="ml-2"> سجل الان</a>
					                    </div>
                                    <div class="d-flex justify-content-center links">
                                     تمتلك حساب؟ <a href="./forms.php?n=userlogin" class="ml-2"> سجل الدخول</a>
                                        </div>   
                                   </div>     
                                <?php endif;//isset($_SESSION["clientId"]) ?>
              <!-- ///////////////////////////////////////////////////////////// -->
                     <?php elseif($from=='workuplaod'): ?>
                        <form   action="" method="post" enctype="multipart/form-data" class="form-div">
                                
                        <label for="order-title"> order title</label>
                         <?php $archId=$_GET['archid']; ?>
                                    <input type="hidden" name="arch-id" value="<?php echo($archId) ?>" >
                                   <input require="require" type="text" class="form-control" id="order-title" aria-describedby="emailHelp" placeholder="oreder title" name="work-title" >
                                   
                                   <?php include('./parts/workTypelist.php') ?>
                                   
                                   <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="work-details" placeholder="type work details" ></textarea>
                                 </div>
                                 <div class="form-group">
                                     <label for="">uplaoud photo</label>
                                     <input type="file" name="work-img" id=""  accept=".png , .jpg , .tftf" >
                                     </div>
                                     <button type="submit" class="btn btn-primary" name="work-submit" >submit work </button>
                                   
                                  <?php  require('./parts/messeges.php'); ?>
                                </form>
<!-- title file deatila archid work -->
              <!-- ///////////////////////////////////////////////////////////// -->
                     <?php elseif($from=='workUpdate'):
                            $workId=$_GET['workId'];
                            $thisWork=gitselectedrow("select * from `previuasworks` where `workId`='$workId'")
                         ?>
                        <form   action="" method="post" enctype="multipart/form-data" class="form-div">
                                
                        <label for="order-title"> order title</label>
                         <?php //$archId=$_SESSION['archId']; ?>
                                    <input type="hidden" name="work-id" value="<?php echo($workId) ?>" >
                                   <input require="require" type="text" class="form-control" id="order-title" 
                                   aria-describedby="emailHelp" placeholder="oreder title" name="work-title" value="<?php echo($thisWork['workTitle']); ?>" >
                                   
                                   <?php include('./parts/workTypelist.php') ?>
                                   
                                   <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="work-details" placeholder="type work details" ><?php echo($thisWork['workDescriptoin']); ?></textarea>
                                 </div>
                                 <div class="form-group">
                                     <label for="">uplaoud photo</label>
                                     <input type="file" name="work-img" id=""  accept=".png , .jpg , .tftf"  >
                                     <button type="submit" class="btn btn-primary" name="work-update" value="" >submit work </button>
                                    </div>
                                  <?php  require('./parts/messeges.php'); ?>
                                </form>
              <!-- ///////////////////////////////////////////////////////////// -->
                     <?php elseif($from=='reviwArch'): 
                      //<!-- --- -->
                        $orderId=$_GET['orderId'];
                        $archId=$_GET['archid'];
                        $architect=gitselectedrow("SELECT * FROM `architect` WHERE `architect number`='$archId' ");
                        ?>
                      <!-- --- -->
                        <form   action="" method="post" enctype="multipart/form-data" class="form-div rivew-from " style="position: relative;">
                                  <h4 class="form-group">
                                    قيم
                                    <a href="architectprofile.php?archid=<?php echo$archId; ?>" ><?php echo($architect['name']); ?></a> 
                                  </h4>
                                    <input type="hidden" name="arch-id" value="<?php echo($archId) ?>" >
                                    <input type="hidden" name="order-id" value="<?php  echo($orderId) ?>" >
                                  <!-- /////////////////////////// -->
                                  <div class="radio-star-div" >
                                    
                                  <!-- ***** -->
                                 <input type="radio" id="contactChoice1" name="star-count" value="1" class="" style="display: none; width:30px">
                                   <label for="contactChoice1" class="star-label" style="display: inline-block;" >
                                   <i class="fas fa-star"></i>
                                   
                                 </label>
                                  <!-- ***** -->
                                 <input type="radio" id="contactChoice2" name="star-count" value="2" class="" style="display: none; width:30px">
                                   <label for="contactChoice2" class="star-label" style="display: inline-block;" >
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   
                                 </label>
                                  <!-- ***** -->
                                 <input type="radio" id="contactChoice3" name="star-count" value="3" class="" style="display: none; width:30px">
                                   <label for="contactChoice3" class="star-label" style="display: inline-block;" >
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   
                                 </label>
                                  <!-- ***** -->
                                 <input type="radio" id="contactChoice4" name="star-count" value="4" class="" style="display: none; width:30px">
                                   <label for="contactChoice4" class="star-label" style="display: inline-block;" >
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   
                                 </label>
                                     
                                  <!-- ***** -->
                                 <input type="radio" id="contactChoice5" name="star-count" value="5" class="" style="display: none; width:30px">
                                   <label for="contactChoice5" class="star-label" style="display: inline-block;" >
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   
                                 </label>
                                   </div>   
                                     <!-- ///////////////////////////// -->
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="reviw-text" placeholder="type feedback" ></textarea>
                                 </div> 
                                    <?php if(isset($_GET['btn'])):?>
                                      <a href="#" class="btn btn-primary disabled" title="feedback sent" >feed back</a>
                                       <?php  require('./parts/messeges.php'); ?>
                                    <?php else://if(isset($_GET['btn'])):?>
                                      <button type="submit" class="btn btn-primary" name="reviwArch-btn" " >feed back </button>
                                    <?php endif;//if(isset($_GET['btn'])):?>
                                 
                                </form>


                                    
                               
                                 
                    <?php  endif; //from=='userlogin:?>



                                <?php   endif; //isset($_GET['n']))?>
                                        
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