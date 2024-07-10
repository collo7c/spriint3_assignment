<?php
    /*************
     * A PHP file to enable user processes.
     * Including signup, signin, edit/update and delete
     /********************/

     //start the session service
     session_start();

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

        //Signin process
        if(isset($_POST["signin"])){
            //variable declaration
            $entered_username=mysqli_real_escape_string($dbConn, $_POST["username"]);
            $entered_password=mysqli_real_escape_string($dbConn, $_POST["password"]);
        }

        //verify is the entered username matches any record
        $spot_username="SELECT * FROM users WHERE username='$entered_username' LIMIT 1";

        //Executing the select query
        $uName_res=$dbConn->query($spot_susername);

        //count at least one matching row
        if($uName_res->num_rows>0){
            //create a session.
            $_SESSION["control"]=$uName_res->fetch_assoc();

            //use the session to fetch the stores password.
            $stored_password=$_SESSION["CONTORL"]["password"];

            //verify if the entered_password is identical to the stored_password
            if(password_verify($entered_password, $stored_password)){
                //if the passwords match, redirect to viewUsers.php
                header("Location: ../viewUsers.php");
                exit();
            }else{
                //otherwise destroy the control session and redirect back to signin.html.
                unset($_SESSION["control"]);
                header("Location: ../signin.html");
                exit();
            }
            }else{
                //otherwise redirect back to signin.html
                header("Location: ../signin.html");

            }
             
               
        
        //signout process
        if(isset($_GET["signout"])){
            unset($_SESSION["control"]);
            header("Location: ../signin.html");
            exit();
        }
      
?>        
       