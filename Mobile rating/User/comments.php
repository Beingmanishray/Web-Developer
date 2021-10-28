<?php
    session_start();
    include 'dblink.php';
    connectDB();
    $id = $_SESSION['id'];

    $name = $_SESSION['username'];

    $comm = $_POST['comment'];
    
    $rat = $_POST['ratx'];

    echo $rat;
    $q = "insert into comments (Name, comments,movies_id, rating) values('$name', '$comm', '$id', $rat);";
    $res = mysqli_query($accs, $q);
    header('Location: showrev.php?id='. $id);

?>