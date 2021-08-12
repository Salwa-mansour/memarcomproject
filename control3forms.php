<?php 
 include('./config/opratoins.config.php');


?>
<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>قالب لوحة القيادة · Bootstrap v5.0</title>

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
    <style>
      *{
        direction: rtl !important;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      tbody, td, tfoot, th, thead, tr{
        line-height: 3 !important;
      }
     

#basic-text1{
 background-color: #0d6efd;
  height: 100%;
  cursor: pointer;
  border: none;
}
#basic-text1:hover{
   background-color: blue;
}
.navbar-brand{
  color:blue !important;
  font-size: 1.5rem !important;
  font-weight: bold;

}
#user-item{
  white-space: nowrap;
}
.nav-link.dropdown-toggle{
  display: inline !important;
}
#sidebarMenu{
  height: 100vh ;
}
/* nav logo styling */
.nav-logo{
    width: 8rem !important;
   
}
.dropdown-menu{
  position: absolute  !important;
  min-width: 6rem !important;
}
a.inner-link{
  /* color: white; */
  text-decoration: none;
}
/* div.table-responsive table.table-responsive .checkbox-td{
  background-color: red !important;
  position: relative;
} */
.navbar-toggler.position-absolute{
  top: 3px;
  left: 3px;
}
.table-responsive tr input#gridCheck{
 
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}
      /* ----------- */
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .form-div{
         display: inline-block;
        width: 50%;
        margin:4rem 1 0;
        min-height: 300px;
       position: relative;
      }
     .form-div .form-group{
       margin: 1rem ;
      
     }
     .table-responsive{
       position: relative;
     }
     .table-responsive .card{
       position: absolute;
       top: 1rem;
       left: 1rem;
       width: 300px;
     }
     .form-div.cards-div{
       display: inline-block;
       width: 90%;
       margin:.5rem auto;
       border: 1px #c0c0c0 solid;
      border-radius: 6px;
     }
     .table-responsive #scond-card{
       right: 1rem;
     }
     .card .card-header{
       color:  #0d6efd ;
     }
     #scond-card .card-header{
       color: #198754;
     }
    
     .card .card-text,
     #scond-card .card-text{
       color: black;
     }
     .input-group-text{
       height: 100%;
     }
     .form-group.bordred-input{
       border: 1px #c0c0c0 solid;
       padding: .25rem;
       width: 100% !important;
       margin: .25rem !important;
       box-sizing: border-box;
       border-radius: 3px;
     }
    </style>

    
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
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fas fa-user"></i> Dropdown</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown01">
              <li><a class="dropdown-item" href="#">logout</a></li>
             
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
          <li  >
            <a class="nav-link" href="./control3.php?tab=clientdata"   >
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
          <a role="tab identfire" class="btn btn-sm btn-outline-secondary" href="control3.php?tab=archdata&state=achtive" >archtivated account</a>
          <a role="tab identfire" class="btn btn-sm btn-outline-secondary">disapled accouns</a>
          </div>
         
        </div>
      </div>
      <div class="table-responsive">
    

     
          <?php  if(isset($_GET['n'])): 
                    $from=$_GET['n'];
            ?>
              <!-- ////////////////////////////////////// -->
          
            <?php    if($from=="acceptedOffers"):
            //this is a tab not a form 
                        ?>
        <!-- **************************************** -->
         <!-- architect contact data client card -->
          <!-- architect contact data client card -->
          <div class="form-div cards-div">
            <div style="height:200px;">
          <div class="card border border-primary shadow-0 mb-3 " style="max-width: 18rem;">
              <div class="card-header">بطاقة المهندس</div>
            <div class="card-body text-primary">
             
              <p class="card-text"><span>اسم المهندس</span>: <?php //echo($architect['name']); ?> </p>
               <p class="card-text"><span>هاتف المهندس</span>: <?php //echo($architect['phone']); ?> </p>
              <p class="card-text"><span>بريد المهندس</span>: <?php //echo($architect['email']); ?> </p>
              
              
            </div>
          </div>  
          <!-- **** -->
          <div class="card border border-success shadow-0 mb-3" style="max-width: 18rem ;  " id="scond-card">
          <div class="card-header">بطاقة العميل</div>
            <div class="card-body text-primary">
             
              <p class="card-text"><span>اسم العميل</span>: <?php //echo($clientData['name']); ?> </p>
               <p class="card-text"><span>هاتف العميل</span>: <?php //echo($clientData['phone']); ?> </p>
              <p class="card-text"><span>بريد العميل</span>: <?php //echo($clientData['email']); ?> </p>
  </div>
</div>
</div>
<!-- ***** -->
           <h5> <a href=""class="form-group" >تصفح الطلب</a></h5>
       </div> 
          <!-- &&&&&2 -->
          <div class="form-div cards-div">
            <div style="height:200px;">
          <div class="card border border-primary shadow-0 mb-3 " style="max-width: 18rem;">
              <div class="card-header">بطاقة المهندس</div>
            <div class="card-body text-primary">
             
              <p class="card-text"><span>اسم المهندس</span>: <?php //echo($architect['name']); ?> </p>
               <p class="card-text"><span>هاتف المهندس</span>: <?php //echo($architect['phone']); ?> </p>
              <p class="card-text"><span>بريد المهندس</span>: <?php //echo($architect['email']); ?> </p>
              
              
            </div>
          </div>  
          <!-- **** -->
          <div class="card border border-success shadow-0 mb-3" style="max-width: 18rem ;  " id="scond-card">
          <div class="card-header">بطاقة العميل</div>
            <div class="card-body text-primary">
             
              <p class="card-text"><span>اسم العميل</span>: <?php //echo($clientData['name']); ?> </p>
               <p class="card-text"><span>هاتف العميل</span>: <?php //echo($clientData['phone']); ?> </p>
              <p class="card-text"><span>بريد العميل</span>: <?php //echo($clientData['email']); ?> </p>
  </div>
