<?php
    //create the database connection using constants previously created

    //inserting constants content
    require_once "constants.php";

    //create the database connection
    $dbConn= new mysqli(HOSTNAME, HOSTUSER, HOSTPASS, DBNAME);

    //verify the connection
    if($dbConn->connect_error){
        die("connection failed:". $dbConn->connect_error);
    }else{
        //print "The connection was successful!!! :-)";
    }
    http://localhost/webapp/config/dbConnect.php
?>    