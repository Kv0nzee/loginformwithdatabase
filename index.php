<?php include "include/db.php";?>
<?php include "include/function.php";?>
<?php session_start();?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <section>
            <ul>
                <li><a href="index.php?source=signup">Sign Up<span></span><span></span><span></span><span></span></a></li>
                <li><a href="index.php?source=login">Login<span></span><span></span><span></span><span></span></a></li>
                <li><a href="index.php?source=logout">Logout<span></span><span></span><span></span><span></span></a></li>
                <li><a href="index.php?source=read">Show<span></span><span></span><span></span><span></span></a></li>
                <li><a href="index.php?source=delete">Delete<span></span><span></span><span></span><span></span></a></li>
                <li><a href="index.php?source=update">Update<span></span><span></span><span></span><span></span></a></li>
                <?php check()?>
            </ul>
            <div class="container">
                <div class="contactinfo">
                    <h2>
                        <span>B</span>
                        <span>R</span>
                        <span>NYR</span>
                    </h2>
                    <div class="midtext">
                        Welcome Page
                    </div>
                    <div  class="footer">
                        www.brnyr.com
                    </div>
                </div> 
                <?php
                            if(isset($_GET["source"])){
                                $source = $_GET["source"];
                            }else{
                                $source = "";
                            }
                            switch($source){
                                case "login";
                                include "include/login.php";
                                break;

                                case "logout";
                                include "include/logout.php";
                                break;

                                case "update";
                                include "include/update.php";
                                break;

                                case "read";
                                include "include/read.php";
                                break;

                                case "delete";
                                include "include/delete.php";
                                break;

                                default: 
                                include "include/signup.php";
                                break;
                            }
                        ?>