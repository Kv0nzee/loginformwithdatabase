<?php logout()?>
                <div class="contactform">
                    <h2>Logout</h2>
                    <form action="" method="post" class="formbox">
                        <div class="inputbox">
                        <h1><?php echo $_SESSION['user']?></h1>
                        </div>
                        <div class="inputbox">
                            <h1><?php echo $_SESSION['email']?></h1>
                        </div>
                        <div class="inputbox">
                            <h1><?php echo $_SESSION['password']?></h1>
                        </div>
                        <input  type="submit"  class="conbtn" name="logout" value="logout"></input>
                    </form>
                    
                </div>
                
            </div>
        </section>
    </body>
</html>