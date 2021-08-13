
<!doctype html>
<html lang="en">
  <head>
  <?php 
  // session_start();
    session_start();
    //  echo('stston started');
      require_once('./config/opratoins.config.php');
      
  
  ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="" method="post">
    <a href="default.php"><img class="mb-4" src="./images/lighthorisntallogo2.png" alt="" width="200px" ></a>
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    <label for="inputEmail" class="visually-hidden">Email address</label>
    <input name="user-name" type="text" id="inputEmail" class="form-control" placeholder="enter user name" required autofocus>
    <label for="inputPassword" class="visually-hidden">Password</label>
    <input name="user-password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <!-- <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label> 
    </div> -->
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="admin-login-btn" >Sign in</button>
   <?php include('./parts/messeges.php') ?>
    <p class="mt-5 mb-3 text-muted">&copy;Memarcom Team 2020-2021</p>
  </form>
</main>


    
  </body>
</html>
