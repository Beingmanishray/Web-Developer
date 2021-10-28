<?php
include 'dblink.php';
?>
<div id="a" style="margin: -9% 0% 0% 30%">
    </br></br><i style="color: red;"><u>CBSC Books For Standerd 1st.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="1") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?>
</div>
<div id="b" style="margin: -9% 0% 0% 30%">
    </br></br><i style="color: red;"><u>CBSC Books For Standerd 2nd.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="2") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?>
</div>
<div id="c" style="margin: -9% 0% 0% 30%">
    </br></br><i style="color: red;"><u>CBSC Books For Standerd 3rd.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="3") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?>
</div>
<div id="d" style="margin: -9% 0% 0% 30%">
    </br></br><i style="color: red;"><u>CBSC Books For Standerd 4th.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="4") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?>
</div>
<div id="e" style="margin: -9% 0% 0% 30%">
    </br></br><i style="color: red;"><u>CBSC Books For Standerd 5th.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="5") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?>
</div>
<div id="f" style="margin: -9% 0% 0% 30%">
    </br></br><i style="color: red;"><u>CBSC Books For Standerd 6th.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="6") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?>
</div>
<div id="g" style="margin: -9% 0% 0% 30%">
    </br></br><i style="color: red;"><u>CBSC Books For Standerd 7th.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="7") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?>
</div>
<div id="h" style="margin: -9% 0% 0% 30%">
    </br></br><i style="color: red;"><u>CBSC Books For Standerd 8th.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="8") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?>
</div>
<div id="i" style="margin: -9% 0% 0% 30%">
    </br></br><i style="color: red;"><u>CBSC Books For Standerd 9th.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="9") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?>
</div>
<div id="j" style="margin: -9% 0% 0% 30%">
    </br></br><i style="color: red;"><u>CBSC Books For Standerd 10th.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="9") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?>
</div>
<div id="k" style="margin: -9% 0% 0% 0%">
    </br></br><i style="color: red;margin-left: 30%"><u>CBSC Books For Isc.</u></i><br/>
    <div class="11" style="height: 300px; margin: 0% 0% 0% 20%">
        <i style="color: red;"><u>1st Year.</u></i><br/>
        <?php
            $q="select * from admin_upload";
            $qq=mysqli_query($con, $q);
            $n=mysqli_num_rows($qq);
            while ( $r=mysqli_fetch_assoc($qq)) {
                if ($r['course']=="11") {
                    echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
                }
            }
        ?>
    </div>
    <div class="12" style="height: 300px;margin: -300px 0px 0px 55%;">
        <i style="color: red;"><u>2nd Year.</u></i><br/>
        <?php
            $q="select * from admin_upload";
            $qq=mysqli_query($con, $q);
            $n=mysqli_num_rows($qq);
            while ( $r=mysqli_fetch_assoc($qq)) {
                if ($r['course']=="12") {
                    echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
                }
            }
        ?>
    </div>
</div>

<div id="l" style="margin: -9% 0% 0% 0%">
    </br></br><i style="color: red;margin-left: 30%;"><u>CBSC Books For BCA.</u></i><br/>
    <div style="height: 300px;">
    <i style="color: red;"><u>1st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCA" && $r['semester']=="1") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
    <div style="height: 300px;margin: -300px 0px 0px 35%;">
    <i style="color: red;"><u>2st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCA" && $r['semester']=="2") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
    <div style="height: 300px;margin: -300px 0px 0px 70%;">
    <i style="color: red;"><u>3st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCA" && $r['semester']=="3") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
    <div style="height: 300px;">
    <i style="color: red;"><u>4st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCA" && $r['semester']=="4") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
    <div style="height: 300px;margin: -300px 0px 0px 35%;">
    <i style="color: red;"><u>5st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCA" && $r['semester']=="5") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
    <div style="height: 300px;margin: -300px 0px 0px 70%;">
    <i style="color: red;"><u>6st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCA" && $r['semester']=="6") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
