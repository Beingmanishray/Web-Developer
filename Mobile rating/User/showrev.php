<?php
    session_start();

    include 'dblink.php';
    connectDB();
    
    $id = $_GET["id"];
    $_SESSION['id'] = $id;

    $ema=mysqli_query($accs,"select email from reviewrs");
    $em=mysqli_fetch_array($ema, MYSQLI_ASSOC);
    $emai=$em['email'];
    

    $res = mysqli_query($accs,"select avg(rating) from comments where movies_id like '$id';");
    $res = mysqli_fetch_array($res, MYSQLI_ASSOC);
    $rat = $res['avg(rating)'];
    $rati = intval($rat);

    $res = mysqli_query($accs, "select * from mobile where ID like '%$id%'");
    $res = mysqli_fetch_array($res, MYSQLI_ASSOC);
    $title = $res['title'];
    
    $tit=mysqli_query($accs, "select trailer from mobile where ID like '%$id%'");
    $tit = mysqli_fetch_array($tit, MYSQLI_ASSOC);
    $trail = $tit['trailer'];
?>
<html>
    <head>
        <title> welcome </title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >     
    </head>
    <body>
          
        <div id='title'> <?php echo $title ?> </div>
        <div id='rat'> <?php echo $rat ?>/5 </div>
        <div id='tr'><?php echo $trail ?> </div>
        <div id="commse">
        <img src="images/<?php echo $id.'.jpg'?>"class="pc">

        <?php
            $que = mysqli_query($accs,"select description from mobile where id like $id;");
            $num_rows = mysqli_num_rows($que);
            while($row= mysqli_fetch_array($que)){
            $de=$row['description'];
            echo "<p>$de</p>"."<br>";
            }
        ?>
        </div> 

        <div class="rating">        
        <?php
            for($i=1; $i<=5; $i++) {
                if($i<=$rati) {
                    echo "<a class='chk' href='#'>⭐</a>";
                } else {
                echo "<a class='' href='#'>⭐</a>";
                }
            }
        ?>
</div> 
        <?php 
             $cz = "";
             $usr = $_SESSION['username'];
             $que = mysqli_query($accs, "select rating from comments where name = '$usr' AND movies_id = '$id';");
             $num_rows = mysqli_num_rows($que);
            
             if($num_rows!=0) {
                 $cz = "hide";
             } 
        ?>
        <div class="<?php echo $cz ?>">
            <h1>WRITE A COMMENT</h1>
            <form action="comments.php" method="post">
            <?php echo $_SESSION['username'].'<br>'; ?>
            <textarea name="comment" placeholder="comment here" cols="50" rows="2"></textarea>
            <br>
            Select rating &nbsp;&nbsp;
            <select name="ratx">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <input type="submit" name="" value="comment">
            </form>
        </div>
        </body>
</html>

<?php

$res = mysqli_query($accs,"select * from comments where movies_id like $id;");

while($row=mysqli_fetch_array($res)){
    $name = $row['Name'];
    $comm = $row['comments'];
    echo "<p><b>$name</b>: $comm</p><br>";

}
?>
