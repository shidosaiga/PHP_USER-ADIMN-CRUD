<?php
    session_start();
    require_once './config/database.php';

    if (isset($_POST['singup'])) {
        $firsname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
        $urole = 'user';
    };

    if (empty($firsname)) {
        $_SESSION['error'] = 'Please inter your firstname';
        header("location: index.php");
    } else if(empty($lastname)){
        $_SESSION['error'] = 'Please inter your lastname';
        header("location: index.php");
    }else if(empty($email)){
        $_SESSION['error'] = 'Please inter your email';
        header("location: index.php");
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['error'] = 'Invalid email format';
        header("location: index.php");
    }else if(empty($password)){
        $_SESSION['error'] = 'please inter your password';
        header("location: index.php");
    }else if(strlen($_POST['password']) >20 || strlen($_POST['password']) <5 ){
        $_SESSION['error'] = 'password length should reach 5 to 20.';
        header("location: index.php");
    }else if(empty($c_password)){
        $_SESSION['error'] = 'please confirm your password';
        header("location: index.php");
    }else if(empty($password != $c_password)){
        $_SESSION['error'] = "password don't mact";
        header("location: index.php");
    } else{
        try{
            $check_email = $conn -> prepare("SELECT email FROM users WHERE email = :email"); 
            $check_email->bindParam(":email",$email);
            $check_email->execute();
            $row = $check_email-> fetch(PDO::FETCH_ASSOC);

            if ($row['email'] == $email){
                $_SESSION['warning'] = "email have already use ";
                header("location: index.php");
            }

        }catch(PDOException $e){
            echo $e -> getMessage();
        }
    }
?>