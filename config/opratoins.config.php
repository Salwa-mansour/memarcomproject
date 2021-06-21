<?php
include_once("./config/db.config.php");

$con=dbconnect();


// function calls

if(isset($_POST['archSave'])){
    $archName = textboxValue("archName");//article_title is the input field name
    $phoneNumber = textboxValue("phoneNumber");//article_title is the input field name
    $password = textboxValue("password");
    $address = textboxValue("address");
    if($GLOBALS['archName'] && $GLOBALS['phoneNumber'] && $GLOBALS['password'] && $GLOBALS['address']){
   //call the save function
        createData("INSERT INTO `architect`(`name`,`phone`,`password`,`address`) VALUES ('$archName' ,' $phoneNumber',' $password','$address');");
   }else{textNode('',"txtbox are emptey");}
}
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
        textNode("","تمت العملية بنجاح");
    }else{echo('record not saved'.mysqli_error($GLOBALS['con']));}
   
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
        textNode("","updated scussesfully");
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
        textNode("","تمت العملية بنجاح");
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