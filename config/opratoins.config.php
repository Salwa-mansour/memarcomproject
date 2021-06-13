<?php
require_once("./config/db.config.php");

$con=dbconnect();


// function calls

// if(isset($_POST['save'])){
//     createData();
// }
// if(isset($_POST['update'])){
//    // echo"function faired  ";
//    //  print_r($_POST['editId'] )  ;
//     updateData($_POST['editId']);

// }//else{echo"functions not faired";}
// if(isset($_POST['delete'])){
//     deleteData($_POST['editId']);

// }

// the read function has to be the least called so thet it get us the most updated veiw after any add or delete or updates******

// $articles=getData();

////////////////////////////////-----CURD functions------////////////////////////////////////////////////
    // showing data in browser
    // function getData0($tableName,$order){
    //     $sql = sprintf("SELECT * FROM %t ORDER BY %o DESC ;",$tableName,$order);
    //     getData($sql);
    // }
function getData($sql){
    // $sql = '
    // SELECT * FROM `$tableName` ORDER BY `$order` DESC ;
    // ';
   // $sql = sprintf("There are %u million bicycles in %s.",$number,$str);
    // $sql = sprintf("SELECT * FROM %t ORDER BY %o DESC ;",$tableName,$order);
    //store the returend record in $result
    $result =   mysqli_query($GLOBALS['con'], $sql);//or die(mysqli_error($GLOBALS['con']))
  // $result =   mysqli_query($GLOBALS['con'], sprintf("SELECT * FROM %t ORDER BY %o DESC ;",$tableName,$order));//or die(mysqli_error($GLOBALS['con']))
    // print_r (mysqli_fetch_row($result));
    if(mysqli_num_rows($result)>0){
        // $result = mysqli_query($GLOBALS['con'],$sql);
        $allresults = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $allresults;
    }
    else{return("table is empty");}
}
// getdata0("architect","architect number");
// print_r (getdata("SELECT * FROM `architect` ORDER BY `architect number`"));
// print_r (getdata0("architect","architect number"));