</div>
</div>
<!-- ***** -->
           <h5> <a href=""class="form-group" >تصفح الطلب</a></h5>
       </div>    
           <!--  ************************************ -->             
               <?php        elseif($from=="ordersdata"):
                        $orderId=$_GET['orderId'];
                        $orders=gitselectedrow( "SELECT `orderId`,`orederTitle`,`orderDetails`,`published`,`custmerId` FROM `orders` WHERE `orderId`='$orderId';");
                        $clientId=$orders['custmerId'];
                        $clientData=gitselectedrow("SELECT * FROM `client` where `client number`=$clientId");
                        ?>
          <!-- ****** -->     
            

          <form   action="" method="post" enctype="multipart/form-data" class="form-div">
                <h5 class="form-group"><?php echo $orders['orederTitle'] ?></h5>
                <!-- /// -->
                <?php include('./parts/workTypelist.php') ?>
                <!-- /// -->
                <div class="form-group">
                 <label for="exampleFormControlTextarea1">order Details</label>
                   <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="orderDetails"  >
                   <?php echo $orders['orderDetails'] ?>
                   </textarea>
                   </div> 
                   <!-- /// -->
                   <?php if($orders['published']=='false'):?>
                      <div class="form-group" ><input class="form-check-input" type="radio" name="publish" value="true" ><label for="publish">publish</label></div>
                      <div class="form-group" ><input class="form-check-input" type="radio" name="publish" value="false" checked ><label for="publish">not publish</label></div>
                      <?php else: ?>
                     <div class="form-group" ><input class="form-check-input" type="radio" name="publish" value="true" checked ><label for="publish">publish</label></div>
                      <div class="form-group" ><input class="form-check-input" type="radio" name="publish" value="false" ><label for="publish">not publish</label></div>
                      <?php endif;  //if($orders['published']=='true'):?>
                  <!-- //// -->
                 <button type="submit" class="btn btn-primary form-group" name="orderUpdate" >update </button>
                  <!-- masseges for user  -->
                  <?php require('./parts/messeges.php') ?>  
             </form>
             <!-- clinet contact data client card -->
             <div class="card border border-primary shadow-0 mb-3 " style="max-width: 18rem;">
              <div class="card-header">بطاقة العميل</div>
            <div class="card-body text-primary">
             
              <p class="card-text"><span>اسم العميل</span>: <?php echo($clientData['name']); ?> </p>
               <p class="card-text"><span>هاتف العميل</span>: <?php echo($clientData['phone']); ?> </p>
              <p class="card-text"><span>بريد العميل</span>: <?php echo($clientData['email']); ?> </p>
              
              
            </div>
          </div>   
          
         <!-- **************************************** -->
                <?php        elseif($from=="updateArch"):
                            $id=$_GET['archId'];
                            $architect=gitselectedrow(" SELECT * FROM architect WHERE `architect number`='$id';");
                        //   print_r($architect);
                        //     echo $architect['architect number'];
                            ?>
                 <!-- **************************************** -->
                 <form   action="" method="post" enctype="multipart/form-data" class="form-div">
                 <div class="form-group">
                      <label for="">uplaoud Document</label>
                      <!-- ************ -->
                     
  <!-- <input type="text" class="form-control" aria-label="Text input with radio button">
</div>
                      <div class="custom-file">
    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
  </div> -->
  <!-- ************ -->
                      <input class="form-group bordred-input " type="file" name="archfile" id=""  accept=".pdf , .PDF" >
                      </div>
                      <p class="form-group">Activate this account</p>
                      <?php if($architect['status']=='disabled'):?>
                        <!-- <div class="input-group"> -->
 
                         <div class="form-group bordred-input"><input type="radio" class="form-check-input" name="activateAccount" value="inable" ><label for="activateAccount">activateAccount</label></div>
                         <div class="form-group bordred-input"><input type="radio" class="form-check-input" name="activateAccount" value="disabled" checked><label for="activateAccount">not activateAccount</label></div>
                         <?php else: ?>
                          <div class="form-group bordred-input"><input type="radio" class="form-check-input" name="activateAccount" value="inable" checked><label for="activateAccount">activateAccount</label></div>
                          <div class="form-group bordred-input"><input type="radio" class="form-check-input" name="activateAccount" value="disabled" ><label for="activateAccount">not activateAccount</label></div>
                         <?php endif;  //if($architect['status']=='disabled'):?>
                          <button type="submit" class="btn btn-primary form-group" name="udpateArch" >update </button>
                  <!-- masseges for user  -->
                  <?php require('./parts/messeges.php') ?>  
                </form>
                   <!-- architect contact data client card -->
             <div class="card border border-primary shadow-0 mb-3 " style="max-width: 18rem;">
              <div class="card-header">بطاقة المهندس</div>
            <div class="card-body text-primary">
             
              <p class="card-text"><span>اسم المهندس</span>: <?php echo($architect['name']); ?> </p>
               <p class="card-text"><span>هاتف المهندس</span>: <?php echo($architect['phone']); ?> </p>
              <p class="card-text"><span>بريد المهندس</span>: <?php echo($architect['email']); ?> </p>
              
              
            </div>
          </div>  
                              <!-- //////////////////////////////////////// -->
                            <?php  endif; //if($from=="clientData"):?>
                              
                            <?php   endif; //isset($_GET['n']))?>
          </div> <!-- class="table-responsive   -->
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
