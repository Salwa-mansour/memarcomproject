
<!doctype html>
<html lang="ar" dir="rtl">
  <head>
  <?php 
 if(session_start()){
 // echo('ssteon stsrated');
 }
 include('./config/opratoins.config.php');
  //print_r($_SESSION);
 if(isset($_SESSION['adminId'])):
 // echo('ffsds');//shwo controlpanel
 else:
   header('location:adminlogin.php');exit;
 endif;

?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>  لوحة التحكم </title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard-rtl/"> -->
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="stylesheet" href="./fontawesome-free-5.15.3-web/css/all.css">

    <!-- Bootstrap core CSS -->

<link rel="stylesheet" href="./assets/dist/js/bootstrap.js">

<link rel="stylesheet" href="./dashboard-rtl-1/feathericons/assets/themes/twitter/css/feather.css">
<script src="./js/jquery-3.5.1.js"></script>
<!-- <link rel="stylesheet" href="../assets/dist/css/bootstrap-theme.css"> -->
<link href="./assets/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
<script src="./assets/jquey/jquery.min.js"></script>
      <script src="./assets/dist/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="./controlpanel.css">
    
    <!-- Custom styles for this template -->
    <!-- <link href="../dashboard/dashboard.rtl.css" rel="stylesheet"> -->
  </head>
  <body>
    
<header class="navbar navbar-dark  bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 " href="./default.php">
    <img class="nav-logo" src="./images/lighthorisntallogo2.png" alt="">
    <!-- memarocm -->
  </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="تبديل التنقل">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="input-group md-form form-sm form-2 pl-0">
  <input class="form-control my-0 py-1 lime-border" type="text" placeholder="Search" aria-label="Search">
  <div class="input-group-append">
    <span class="input-group-text lime lighten-2" id="basic-text1"><i class="fas fa-search text-grey"
        aria-hidden="true"></i></span>
  </div>
</div>

</div>
  <ul class="navbar-nav px-3">
  <li class="nav-item">
     
        </li>
   
<!-- Basic dropdown -->
<!-- <li class="nav-item"> -->
  <!-- Basic dropdown -->
  <!-- <div class="dropdown">
  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Account</span>
  </a>

  <div class="dropdown-menu  dropdown-toggle" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">logout</a>
  
  </div> -->
  
<!-- </div> -->
<!-- Basic dropdown -->
<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown"
             aria-expanded="false"> <i class="fas fa-user"></i> <?php echo($_SESSION['adminName']); ?></a>
            <ul class="dropdown-menu" aria-labelledby="dropdown01">
              <li><a class="dropdown-item" href="control3.php?log=logout">logout</a></li>
             
            </ul>

