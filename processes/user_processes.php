<?php
    /*************
     * A PHP file to enable user processes.
     * Including signup, signin, edit/update and delete
     /********************/

     //import the database connection
     require_once"../config/dbConnect.php";

     //Signup process
     if(isset($_POST["signup"])){
        $fullname= mysqli_real_escape_string($dbConn, $_POST["fullname"]);
        $email= mysqli_real_escape_string($dbConn, $_POST["email"]);
        $username= mysqli_real_escape_string($dbConn, $_POST["username"]);
        $password= mysqli_real_escape_string($dbConn, $_POST["password"]);
        $ConfPass= mysqli_real_escape_string($dbConn, $_POST["ConfPass"]);
        $userType= mysqli_real_escape_string($dbConn, $_POST("userType"));

        //verify if the password and the confirm password are similar
        if($password != $ConfPass){
            header("Location: ../signup.html");
            exit();
        }

    }
       //encrypting the password
        $hash_password= password_hash($ConfPass, PASSWORD_DEFAULT);

        //inserting the data into the users table
        $user_insert="INSERT INTO users(fullname, username, email, password, userType,created)VALUES('$fullname','$username','$email','$hash_password','$userType',UNIX_TIMESTAMP())";

        //executing the sql query
        if($dbConn->query($user_insert) ===TRUE){
            header("Location: ..//signin.html");
            exit();
        }else{
            die("failed to insert the new record:".$dbConn->error);
        }
  
?>        
       