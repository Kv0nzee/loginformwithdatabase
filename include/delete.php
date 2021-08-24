<?php delete()?>
                <div class="deleteform">
                    <h2>Delete Data</h2>
                    <form action="" method="post" class="formbox">
                        <div class="inputbox">
                        <select name="id" class="select-css delete">
                        <?php
                            show();
                        ?>
                        </select>
                        </div>
                        <input class="conbtn delebtn" type="submit" name="delete" value="DELETE" ></input>
                    </form>
                    
                </div>
                
            </div>
        </section>
    </body>
</html>