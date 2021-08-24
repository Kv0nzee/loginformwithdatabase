<?php include "include/db.php";
    function insert(){
        if(isset($_POST["submit"])){
            global $connection;
            $user = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            
            $query = "INSERT INTO user(User,Email,password)";
            $query.= "VALUES ('$user','$email','$password')";
            $result= mysqli_query($connection,$query);
            if(!$result){
                die("Query FAILED BRNYR" . mysqli_error($connection));
            }
        }
    }

    function read(){
        global $connection;
        $query = "SELECT * FROM user";
        $result= mysqli_query($connection,$query);
        if(!$result){
            die("Query FAILED BRNYR" . mysqli_error($connection));
        }
        while($res = mysqli_fetch_assoc($result)){
            $user = $res['User'];
            $email = $res['Email'];
            $psw = $res['password'];
            echo '<div class="shadowbox">';
            echo "Username: ".$user ."<br>";
            echo "Email: ".$email ."<br>";
            echo "Password: ".$psw ."<br>";
           echo '</div>';
        }
    }

    function show(){
        global $connection;
        $query = "SELECT * FROM user";
        $result= mysqli_query($connection,$query);
        if(!$result){
            die("Query FAILED BRNYR" . mysqli_error($connection));
        }
        while($row = mysqli_fetch_array($result)){
            $id = $row["id"];
            echo "<option value='$id'>$id</option>";
        }
    }

    function update(){
        if(isset($_POST["submit"])){
            global $connection;
            $user = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $id = $_POST["id"];
            
            $query = "UPDATE user SET ";
            $query.= "User = '$user',";
            $query.= "Email = '$email',";
            $query.= "password = '$password'";
            $query.= "WHERE id = '$id'";
            $result= mysqli_query($connection,$query);
            if(!$result){
                die("Query FAILED BRNYR" . mysqli_error($connection));
            }
        }
    }

    function delete(){
        if(isset($_POST["delete"])){
            global $connection;
            $id = $_POST["id"];
            
            $query = "DELETE FROM user ";
            $query.= "WHERE id = '$id'";
            
            $result= mysqli_query($connection,$query);
            if(!$result){
                die("Query FAILED BRNYR" . mysqli_error($connection));
            }
        }
    }
    function verify(){
        if(isset($_POST["submit"])){
            global $connection;
            $user = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $user = mysqli_real_escape_string($connection,$user);
            $password = mysqli_real_escape_string($connection,$password);
            $email = mysqli_real_escape_string($connection,$email);
            
            $query = "SELECT * FROM user WHERE User = '{$user}'  ";
            $login_query = mysqli_query($connection,$query);
            if($login_query){
                while($row = mysqli_fetch_array($login_query)){
                    $db_id = $row["id"];
                    $db_username = $row["User"];
                    $db_user_password = $row["password"];
                    $db_user_email = $row["Email"];
                }
                if($user === $db_username && $password === $db_user_password && $email === $db_user_email){
                    $_SESSION['user'] =$db_username;
                    $_SESSION['password'] =$db_user_password;
                    $_SESSION['email'] =$db_user_email;
                    echo "Login Successful";
                }
            }else{
                echo "Something wrong try again";
            }
        }
    }
    function logout(){
        if(isset($_POST['logout'])){
            $_SESSION['user'] = null;
            $_SESSION['password'] = null;
            $_SESSION['email'] = null;
        }
    }
    function check(){
        if(isset($_SESSION['user'])){
            ?>
            <li><a href="index.php?source=read"><?php echo $_SESSION['user']?><span></span><span></span><span></span><span></span></a></li>
            <?php 
        }
    }
?>