<!-- memarcom -->
<!DOCTYPE html>
<html lang="en">
<head>

   <?php require_once("./parts/meta.php")?>
   
    <title>Document</title>
</head>
<body>

    <?php require_once("./parts/nav.php")?>
 
    <!--////////////// the hero image markup///////////////// -->
    <section class="hero banner ">
        <div class="banner-highlights">
            <!-- <div class="container"> -->
            
                <div class="b-txt">
                   
                    <h2>هل تبحث عن تصميم يناسبك </h2>
                
                    <p>هنا افضل المعماريين لنقدم افضل التصاميم والخدمات الهندسية </p>
                   
                </div>
                <button  class="banner-btn emtycolor-btn show-btn">سجل طلبك</button>
            <!-- </div> -->
        </div>
         <!--///////////////////// the popup windwo for input form markup ///////////////////////-->
    <div class="trasperant-container">
        <div class="formdiv">
           <button data-close-button class="close-button">&times;</button>
            <form action="" method="post">
                <ul>
                    <li><label for="name">name</label><input type="text" name="name" id=""></li>
                    <li><label for="name">name</label><input type="text" name="name" id=""></li>
                    <li><label for="name">name</label><input type="text" name="name" id=""></li>
                    <li><label for="name">name</label><input type="text" name="name" id=""></li>
                    <input type="submit" value="submit">
                </ul>
            </form>
        </div>
    </section>
   

</div>
    <!-- /////////////////////////////////// -->
    <section class="gallery">
        <h1 class="section-title"></h1>  </h1>
        <div class="container">
          <a href="#"> <div class="gallery-item">
                <!-- <img src="./images/3.jpg" style="width: 100%; height: 100%;" alt=""> -->
                <p>تصاميم داخلية</p>
            </div></a> 
            <div class="gallery-item">
                <!-- <img src="../imgs/3.jpg" style="width: 100%;" alt=""> -->
                <p>واجهات خارجية</p>
            </div>
            <div class="gallery-item">
                <!-- <img src="../imgs/4.jpg" style="width: 100%;" alt=""> -->
                <p>تصميم خارجي</p>
            </div>
            <div class="gallery-item">
                <!-- <img src="../imgs/5.jpg" style="width: 100%;" alt=""> -->
                <p>اخرى</p>
            </div>
        </div>
    </section>
  
    <!-- ///////////////////// ////////////////-->
    <section class="banner">
        <div class="banner-highlights">
            <!-- <div class="container"> -->
            
                <div class="b-txt">
                   
                    <h2> هل أنت مهندس</h2>
                
                    <p>  متخصص في المجال المعماري وتبحث عن اعمال تناسب تخصصك كن عضوا في معمار كوم وأبدأ العمل معنا </p>
                   
                </div>
                <button  class="banner-btn emtycolor-btn">ابدأ الان</button>
            <!-- </div> -->
        </div>
    </section>
    <!-- ////////////////////////////////// -->
    <section class="usersfeedback">
        <h1>uesers review</h1>
        <div class="container">
            <div class="user-review-item">
                <div class="user-review">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia odit praesentium repellat aperiam aliquid incidunt, eum doloremque animi reprehenderit consequuntur rerum similique molestiae, voluptatem ad dolore dicta corporis iure recusandae.</p>
                    <h4>person mame</h4>
                    <small>los anolos</small>
                    
                </div>
                <img src="./images/p1.jpg" style="width: 60px; height: 60px;" alt="">
            </div>
            <div class="user-review-item">
                <div class="user-review">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia odit praesentium repellat aperiam aliquid incidunt, eum doloremque animi reprehenderit consequuntur rerum similique molestiae, voluptatem ad dolore dicta corporis iure recusandae.</p>
                    <h4>person mame</h4>
                    <small>los anolos</small>
                    
                </div>
                <img src="../images/p2.jpg" style="width: 60px; height: 60px;" alt="">
            </div>
            <div class="user-review-item">
                <div class="user-review">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia odit praesentium repellat aperiam aliquid incidunt, eum doloremque animi reprehenderit consequuntur rerum similique molestiae, voluptatem ad dolore dicta corporis iure recusandae.</p>
                    <h4>person mame</h4>
                    <small>los anolos</small>
                    
                </div>
                <img src="./images/p3.jpg" style="width: 60px; height: 60px;" alt="">
            </div>
        </div>
    </section>
    <!-- ////////////////////////////////////// -->
  
<?php require_once("./parts/footer.php")?>

    <!-- hello I'm javaScript -->
    <script src="./script.js"></script>
</body>
</html>