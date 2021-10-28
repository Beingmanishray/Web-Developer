<?php
    // ------------ Global Variables ------------
    $accs = "";

    // Credentials
    $dbserver = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "sachin";
    
    // -----------------------------------------

    function connectDB() {
        global $accs, $dbserver, $dbuser, $dbpass, $db;

        $accs = new mysqli($dbserver, $dbuser, $dbpass, $db);

        if ( $accs->connect_error ) {
            die("Error unable to connect to DB"); 
        } else {
            // echo "DB Connection Successfull";
        }
    }

    function disconnectDB() {
        global $accs;
        $accs->close();
    }




?>