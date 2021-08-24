<?php update();?>
            <div class="contactform">
                    <h2>Update Data</h2>
                    <form action="" method="post" class="formbox">
                        <div class="inputbox">
                            <input class="errormesg" name="username" id="username" type="text" required>
                            <span>User Name</span>
                            <p class="us">(User Name must include 1capital Letter)</p>
                        </div>
                        <div class="inputbox">
                            <input name="email" class="errormesg" id="email" type="text" required>
                            <span>Email Address</span>
                            <p class="em"></p>
                        </div>
                        <div class="inputbox">
                            <input name="password" class="errormesg" id="password" type="password" required>
                            <span>Password</span>
                            <p class="ps">(no space between characters,minimum length of password: 6)</p>
                        </div>
                        <div class="inputbox">
                        <select name="id" class="select-css">
                        <?php
                            show();
                        ?>
                        </select>
                        </div>
                        <input  type="submit"  class="conbtn" name="submit" ></input>
                    </form>
                    
                </div>
                
            </div>
        </section>
    </body>
</html>