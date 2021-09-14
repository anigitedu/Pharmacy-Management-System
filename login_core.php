<?php

session_start();

include_once "config.php";

    $action = $_POST['action'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    
        $query = "SELECT * FROM {$role}";
        $result = mysqli_query($connection, $query);

        $data = mysqli_fetch_assoc($result) ;
            $_pass = $data['password'];
            $_email = $data['email'];
            $_id = $data['id'];
            $_role = $data['role'];
           /* echo $email; echo $password;
            echo $_pass;
            echo $_email;*/

           if($email==$_email && $password==$_pass && $role==$_role){
            $_SESSION['role'] = $_role;
            $_SESSION['id'] = $_id;
                header("Location:index.php?role=".$_role."id=".$_id);
            }
            else {
                echo "Error";
                header( "location:login.php?error" );
            }
    



mysqli_close($connection);
?>
