<?php
include_once("./config/db.config.php");

$con=dbconnect();


// function calls
// ///////////////----- architect signup -----------------//////////////
if(isset($_POST['architect-signup-btn'])){
  
    $archName = textboxValue("architect-name");//article_title is the input field name
    $phoneNumber = textboxValue("architect-phone");//article_title is the input field name
    $email = textboxValue("architect-email");
    $password = textboxValue("architect-password");
    // echo('wht th hle si goni ign');
    // echo$email;
    //  print_r('hellow'.gitselectedrow("SELECT * FROM `architect` WHERE `email`='$email'"));
                // if($GLOBALS['archName'] && $GLOBALS['phoneNumber'] && $GLOBALS['email'] && $GLOBALS['password']){
                if($archName && $phoneNumber && $email&& $password){
                    // if(gitselectedrow("SELECT * FROM `architect` WHERE `email`='$email'")==[]){
                $sameEmailQuery= "SELECT * FROM `architect` WHERE TRIM(email) = '$email'";
                $sameEmailResult =   mysqli_query($GLOBALS['con'], $sameEmailQuery)or die(mysqli_error($GLOBALS['con']));
            //  echo(mysqli_num_rows($sameEmailResult));
                if(mysqli_num_rows($sameEmailResult) === 0):
            
                if(createData("INSERT INTO `architect`(`name`,`phone`,`email`,`password`)
                 VALUES ('$archName' ,' $phoneNumber',' $email','$password');")){
                    header('Location:forms.php?n=userSignUp&userType=architect&msg=architectAdded');exit();

                } else{header('Location:forms.php?n=userSignUp&userType=architect&msg=addFail');exit();}
          
                // } 
       else :  header('Location:forms.php?n=userSignUp&userType=architect&msg=emailExist');exit();  
            endif; 
        //  else{ echo'what the hell is goning on';}

                } else{ header('Location:forms.php?n=userSignUp&userType=architect&msg=emptytext');exit();}
               
               
            }
 // /////////////////////----------client sign up-------------/////////////////////////////////////
 if(isset($_POST['client-signup-btn'])){
     $clientName = textboxValue('client-name');
     $clientEmail = textboxValue('client-email');
     $clientPhone = textboxValue('client-phone');
     $clientPassword = textboxValue('client-password');
     if($clientName && $clientEmail && $clientPhone && $clientPassword){
        $sameEmailQuery= "SELECT * FROM `client` WHERE TRIM(email) = '$clientEmail'";
        $sameEmailResult =   mysqli_query($GLOBALS['con'], $sameEmailQuery)or die(mysqli_error($GLOBALS['con']));
    //  echo(mysqli_num_rows($sameEmailResult));
                if(mysqli_num_rows($sameEmailResult) === 0):
                            if(createData("INSERT INTO `client`(`name`,`phone`,`email`,`password`)
                            VALUES ('$clientName' ,' $clientPhone',' $clientEmail','$clientPassword');")){
                           
                            $AddedClientRecord = mysqli_query($GLOBALS['con'], "SELECT * FROM `client` WHERE TRIM(email) = '$clientEmail' ; ")or die(mysqli_error($GLOBALS['con']));
                            $AddedClientArray = mysqli_fetch_assoc( $AddedClientRecord);
                            $_SESSION["clientId"] = $AddedClientArray['client number'];
                            $_SESSION["clientPhoto"] = $AddedClientArray['photo'];
                            header('Location:forms.php?n=userSignUp&userType=client&msg=clientAdded');exit();
                              } else{ //echo('walla ennah lagaja');
                                  header('Location:forms.php?n=userSignUp&userType=client&msg=accountAddFail');exit();}
                else :  header('Location:forms.php?n=userSignUp&userType=client&msg=emailExist');exit();   
                endif; 
     }else{header('Location:forms.php?n=userSignUp&userType=client&msg=emptytext');exit();}

 }
//  /////////////////--------- order save -------/////////////////
 if(isset($_POST['order-submit'])){
    $orderTitle = textboxValue('order-title');
    $orderDetails = textboxValue('order-details');
    $orderType = textboxValue('workType-list');
    $clientId =  $_SESSION["clientId"];
    if($orderTitle && $orderDetails && $orderType ){

        if(createData("INSERT INTO `orders`(`orederTitle`,`orderDetails`,`orderType`,`custmerId`)
        VALUES ('$orderTitle' ,' $orderDetails',' $orderType','$clientId');"))
          {header('Location:forms.php?n=orderUplaod&msg=orderAdded');exit();
             //  echo('ofrder added');
        }

        else{header('Location:forms.php?n=orderUplaod&msg=addFail');exit();
          //  echo('addfial');
        }
          
    

    }else{header('Location:forms.php?n=orderUplaod&msg=emptytext');exit();
        //echo('emty text');
    }
    
 }
//  /////////////////--------- architect berivus work save -------/////////////////
 if(isset($_POST['work-submit'])){
    $archId = textboxValue('arch-id');
    $wrokTitle = textboxValue('work-title');
    $wrokType = textboxValue('workType-list');
    $wrokDetails =  textboxValue("work-details");
    $wrokImgName = time()."_". $_FILES['work-img']['name'];
    $imgSavePath ='./images/'.$wrokImgName;


    if($archId && $wrokTitle && $wrokType && $wrokDetails ){
        move_uploaded_file($_FILES['work-img']['tmp_name'],$imgSavePath);

        if(createData("INSERT INTO `previuasworks`(`architectNumber`,`workTitle`,`workType`,`workDescriptoin`,`photo`)
        VALUES ('$archId' ,' $wrokTitle',' $wrokType','$wrokDetails',' $imgSavePath');"))
          {header('Location:forms.php?n=workuplaod&msg=workAdded&archid='.$archId);exit();
             //  echo('ofrder added');
        }

        else{//header('Location:forms.php?n=workuplaod&msg=addfail&archid='.$archId);exit();
          //  echo('addfial');
        }
          
    

    }else{header('Location:forms.php?n=workuplaod&msg=emptytext&archid='.$archId);exit();
   
        //echo('emty text');
    }
    
 }
//  /////////////////--------- architect berivus work update -------/////////////////
 if(isset($_POST['work-update'])){
   
    $archId = $_SESSION["archId"];
    $workId = textboxValue('work-id');
    $wrokTitle = textboxValue('work-title');
    $wrokType = textboxValue('workType-list');
    $wrokDetails =  textboxValue("work-details");
    $wrokImgName = time()."_". $_FILES['work-img']['name'];
    $imgSavePath ='./images/'.$wrokImgName;


    if($archId && $wrokTitle && $wrokType && $wrokDetails ){
        move_uploaded_file($_FILES['work-img']['tmp_name'],$imgSavePath);

        if(createData("UPDATE `previuasworks` SET
         `workDescriptoin`=' $wrokDetails',
         `workType`= '$wrokType',
        `workTitle`='$wrokTitle',
        `photo`=' $imgSavePath' 
        WHERE `workId`='$workId' AND
         `architectNumber`='$archId'"))
          {header('Location:forms.php?n=workUpdate&msg=workAdded&workId='.$workId);exit();
             //  echo('ofrder added');
        }

        else{//header('Location:forms.php?n=workUpdate&msg=addfail&workId='.$workId);//exit();
          //  echo('addfial');
        }
          
    

    }else{header('Location:forms.php?n=workUpdate&msg=emptytext&workId='.$workId);exit();
   
        //echo('emty text');
    }
    
 }
 //  /////////////////--------- architect berivus work delete -------/////////////////
 if(isset($_GET['delete'])){
     if($_GET['delete']){
         $workId=$_GET['workId'];
         $archId=$_SESSION["archId"];
        $sql = "
        DELETE  FROM previuasworks WHERE `workId` ='$workId' AND `architectNumber`=' $archId';
        ";
        if(mysqli_query($GLOBALS['con'],$sql)){
            {header("Location:architectprofile.php?msg=workAdded&archid=".$_SESSION["archId"]);exit();}
        
        }else{echo("delete error".mysqli_error($GLOBALS['con']));}
     }
 }
  /////////////////////----------offersave ------NN-------////////////////
  if(isset($_POST['offer-apply-btn'])){
    $orderId=textboxValue('order-id');
 $offerDetails = textboxValue('offer-apply-txt');
     $orderNumber =  textboxValue('order-id');
     $architectNumber = $_SESSION["archId"];
     if($offerDetails &&  $architectNumber):
    
  //   $sameofferQuery= "SELECT * FROM `offers` WHERE TRIM(offernumber) = '$architect number'";
   //  $sameofferResult =   mysqli_query($GLOBALS['con'], $sameofferQuery)or die(mysqli_error($GLOBALS['con']));
     //  echo(mysqli_num_rows($sameofferResult));
                // if(mysqli_num_rows($sameofferResult) === 0):
                      if(createData("INSERT INTO `offers`(`offer number`,`offerDetails`,`orderNumber`,`architectNumber`)
                 
                             VALUES ('$orderId','$offerDetails','$orderNumber ','$architectNumber ');")){
                             header('Location:requestsdetails.php?msg=workAdded&orderId='.$orderId);exit();
                              //   else :  header('Location:forms.php?n=userSignUp&userType=client&msg=emailExist');exit();  
                           //   endif;
                         } else{ //echo('walla ennah lagaja'); //echo('walla ennah lagaja');
                          header('Location:requestsdetails.php?msg=notsaved&orderId='.$orderId);exit();
                         }
                         else://if($offerDetails &&  $architectNumber):
                             header('Location:requestsdetails.php?msg=emptytext&orderId='.$orderId);exit();
                         endif;////if($offerDetails &&  $architectNumber):
          }

//  /////////////////////////------------- offer accept  ------------///////////////////////////////
if(isset($_POST['offer-accept-btn'])){
    $archId=$_POST['archId'];
    $orderId=$_POST['orderId'];
    $sameArchOffer=gitselectedrow("SELECT * FROM offers WHERE `architectNumber`='$archId' AND `orderNumber`=$orderId 
   ");
    if($sameArchOffer==false):
        echo('yee');
    else://($sameArchOffer==false):
        echo('meh');
    endif;//($sameArchOffer==false):
        
    
}
//  /////////////////////////------------- feed back ------------///////////////////////////////
//if(isset($_POST['reviwArch-btn'])){
   // $archId=textboxValue('arch-id');
    //$clientId=$_SESSION['clientId'];
   // $starcount=$_POST['star-count'];
   // $feedText=textboxValue('reviw-text');
      //  if(isset($starcount)):
        //     $sameEmailQuery= "SELECT * FROM `client` WHERE TRIM(email) = '$clientEmail'";
        //     $sameEmailResult =   mysqli_query($GLOBALS['con'], $sameEmailQuery)or die(mysqli_error($GLOBALS['con']));
        // //  echo(mysqli_num_rows($sameEmailResult));
        //             if(mysqli_num_rows($sameEmailResult) === 0):
      //  else://if(isset($starcount)):
            //choose rateheader
      //  endif;//if(isset($starcount)):
       // }  
// ////////////////////sagasu//////////////////////////////////

function orderfilter(){
    $wrokType = textboxValue('workType-list');
    
   if($wrokType){
     $result=getData("SELECT * FROM `orders`  `orderId` WHERE TRIM(`orderType`)='$wrokType' ORDER BY orderId DESC ;");
}   
  
        return $result;
    
}
// ////////////////////sagasu2//////////////////////////////////

function prevWorkFilter(){
    $wrokType = textboxValue('workType-list');
    
   if($wrokType){
     $result=getData("SELECT * FROM `previuasworks`  `workId` WHERE TRIM(`workType`)='$wrokType' ORDER BY workId DESC ;");
}
  return $result;
}
// ////////////////////sagasu3//////////////////////////////////

function archNameFilter(){
    $name = textboxValue('architect-name');
    
   if($name){
     $result=getData("SELECT * FROM `architect` WHERE `name` LIKE '%$name%' ORDER BY `architect number` DESC;");
}
  return $result;
}
// //////////////////////////////////////////////////////
if(isset($_POST['udpateArch'])){
    
    achtivateAccount($_GET['archId']);
}
if (isset($_POST['orderUpdate'])){
    updateOrderFunction($_GET['orderId']);
}

// the read function has to be the least called so thet it get us the most updated veiw after any add or delete or updates******

// $articles=getData();

////////////////////////////////-----CURD functions------////////////////////////////////////////////////
    //save function
function createData($sql){
  
    if(mysqli_query($GLOBALS['con'],$sql)){

      textNode("alert alert-success","تمت العملية بنجاح");
    return true;
        
    }else{
        echo('record not saved : '.mysqli_error($GLOBALS['con']));
        return false;
    }
   
}
//getting the input feilds current value
function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}
// massgess function
function textNode($class,$massege){
    $elemnt="<h6 calss='$class'>$massege</h6>";
    echo $elemnt;
}
// getting the whole table to show up the data
function getData($sql){
  //  echo $sql; 
    $result =   mysqli_query($GLOBALS['con'], $sql)or die(mysqli_error($GLOBALS['con']));
  if(mysqli_num_rows($result)>0){
        $allresults = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $allresults;
    }
    else{
       
       // echo("table is empty");
        return false;
    }
}
// the update function for architect account
function achtivateAccount($id){
    $accoutState=$_POST['activateAccount'];
    $cvFileName =time()."_". $_FILES['archfile']['name'];
    $target ='./cvfiles/'. $cvFileName;
   
        move_uploaded_file($_FILES['archfile']['tmp_name'],$target);
        $sql = "
        UPDATE architect SET cv='$cvFileName',status=' $accoutState' 
        WHERE `architect number`='$id';
        ";
    if(mysqli_query($GLOBALS['con'],$sql)){
       header('location:control3forms.php?n=updateArch&msg=workAdded&archId='.$id);exit;
    }else{echo('record not saved'.mysqli_error($GLOBALS['con']));}
}
//update function for eding and publishing the order
function updateOrderFunction($id){
    $details=textboxValue("orderDetails");
    $type=textboxValue('workType-list');
    echo $type;
    $publish=textboxValue('publish');
   // print_r($_POST);
       $sql= " UPDATE `orders` SET `orderDetails`='$details',`published`=' $publish',`orderType`='$type'
        WHERE `orderId`='$id';";
    if(mysqli_query($GLOBALS['con'],$sql)){
       // textNode("alert alert-success","تمت العملية بنجاح");
      // header('Location:control3forms.php?msg=workAdded&n=ordersdata&orderId='.$id);exit();
    }else{echo('record not saved'.mysqli_error($GLOBALS['con']));}
}
//bring text of selected row to the input fiedls when clicking the edit button
function gitselectedrow($sql){
    // $sql="
    // SELECT * FROM articles WHERE articleId='$id';
    // ";
    $result=mysqli_query($GLOBALS['con'],$sql)or die(mysqli_error($GLOBALS['con']));
   
    //$myResult=mysqli_fetch_array($result);
    //return $myResult;
    if(mysqli_num_rows($result)>0){
        $myResult = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $myResult;
    }
    else{
       
       // echo("no such record");
        return false;
    }
}

/////////////////////////////---------- login system ---------////////////////////////////////////////////
if(isset($_POST['user-login-btn'])){
    // $archName = textboxValue("archName");
  userLogedin();
}
// if(isset($_GET['log'])){
    // if($_GET['log']=='logout'){
    // session_start();
   // remove all session variables
    session_unset(); 
    session_destroy();
    // echo('sessrion after destropy');
    // print_r($_SESSION);
// }
// }
function userLogedin(){
    // session_start();
      $userName = textboxValue('user-name');
    $userpass =textboxValue(('user-password'));
     $clientUser = gitselectedrow(" SELECT * FROM `client` WHERE `name` = '$userName' AND `password` = '$userpass' ; ");
     $architectUser = gitselectedrow(" SELECT * FROM `architect` WHERE `name` = '$userName' AND `password` = '$userpass' ; ");
//    echo($clientUser['name']);
//  print_r($clientUser);
//  print_r($architectUser).'//////////////////';
   if(isset($clientUser)){
      
       $_SESSION["clientId"] = $clientUser['client number'];
        $_SESSION["clientName"] = $clientUser['name'];
       $_SESSION["clientPhoto"] = $clientUser['photo'];
       header('Location:forms.php?n=userlogin&msg=userLogedin');exit();
   }elseif(isset($architectUser)){
    $_SESSION["archId"] = $architectUser['architect number'];
    // $archId=$_SESSION["archId"];
    $_SESSION["archName"] = $architectUser['name'];
   $_SESSION["archPhoto"] = $architectUser['photo'];
   header("Location:architectprofile.php?archid=".$_SESSION["archId"]);exit();
   }else{
    header('Location:forms.php?n=userlogin&msg=errLoginTxt');exit();
   }
//    print_r($_SESSION);
}












