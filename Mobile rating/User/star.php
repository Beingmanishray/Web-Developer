<?php
    include 'dblink.php';
    session_start();
    connectDB();


    $stc = $_GET["st"];
    $usr = $_SESSION['username'];
    $id = $_SESSION['uid'];
    $mid = $_SESSION['id'];

    $q = "update reviews SET rating = '$stc' where reviewrs_id = '$id' ";
    // echo $q;
    mysqli_query($accs, $q);
    $r = 'location:showrev.php?id=';
    header($r.$mid);



?>

