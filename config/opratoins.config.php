<?php
include_once("./config/db.config.php");

$con=dbconnect();


// function calls
// ///////////////----- architect signut -----------------//////////////
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
                    header('Location:forms.php?n=userSignUp&userType=architect&msg=architectAdded');

                } else{header('Location:forms.php?n=userSignUp&userType=architect&msg=accountAddFail');}
          
                // } 
       else :  header('Location:forms.php?n=userSignUp&userType=architect&msg=emailExist');   
            endif    ; 
        //  else{ echo'what the hell is goning on';}

                } else{ header('Location:forms.php?n=userSignUp&userType=architect&msg=emptytext');}
               
               
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
                            header('Location:forms.php?n=userSignUp&userType=client&msg=clientAdded');
                              } else{ //echo('walla ennah lagaja');
                                  header('Location:forms.php?n=userSignUp&userType=client&msg=accountAddFail');}
                else :  header('Location:forms.php?n=userSignUp&userType=client&msg=emailExist');   
                endif; 
     }else{header('Location:forms.php?n=userSignUp&userType=client&msg=emptytext');}

       // loging in the user after account is created -start a sesstion-
            //  userLogedin();
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

    //    textNode("alert alert-success","تمت العملية بنجاح");
    return true;
        
    }else{
        // echo('record not saved'.mysqli_error($GLOBALS['con']));
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
    else{return("table is empty");}
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
        textNode("alert alert-success","updated scussesfully");
    }else{echo('record not saved'.mysqli_error($GLOBALS['con']));}
}
//update function for eding and publishing the order
function updateOrderFunction($id){
    $details=textboxValue("orderDetails");
    $publish=$_POST['publish'];
   // print_r($_POST);
    if(isset($_POST['udpateArch'])){
        $type=$_POST['workType'];
      $sql= " UPDATE `orders` SET `orderDetails`='$details',`published`=' $publish',`orderType`='$type'
        WHERE `orderId`='$id';";
    }else{
        $sql= " UPDATE `orders` SET `orderDetails`='$details',`published`=' $publish'
        WHERE `orderId`='$id';";
    }
    if(mysqli_query($GLOBALS['con'],$sql)){
        textNode("alert alert-success","تمت العملية بنجاح");
    }else{echo('record not saved'.mysqli_error($GLOBALS['con']));}
}
//bring text of selected row to the input fiedls when clicking the edit button
function gitselectedrow($sql){
    // $sql="
    // SELECT * FROM articles WHERE articleId='$id';
    // ";
    $result=mysqli_query($GLOBALS['con'],$sql)or die(mysqli_error($GLOBALS['con']));
   
    $myResult=mysqli_fetch_array($result);
    return $myResult;
}

/////////////////////////////---------- login system ---------////////////////////////////////////////////
if(isset($_POST['user-login-btn'])){
    // $archName = textboxValue("archName");
  userLogedin();
}
if(isset($_GET['log'])){
    if($_GET['log']=='logout'){
    // session_start();
   // remove all session variables
    session_unset(); 
    session_destroy();
    // echo('sessrion after destropy');
    // print_r($_SESSION);
}
}
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
       header('Location:forms.php?n=userlogin&msg=userLogedin');
   }elseif(isset($architectUser)){
    $_SESSION["archId"] = $architectUser['architect number'];
    $_SESSION["archName"] = $architectUser['name'];
   $_SESSION["archPhoto"] = $architectUser['photo'];
   header('Location:forms.php?n=userlogin&msg=userLogedin');
   }else{
    header('Location:forms.php?n=userlogin&msg=errLoginTxt');
   }
//    print_r($_SESSION);
}












