<?php
session_start();
include('../include/connected.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<style>
    body{
        margin:0;
        padding:0;
        background-color:rgb(43, 0, 0);
    }
    .container{
        width:400px;
        margin:80px auto;
        padding:30px;
       border-radius:15px;
       opacity: 0.90;
        background-color:rgb(255, 184, 152);
        box-shadow:0 0 10px rgb(95, 16, 16);
    }
    h1{
        font-size:40px;
        text-align:center;
        margin-bottom:20px;
    }
    form{
        display:flex;
        flex-direction:column;
        align-items:center;
    }
    label{
        font-size:20px;
        display:block;
        text-align:center;
        margin-bottom:5px;
    }
    input[type="text"],[type="email"]{
        width:100%;
        border-radius:12px;
        padding:10px;
        border:1px solid rgb(43, 0, 0);
        margin-bottom:15px;
    }
button{
     font-size:20px;
    width:100%;
    padding:10px 20px;
    border-radius:15px;
    background-color:brown;
    /* background-color:linear-gradient(90deg, rgb(43, 0, 0),
            rgb(117, 2, 2),
            rgb(253, 189, 159),
            rgb(255, 184, 152),
            rgb(117, 2, 2),
            rgb(80, 0, 0)); */
            color:black;
            background-size: 100%;
            border:none;
            cursor:pointer;
}





</style>
<body>
    <main>
        <?php
        @$adminEmail=$_POST['email'];
        @$adminpassword=$_POST['password'];
        @$adminadd=$_POST['add'];

        if(isset($adminadd)){
            if(empty($adminEmail) || empty($adminpassword)){
                echo'<script>alert("Enter Email Address And Password ")</script>';
            }
            else{
                $query="SELECT * FROM admin WHERE email='$adminEmail' AND password='$adminpassword'";
                $result=mysqli_query($conn,$query);
                if(mysqli_num_rows($result)==1){
                    
                    $_SESSION['EMAIL']=$adminEmail;
                    echo'<script>alert("Welcom to control panel")</script>';
                    header("REFRESH:2; URL = adminpanel.PHP");
                }
                else{
                    echo'<script>alert("You will be transferred to the home page")</script>';
                    header("REFRESH:2; URL = ../index.PHP");
                }
            }
        }



        ?>
    <div class="container">
        <h1>Login</h1>
        <form action="admin.php" method="post">
            <label for="em">Email</lable>
            <input type="email" name="email" id="em">
            <label for="pass">password</lable>
            <input type="text" name="password" id="pass">
            <button type="submit" name="add">Login</button>
        </form>
    </div>

    </main>
       
</body>
</html>
