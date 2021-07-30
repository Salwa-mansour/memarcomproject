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

    <link rel="stylesheet" href="../fontawesome-free-5.15.3-web/css/all.css">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
<link rel="stylesheet" href="../assets/dist/js/bootstrap.js">
<link rel="stylesheet" href="./feathericons/assets/themes/twitter/css/feather.css" type="text/css">
<!-- <link rel="stylesheet" href="../assets/dist/css/bootstrap-theme.css"> -->
    <style>
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
     
.form-control[type='text']{
  /* background-color: var(--bs-table-striped-bg); */
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
      /* ----------- */
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
     
    </style>

    
    <!-- Custom styles for this template -->
    <!-- <link href="../dashboard/dashboard.rtl.css" rel="stylesheet"> -->
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">معماركوم</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="تبديل التنقل">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="بحث" aria-label="بحث"> -->
  <!-- <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
  </div> -->
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
          <!-- <a id="user-item"  class="nav-link"><i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Account</span></a> -->
        </li>
    <!-- <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">
        خروج</a>
    </li> -->
<!-- Basic dropdown -->
<li class="nav-item">
  <!-- Basic dropdown -->
  <div class="dropdown">
  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Account</span>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
<!-- Basic dropdown -->
</li>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>التقارير المحفوظة</span>
          <a class="link-secondary" href="#" aria-label="أضف تقرير جديد">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
           
        
       <li class="nav-item"><a class="nav-link" href="#">  <span data-feather="file" class="feather-star"></span>    أوامر    </a></li>
        
          
          
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              الشهر الحالي
            </a>
          </li>
         
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">لوحة التحكم</h1>
     
      </div>

      <h2>عنوان القسم</h2>
      <div class="table-responsive">
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
            <tr>
          
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/dist/js/bootstrap.js"></script>
   
      <script src="dashboard.js"></script>
  </body>
</html>
