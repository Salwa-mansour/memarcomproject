<?php // $_GET['log']='' ?>
<nav class="navbar navbar-expand-sm navbar-dark blue-background" aria-label="Third navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="./default.php">
      <img class="nav-logo" src="./images/lighthorisntallogo2.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
          <li class="nav-item ">
            <a class="nav-link" aria-current="page" href="./previusworksfeed.php" >اعمالنا</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./orders.php"  >الطلبات</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./allarchitects.php">مهندسونا</a>
          </li>
        
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown03">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> -->
          <?php if($_SESSION != []): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="user-circle" style="background-image: url(./images/userplaceholder.jpg);">
            </div>
            </a>
           
            <ul class="dropdown-menu" aria-labelledby="dropdown03">
              <?php if(isset($_SESSION['archId'])): 
                $archid=$_SESSION['archId']; ?>
            
                <li><a class="dropdown-item" href="architectprofile.php?archid=<?php echo $archid?>">my page</a></li>
              <li><a class="dropdown-item" href="forms.php?log=logout"> logout</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
                <?php else://if(isset($_SESSION['archId'])): ?>

              <li><a class="dropdown-item" href="forms.php?log=logout"> logout</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            <?php endif;// if(isset($_SESSION['archId'])): ?>
            </ul>
          </li>
          <?php else: ?>
                <li class="nav-item">
                <a class="nav-link " href="./forms.php?n=userSignUp&userType=client">تسجيل حساب</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="./forms.php?n=userlogin">الدخول</a>
              </li>
            
          <?php endif; ?>
             <!-- loged in links -->
      <!-- <li class="nav-item"> -->
      <!-- <a href="#1" class="user-circle" style="background-image: url(./images/p2.jpg);"> -->
        <!-- <div class="user-circle" style="background-image: url(./images/p2.jpg);"> -->

            <!-- </div> -->
      <!-- </li> -->
        <!-- <li class="nav-item"> -->
           <!-- <a href="#1"  class="nav-link "  >sign out </a>  -->
       
        <!-- </li>     -->
        <!-- </a> -->
      </ul>
        <!-- <form>
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form> -->
      </div>
    </div>
  </nav>
 <!-- //////// The navbar markup //////////// -->
 <!-- <nav class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
            <h1> <a href="./defaultpage.php">معماركوم</a> </h1>
        </div>
    

    <div class="nav-btn">
        <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
        </label>
    </div>

    <div class="nav-links "> -->
        <!-- <a class="nav-link" href="./previusworksfeed.php" >اعمالنا</a>
        <a href="./requestsfeed.php"  >الطلبات</a>
         <a href="./allarchitects.php">مهندسونا</a>
        <a href="./Cpanel.php" >c panel </a> -->
        <!-- log in links -->
        <!-- <a href="./dataupdateing.php?n=usersSignin" class="goast-link " >sing in </a>
        <a href="#"  class="goast-link "  >sign up </a> -->
     
    <!-- </div> 
   </nav> -->
     <!-- //////// The navbar markup //////////// -->
 <!-- <nav class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
            <h1> <a href="./defaultpage.php">معماركوم</a> </h1>
        </div>
     -->

    <!-- <nav class="navbar navbar-inverse">
    
  <div class="container-fluid">
  
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a> </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav> -->
<!-- <nav class="navbar navbar-expand-lg navbar-light " style="padding-left: 1rem; background:blue;" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01" style="display: flex; ">
    <a class="navbar-brand" href="#" style="flex-grow: 1;" >Hidden brand</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Dsabled</a>
      </li>
    </ul> -->
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  <!-- </div>
</nav> -->