<?php
include 'dblink.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mov = $_POST["mov"];
    connectDB();
    $query = mysqli_query($accs,"select * from mobile where title like '%$mov%' or released_year like '%$mov%'");
    $num_rows = mysqli_num_rows($query);
    while($row= mysqli_fetch_array($query)){
        $id=$row['ID'];
        $title=$row['title'];
        $released_year=$row['released_year'];
        
        echo "<a href='showrev.php?id=$id'>$title</a>"."<br>";
    }
}
 else
  {
    echo "data not found";
    header('location: new.php');
}
?>
