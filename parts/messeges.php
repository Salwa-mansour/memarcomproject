<?php  if(isset($_GET['msg'])):
            if($_GET['msg']=='errLoginTxt'): ?>
                <div class="alert alert-warning" role="alert">
                اسم مستخدم او كلمة مرور غير صحيحة
                  </div>
                  <!-- **** -->
             <?php    elseif($_GET['msg']=='userLogedin'): ?>
                <div class="alert alert-success" role="alert">
                تم تسجيل الدخول
                  </div>
                  <!-- **** -->
             <?php  elseif($_GET['msg']=='emptytext'): ?>
                    <div class="alert alert-warning" role="alert">
                    يرجى ملاء الحقول الفارغة    
                     </div>
                        <!-- **** -->
            <?php  elseif($_GET['msg']=='architectAdded'): ?>
                         <div class="alert alert-success" role="alert">
                        تم تسجيل طلبك سيتم التواصل معك من اجل تحديد موعد المقابلة    
                        </div>
                        <!-- **** -->
            <?php  elseif($_GET['msg']=='clientAdded'): ?>
                         <div class="alert alert-success" role="alert">
                                تم انشاء حسابك
                        </div>
                                          
                        <!-- **** -->
           <?php  elseif($_GET['msg']=='emailExist'): ?>
                        <div class="alert alert-danger" role="alert">
                         الايمبل مستخدم مسبقاً  
                        </div>
           <?php  elseif($_GET['msg']=='emailExist'): ?>
                        <div class="alert alert-danger" role="alert">
                                حدث خطأ أثناء انشاء الحساب يرجى المحاولة مجدداً 
                        </div>

            <?php        endif;//$_GET['msg']=='errLoginTxt'
 endif; //isset($_GET['msg'])
?>