</li>

  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
      
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>ادارة الموقع </span>
          <a class="link-secondary" href="#" aria-label="أضف تقرير جديد">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="./control3.php?tab=archdata" >
            <i class="fas fa-user-tie"></i>
               المهندسين
            </a>
          </li>
          <li>
            <a class="nav-link" href="./control3.php?tab=clientdata">
            <i class="fas fa-user"></i> 
               العملاء
            </a>
          </li>
          <li>
            <a class="nav-link" href="./control3.php?tab=ordersdata">
            <i class="fas fa-tasks"></i>
               طلبات العملاء
            </a>
          </li>
          <li>
            <a class="nav-link" href="./control3forms.php?n=acceptedOffers">
            <i class="fas fa-tasks"></i>
               العروض المقبولة 
            </a>
          </li>
        
        </ul>
      </div>
    </nav>
  
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">لوحة التحكم</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          <a role="tab identfire" class="btn btn-sm btn-outline-secondary" href="control3.php?tab=archdata&state=achtive" ">archtivated account</a>
          <a role="tab identfire" class="btn btn-sm btn-outline-secondary" href="control3.php?tab=archdata&state=disa" >disapled accouns</a>
          </div>
         </div>
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
      <?php
    if(isset($_GET['tab'])):
      $tab = $_GET['tab'];

      if($tab=='ordersdata'):
    // gettign order data when order tab is clicked
            // here
            $orders=getdata("SELECT `orderId`,`orederTitle`,`orderDetails`,`orderType`,`published` FROM `orders` ORDER BY `orderId` DESC");//
           
           ?>
             <h2>ادارة طلبات العملاء </h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <!-- <th> </th> -->
             <th scope="col">order title</th>
                <!-- <th scope="col">oreder details</th> -->
                <!-- <th scope="col">orderType</th> -->
                <th scope="col">published?</th>
                <th scope="col">edit</th>
            </tr>
              </thead>
              <tbody>
            <?php
              if(isset($orders)):
                foreach($orders as $order): ?>
        
          
            <tr>
               <input type="hidden" name="id" value="<?php //echo $order['orderId']; ?>"> 
               <!-- <td class="checkbox-td" style="position: relative; width:3rem; " ><input class="form-check-input" type="checkbox" id="gridCheck"></td> -->
               <td> <?php echo $order['orederTitle']; ?></td>
                <!-- <td><?php // echo $order['orderDetails']; ?></td> -->
               <!-- <td><?php // echo $order['orderType']; ?></td> -->
                <td><?php echo $order['published']; ?></td>
                <td><a href="./control3forms.php?n=ordersdata&orderId=<?php echo $order['orderId']; ?>" class="inner-link"><i class="fas fa-edit"></i></a> </td>
              <!-- <td><button type="button" class="btn btn-primary">Primary</button></td> -->
              <!-- <td><button class="btn btn-primary"><a href="./dataupdateing.php?n=updateArch&archId=<?php // echo $architect['architect number']; ?>" class="inner-link">edit</a> تعديل</button></td> -->
            </tr>
       <?php 
        endforeach; //foreach($orders as $order):
        endif;//end (isset($orders)):
          // //////////////////////////////////////////////////////////////////////////////////////////////////
        elseif ($tab=='clientdata'):
        // gettign clint data when clint tab is clicked
            // here
            $clients=getdata("SELECT `client number`,`name`,`state`,`email`,`phone` FROM `client` ORDER BY `client number` DESC");
           
           ?>
             <h2>ادارة العملاء </h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <!-- <th>#</th> -->
            
              <!-- <th> </th> -->
                <th scope="col">clint name</th>
                <!-- <th scope="col">email</th> -->
                <!-- <th scope="col">phone</th> -->
              
                <th scope="col">status</th>
                <th scope="col">edit</th>
            </tr>
              </thead>
              <tbody>
            <?php
              if(isset($clients)):
                foreach($clients as $client): ?>
        
          
            <tr>
            <!-- <td class="checkbox-td" style="position: relative; width:3rem; " ><input class="form-check-input" type="checkbox" id="gridCheck"></td> -->
            <input type="hidden" name="clintId" value="<?php echo $client['client number']; ?>"> 
                <td> <?php echo $client['name']; ?></td>
                <!-- <td><?php // echo $client['email']; ?></td> -->
                <!-- <td><?php // echo $client['phone']; ?></td> -->
                <td><?php echo $client['state']; ?></td>
                <td><a href="control3forms.php?n=clientData&clientId=<?php echo $client['client number']; ?>" class="inner-link" ><i class="fas fa-edit"></a></td>
              <!-- <td><button type="button" class="btn btn-primary">Primary</button></td> -->
              <!-- <td><button class="btn btn-primary"><a href="./dataupdateing.php?n=updateArch&archId=<?php echo $architect['architect number']; ?>" class="inner-link">edit</a> تعديل</button></td> -->
            </tr>
       <?php 
        endforeach; //end ($clients as $client): 
        endif;// isset($clients)):
          // ///////////////////////////////////////////////////////////////////////////////////////////////////////////
          elseif($tab=='archdata'):
            $architects=getdata("SELECT `architect number`,`name`,`status`,`email`,`phone`,`cv` FROM `architect` ORDER BY `architect number` DESC");//
            ?>
              <h2>ادارة المهندسين </h2>
       <div class="table-responsive">
         <table class="table table-striped table-sm">
           <thead>
             <tr>
               
                <th> </th>
             <!--    <th></th> -->
                 <th scope="col">architect name</th>
                 <!-- <th scope="col">email</th> -->
                 <!-- <th scope="col">phone</th> -->
                 <th scope="col">cv</th>
                 <th scope="col">status</th>
                 <th scope="col">edit</th>
             </tr>
               </thead>
               <tbody>
             <?php
             if(isset($architects)):
              foreach($architects as $architect): ?>
         
           
             <tr>
             <th scope="row"> <input type="hidden" name="id" value="<?php echo $architect['architect number']; ?>"> </th>
             <!-- <td class="checkbox-td" style="position: relative; width:3rem; " ><input class="form-check-input" type="checkbox" id="gridCheck"></td> -->
                 <td> <?php echo $architect['name']; ?></td>
                 <!-- <td><?php //echo $architect['email']; ?></td> -->
                 <!-- <td><?php //echo $architect['phone']; ?></td> -->
                 <td><a href="./cvfiles/<?php echo $architect['cv']; ?>" target="_blank">cv</a></td>
                 <td><?php echo $architect['status']; ?></td>
               <!-- <td><button type="button" class="btn btn-primary">Primary</button></td> -->
               <td><a href="./control3forms.php?n=updateArch&archId=<?php echo $architect['architect number']; ?>" class="inner-link"><i class="fas fa-edit"></i> </a></td>
             </tr>
        <?php 
         endforeach; //end foreach ($architects as $architect): 
         endif; // end of isset($architects)
       
        ?>
        <?php
      endif;//start at $tab=='ordersdata' the firs tab idcator
       else :
            // gettign the default value arch data
            // here
            $architects=getdata("SELECT `architect number`,`name`,`status`,`email`,`phone`,`cv` FROM `architect` ORDER BY `architect number` DESC");//
            ?>
              <h2>ادارة المهندسين </h2>
       <div class="table-responsive">
         <table class="table table-striped table-sm">
           <thead>
             <tr>
               
                <th> </th>
               <!--  <th></th> -->
                 <th scope="col">architect name</th>
                 <!-- <th scope="col">email</th> -->
                 <!-- <th scope="col">phone</th> -->
                 <th scope="col">cv</th>
                 <th scope="col">status</th>
                 <th scope="col">edit</th>
             </tr>
               </thead>
               <tbody>
             <?php
             if(isset($architects)):
              foreach($architects as $architect): ?>
         
           
             <tr>
             <th scope="row"> <input type="hidden" name="id" value="<?php echo $architect['architect number']; ?>"> </th>
             <!-- <td class="checkbox-td" style="position: relative; width:3rem; " ><input class="form-check-input" type="checkbox" id="gridCheck"></td> -->
                 <td> <?php echo $architect['name']; ?></td>
                 <!-- <td><?php //echo $architect['email']; ?></td> -->
                 <!-- <td><?php //echo $architect['phone']; ?></td> -->
                 <?php if(trim($architect['cv'])!=''): ?>
                  <td><a href="./cvfiles/<?php echo $architect['cv']; ?>" target="_blank">cv</a></td>
                 <?php else://if(trim($architect['cv'])!=''): ?>
                  <td><a href="#"  style="cursor:default; color:gray; text-decoration:none;" >cv</a></td>
                 <?php endif;//if(trim($architect['cv'])!=''): ?>
               
                 <td><?php echo $architect['status']; ?></td>
               <!-- <td><button type="button" class="btn btn-primary">Primary</button></td> -->
               <td><a href="./control3forms.php?n=updateArch&archId=<?php echo $architect['architect number']; ?>" class="inner-link"><i class="fas fa-edit"></i> </a></td>
             </tr>
        <?php 
         endforeach; //end foreach ($architects as $architect): 
         endif; // end of isset($architects)
       
        ?>
          </tbody>
        </table>
      </div>
           <?php
            endif // forisset($_GET['tab']
     ?>
      <!-- <h2>عنوان القسم</h2> -->
      <!-- <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>العنوان</th>
              <th>العنوان</th>
              <th>العنوان</th>
              <th>العنوان</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>أم.</td>
              <td>و.</td>
              <td>ثمّة.</td>
              <td><button type="button" class="btn btn-primary">Primary</button></td>
            </tr>
  
          </tbody>
        </table> -->
      </div>
    </main>
  </div>
</div>

   
    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="./assets/dist/js/bootstrap.js"></script>
 
      <script src="./dashboard-rtl-1/dashboard.js"></script>
      <!-- <php include_once('./jsincludes.php') ?> -->
        <!-- <script src="./assets/jquey/jquery.min.js"></script>
      <script src="./assets/dist/js/bootstrap.min.js"></script> -->
  </body>
</html>