</div>
<div id="m" style="margin: -9% 0% 0% 0%">
    </br></br><i style="color: red;margin-left: 30%;"><u>CBSC Books For BBA.</u></i><br/>
    <div style="height: 300px;">
    <i style="color: red;"><u>1st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BBA" && $r['semester']=="1") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
    <div style="height: 300px;margin: -300px 0px 0px 35%;">
    <i style="color: red;"><u>2st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BBA" && $r['semester']=="2") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
    <div style="height: 300px;margin: -300px 0px 0px 70%;">
    <i style="color: red;"><u>3st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BBA" && $r['semester']=="3") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
    <div style="height: 300px;">
    <i style="color: red;"><u>4st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BBA" && $r['semester']=="4") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
    <div style="height: 300px;margin: -300px 0px 0px 35%;">
    <i style="color: red;"><u>5st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BBA" && $r['semester']=="5") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
    <div style="height: 300px;margin: -300px 0px 0px 70%;">
    <i style="color: red;"><u>6st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BBA" && $r['semester']=="6") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
</div>
<div id="n" style="margin: -9% 0% 0% 0%">
    </br></br><i style="color: red;margin-left: 30%;"><u>CBSC Books For BCom.</u></i><br/>
    <div style="height: 300px;">
    <i style="color: red;"><u>1st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCom" && $r['semester']=="1") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
    <div style="height: 300px;margin: -300px 0px 0px 35%;">
    <i style="color: red;"><u>2st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCom" && $r['semester']=="2") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
    <div style="height: 300px;margin: -300px 0px 0px 70%;">
    <i style="color: red;"><u>3st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCom" && $r['semester']=="3") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
    <div style="height: 300px;">
    <i style="color: red;"><u>4st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCom" && $r['semester']=="4") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
    <div style="height: 300px;margin: -300px 0px 0px 35%;">
    <i style="color: red;"><u>5st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCom" && $r['semester']=="5") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
    <div style="height: 300px;margin: -300px 0px 0px 70%;">
    <i style="color: red;"><u>6st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCom" && $r['semester']=="6") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
</div>
<div id="o" style="margin: -9% 0% 0% 0%">
    </br></br><i style="color: red;margin-left: 30%;"><u>CBSC Books For BSC.</u></i><br/>
    <div style="height: 300px;">
    <i style="color: red;"><u>1st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BSC" && $r['semester']=="1") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
    <div style="height: 300px;margin: -300px 0px 0px 35%;">
    <i style="color: red;"><u>2st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BSC" && $r['semester']=="2") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
    <div style="height: 300px;margin: -300px 0px 0px 70%;">
    <i style="color: red;"><u>3st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BSC" && $r['semester']=="3") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
    <div style="height: 300px;">
    <i style="color: red;"><u>4st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BSC" && $r['semester']=="4") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
    <div style="height: 300px;margin: -300px 0px 0px 35%;">
    <i style="color: red;"><u>5st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BSC" && $r['semester']=="5") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
    <div style="height: 300px;margin: -300px 0px 0px 70%;">
    <i style="color: red;"><u>6st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BSC" && $r['semester']=="6") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?></div>
</div>
<div id="p" style="margin: -9% 0% 0% 30%">
    </br></br><i style="color: red;"><u>Books For HTML.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="Language" && $r['subject']=="html") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?>
</div>
<div id="q" style="margin: -9% 0% 0% 30%">
    </br></br><i style="color: red;"><u>Books For JavaScript.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="Language" && $r['subject']=="javascript") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?>
</div>
<div id="r" style="margin: -9% 0% 0% 30%">
    </br></br><i style="color: red;"><u>Books For PHP.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="Language" && $r['subject']=="php") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?>
</div>
<div id="s" style="margin: -9% 0% 0% 30%">
    </br></br><i style="color: red;"><u>CBSC Books For MySQL.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="Language" && $r['subject']=="mysql") {
                echo "<a href='../Admin/book/$r[book]' download>$r[book]</a>"."<br/>";
            }
        }
    ?>
</div>