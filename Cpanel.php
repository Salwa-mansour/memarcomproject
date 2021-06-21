<!-- IN The Neme OF Allah
      Memarocm Project -->
      <?php include_once('./config/opratoins.config.php') 
    
      ?>
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
             <li><a href="./Cpanel.php?tab=archdata">architects accounts management</a></li>
             <li><a href="./Cpanel.php?tab=clientdata"> user managment management</a></li>
             <li><a href="./Cpanel.php?tab=ordersdata">orders managemetn</a></li>
             <!-- <li><a href="#">ordersts managemetn</a></li> -->
             <li><a href="#">report creation</a></li>
             
         </ul>
     </aside>
     <section class="mian-section">
         <!-- <div class="admin-search-div">
             <form action="" method="POST">
            <input type="search" name="admin-search" id="admin-search">
            <button name="adminsearch-btn" class="conrol-btn">search</button></form>
         </div> -->
            <!-- ////////////////architects tab////////////////////// --> 
                  <?php  
                //  $tab="archdata"; //set initial value for a tab to display when page friest time load >_< not working
           //getting data from database
         if(isset($_GET['tab'])): 
               $tab= $_GET['tab'];
                    if($tab=="archdata"):
                    $architects=getdata("SELECT `architect number`,`name`,`status`,`email`,`phone`,`cv` FROM `architect` ORDER BY `architect number` DESC");//
                    //print_r($architects);
               
                  ?>

        <table class="admintable">
            <thead>
            
              <tr>
                <th scope="col">  </th>
                <th scope="col">architect name</th>
                <th scope="col">email</th>
                <th scope="col">phone</th>
                <th scope="col">cv</th>
                <th scope="col">status</th>
                <th scope="col">edit</th>
              </tr>
            <?php elseif($tab=="clientdata"): 
         //   $clients=getdata("SELECT `client number`,`name`,`state`,`email`,`phone` FROM `client` ORDER BY `client number` DESC");//
              ?>
          
         <?php 
         //end of determin table header according to  if($tab=="archdata"):
            endif;
            ?>
            <?php
               $tab= $_GET['tab'];
                  if($tab=="ordersdata"):
                    $orders=getdata("SELECT `orderId`,`orederTitle`,`orderDetails`,`orderType`,`published` FROM `orders` ORDER BY `orderDate` DESC");//
                    //print_r($architects);
               
                  ?>

        <table class="admintable">
            <thead>
            
              <tr>
                <th scope="col">  </th>
                <th scope="col">order title</th>
                <th scope="col">oreder details</th>
                <th scope="col">orderType</th>
                <th scope="col">published?</th>
              
                <th scope="col">edit</th>
              </tr>
            <?php elseif($tab=="clientdata"): 
            $clients=getdata("SELECT `client number`,`name`,`state`,`email`,`phone` FROM `client` ORDER BY `client number` DESC");//
              ?>
                     <table class="admintable">
            <thead>
              <tr>
                <th scope="col">  </th>
                <th scope="col">clint name</th>
                <th scope="col">email</th>
                <th scope="col">phone</th>
              
                <th scope="col">status</th>
                <th scope="col">edit</th>
              </tr>
            </thead>
         <?php 
         //end of determin table header according to  if($tab=="archdata"):
            endif;
            ?>
            <tbody>
            <?php
            if(isset($architects)):
             foreach($architects as $architect): ?>
              <tr>
                <th scope="row"> <input type="hidden" name="id" value="<?php echo $architect['architect number']; ?>"> </th>
                <td> <?php echo $architect['name']; ?></td>
                <td><?php echo $architect['email']; ?></td>
                <td><?php echo $architect['phone']; ?></td>
                <td><a href="./cvfiles/<?php echo $architect['cv']; ?>" target="_blank">cv</a></td>
                <td><?php echo $architect['status']; ?></td>
                <td><button class="conrol-btn"><a href="./dataupdateing.php?n=updateArch&archId=<?php echo $architect['architect number']; ?>" class="inner-link">edit</a> </button></td>
              </tr>
            <?php 
          endforeach; //end foreach ($architects as $architect): 
        endif; // end of isset($architects)
          if(isset($clients)):
             foreach($clients as $client): ?>
              <tr>
                <th scope="row"> <input type="hidden" name="id" value="<?php echo $client['client number']; ?>"> </th>
                <td> <?php echo $client['name']; ?></td>
                <td><?php echo $client['email']; ?></td>
                <td><?php echo $client['phone']; ?></td>
                <td><?php echo $client['state']; ?></td>
                <td><button class="conrol-btn">edit</button></td>
              </tr>
            <?php 
          endforeach;//end foreach($clients as $client)
          endif; // (isset($clients))
          if(isset($orders)):
             foreach($orders as $order): ?>
              <tr>
                <th scope="row"> <input type="hidden" name="id" value="<?php //echo $order['orderId']; ?>"> </th>
                <td> <?php echo $order['orederTitle']; ?></td>
                <td><?php echo $order['orderDetails']; ?></td>
               <td><?php echo $order['orderType']; ?></td>
                <td><?php echo $order['published']; ?></td>
                <td><button class="conrol-btn"><a href="./dataupdateing.php?n=ordersdata&orderId=<?php echo $order['orderId']; ?>" class="inner-link">edit</a> </button></td>
              </tr>
            <?php 
          endforeach;//end foreach($orders as $client)
          endif; // (isset($orders))
      
      endif; //end of  isset($_GET['tab']) 
 
               ?>
            </tbody>
        
              
        </table>
   
          <?php   
        
      
       //  endif; ?>      
         
     </section>

 

<?php require_once("./parts/mainend.php"); ?>
<?php require_once("./parts/footer.php"); ?>
<?php require_once("./parts/layoutgridend.php"); ?>
</div>
</body>
</html>