
   <div class="trasperant-container">
                <div class="formdiv">
                <button data-close-button class="close-button">&times;</button>
                <?php 
                $from=$_GET['n'];
               if($from=="addArch"):
                 ?>

                    <form action="" method="post">
                        <ul>
                            <li><label for="ArchName">name</label><input type="text" name="ArchName" id=""></li>
                            <li><label for="phoneNumber">phoneNumber</label><input type="text" name="phoneNumber" id=""></li>
                            <li><label for="passWrod">passWrod</label><input type="password" name="password" id=""></li>
                            <li><label for="address">address</label><input type="text" name="address" id=""></li>
                            <input type="submit" value="archSave">
                        </ul>
                    </form>

                    <?php endif; ?>

                </div>
         
        </div>