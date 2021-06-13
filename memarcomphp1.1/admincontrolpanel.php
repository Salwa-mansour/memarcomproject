<!DOCTYPE html>
<html lang="en">
<head>
   
<?php require_once("./parts/meta.php"); ?>
    <title>Document</title>
   
</head>
<body>
<?php require_once("./parts/layoutgridstart.php"); ?>
<?php require_once("./parts/nav.php"); ?>
<?php require_once("./parts/mainstart.php"); ?>
   
  <!-- /////////////////////// -->
 

     <aside class="aside">
         <ul>
             <li><a href="#">Lorem, ipsum.</a></li>
             <li><a href="#">Lorem, ipsum.</a></li>
             <li><a href="#">Lorem, ipsum.</a></li>
             <li><a href="#">Lorem, ipsum.</a></li>
             <li><a href="#">Lorem, ipsum.</a></li>
             <li><a href="#">Lorem, ipsum.</a></li>
         </ul>
     </aside>
     <section class="mian-section">
         <div class="admin-search-div">
             <form action="" method="POST">
            <input type="search" name="admin-search" id="admin-search">
            <button name="adminsearch-btn" class="conrol-btn">search</button></form>
         </div>
        <table class="admintable">
            <!-- <caption>A summary of the UK's most famous punk bands</caption> -->
            <thead>
              <tr>
                <th scope="col">number</th>
                <th scope="col">Year formed</th>
                <th scope="col">No. of Albums</th>
                <th scope="col">edit</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>1976</td>
                <td>9</td>
                <td><button class="conrol-btn">edit</button></td>
              </tr>
              <tr>
                <th scope="row"> 2</th>
                <td>1976</td>
                <td>6</td>
                <td><button class="conrol-btn">edit</button></td>
              </tr>
          
               
              <tr>
                <th scope="row">3</th>
                <td>1974</td>
                <td>17</td>
                <td><button class="conrol-btn">edit</button></td>
              </tr>
            </tbody>
            <!-- <tfoot>
              <tr>
                <th scope="row" colspan="2">Total albums</th>
                <td colspan="2">77</td>
              </tr>
                ////////////////////////////////////// -->
</table>
            
     </section>

 

<?php require_once("./parts/mainend.php"); ?>
<?php require_once("./parts/footer.php"); ?>
<?php require_once("./parts/layoutgridend.php"); ?>
</div>
</body>
</html>