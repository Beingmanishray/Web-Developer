<?php
include 'dblink.php';
?>
<script type="text/javascript">
function checkdelete()
    {
        return confirm('Are you sure you want to Delete this data??');
    }
    $(document).ready(function(){
      $("#b").hide();  $("#c").hide();  $("#d").hide();  $("#e").hide();
      $("#f").hide();  $("#g").hide();  $("#h").hide();  $("#i").hide();
      $("#j").hide();  $("#k").hide();  $("#l").hide();  $("#m").hide();
      $("#n").hide();  $("#o").hide();  $("#p").hide();  $("#q").hide();
      $("#r").hide();  $("#s").hide();  $("#t").hide();
      $(".a").click(function(){
        $("#a").show();  $("#b").hide();  $("#c").hide();  $("#d").hide();  
        $("#e").hide();  $("#f").hide();  $("#g").hide();  $("#h").hide();
        $("#i").hide();  $("#j").hide();  $("#k").hide();  $("#l").hide();  
        $("#m").hide();  $("#n").hide();  $("#o").hide();  $("#p").hide();  
        $("#q").hide();  $("#r").hide();  $("#s").hide();  $("#t").hide();
      });
      $(".b").click(function(){
        $("#a").hide();  $("#b").show();  $("#c").hide();  $("#d").hide();  
        $("#e").hide();  $("#f").hide();  $("#g").hide();  $("#h").hide();
        $("#i").hide();  $("#j").hide();  $("#k").hide();  $("#l").hide();  
        $("#m").hide();  $("#n").hide();  $("#o").hide();  $("#p").hide();  
        $("#q").hide();  $("#r").hide();  $("#s").hide();  $("#t").hide();
      });
      $(".c").click(function(){
        $("#a").hide();  $("#b").hide();  $("#c").show();  $("#d").hide();  
        $("#e").hide();  $("#f").hide();  $("#g").hide();  $("#h").hide();
        $("#i").hide();  $("#j").hide();  $("#k").hide();  $("#l").hide();  
        $("#m").hide();  $("#n").hide();  $("#o").hide();  $("#p").hide();  
        $("#q").hide();  $("#r").hide();  $("#s").hide();  $("#t").hide();
      });
      $(".d").click(function(){
        $("#a").hide();  $("#b").hide();  $("#c").hide();  $("#d").show();  
        $("#e").hide();  $("#f").hide();  $("#g").hide();  $("#h").hide();
        $("#i").hide();  $("#j").hide();  $("#k").hide();  $("#l").hide();  
        $("#m").hide();  $("#n").hide();  $("#o").hide();  $("#p").hide();  
        $("#q").hide();  $("#r").hide();  $("#s").hide();  $("#t").hide();
      });
      $(".e").click(function(){
        $("#a").hide();  $("#b").hide();  $("#c").hide();  $("#d").hide();  
        $("#e").show();  $("#f").hide();  $("#g").hide();  $("#h").hide();
        $("#i").hide();  $("#j").hide();  $("#k").hide();  $("#l").hide();  
        $("#m").hide();  $("#n").hide();  $("#o").hide();  $("#p").hide();  
        $("#q").hide();  $("#r").hide();  $("#s").hide();  $("#t").hide();
      });
      $(".f").click(function(){
        $("#a").hide();  $("#b").hide();  $("#c").hide();  $("#d").hide();  
        $("#e").hide();  $("#f").show();  $("#g").hide();  $("#h").hide();
        $("#i").hide();  $("#j").hide();  $("#k").hide();  $("#l").hide();  
        $("#m").hide();  $("#n").hide();  $("#o").hide();  $("#p").hide();  
        $("#q").hide();  $("#r").hide();  $("#s").hide();  $("#t").hide();
      });
      $(".g").click(function(){
        $("#a").hide();  $("#b").hide();  $("#c").hide();  $("#d").hide();  
        $("#e").hide();  $("#f").hide();  $("#g").show();  $("#h").hide();
        $("#i").hide();  $("#j").hide();  $("#k").hide();  $("#l").hide();  
        $("#m").hide();  $("#n").hide();  $("#o").hide();  $("#p").hide();  
        $("#q").hide();  $("#r").hide();  $("#s").hide();  $("#t").hide();
      });
      $(".hh").click(function(){
        $("#a").hide();  $("#b").hide();  $("#c").hide();  $("#d").hide();  
        $("#e").hide();  $("#f").hide();  $("#g").hide();  $("#h").show();
        $("#i").hide();  $("#j").hide();  $("#k").hide();  $("#l").hide();  
        $("#m").hide();  $("#n").hide();  $("#o").hide();  $("#p").hide();  
        $("#q").hide();  $("#r").hide();  $("#s").hide();  $("#t").hide();
      });
      $(".i").click(function(){
        $("#a").hide();  $("#b").hide();  $("#c").hide();  $("#d").hide();  
        $("#e").hide();  $("#f").hide();  $("#g").hide();  $("#h").hide();
        $("#i").show();  $("#j").hide();  $("#k").hide();  $("#l").hide();  
        $("#m").hide();  $("#n").hide();  $("#o").hide();  $("#p").hide();  
        $("#q").hide();  $("#r").hide();  $("#s").hide();  $("#t").hide();
      });
      $(".j").click(function(){
        $("#a").hide();  $("#b").hide();  $("#c").hide();  $("#d").hide();  
        $("#e").hide();  $("#f").hide();  $("#g").hide();  $("#h").hide();
        $("#i").hide();  $("#j").show();  $("#k").hide();  $("#l").hide();  
        $("#m").hide();  $("#n").hide();  $("#o").hide();  $("#p").hide();  
        $("#q").hide();  $("#r").hide();  $("#s").hide();  $("#t").hide();
      });
      $(".k").click(function(){
        $("#a").hide();  $("#b").hide();  $("#c").hide();  $("#d").hide();  
        $("#e").hide();  $("#f").hide();  $("#g").hide();  $("#h").hide();
        $("#i").hide();  $("#j").hide();  $("#k").show();  $("#l").hide();  
        $("#m").hide();  $("#n").hide();  $("#o").hide();  $("#p").hide();  
        $("#q").hide();  $("#r").hide();  $("#s").hide();  $("#t").hide();
      });
      $(".l").click(function(){
        $("#a").hide();  $("#b").hide();  $("#c").hide();  $("#d").hide();  
        $("#e").hide();  $("#f").hide();  $("#g").hide();  $("#h").hide();
        $("#i").hide();  $("#j").hide();  $("#k").hide();  $("#l").show();  
        $("#m").hide();  $("#n").hide();  $("#o").hide();  $("#p").hide();  
        $("#q").hide();  $("#r").hide();  $("#s").hide();  $("#t").hide();
      });
      $(".m").click(function(){
        $("#a").hide();  $("#b").hide();  $("#c").hide();  $("#d").hide();  
        $("#e").hide();  $("#f").hide();  $("#g").hide();  $("#h").hide();
        $("#i").hide();  $("#j").hide();  $("#k").hide();  $("#l").hide();  
        $("#m").show();  $("#n").hide();  $("#o").hide();  $("#p").hide();  
        $("#q").hide();  $("#r").hide();  $("#s").hide();  $("#t").hide();
      });
      $(".n").click(function(){
        $("#a").hide();  $("#b").hide();  $("#c").hide();  $("#d").hide();  
        $("#e").hide();  $("#f").hide();  $("#g").hide();  $("#h").hide();
        $("#i").hide();  $("#j").hide();  $("#k").hide();  $("#l").hide();  
        $("#m").hide();  $("#n").show();  $("#o").hide();  $("#p").hide();  
        $("#q").hide();  $("#r").hide();  $("#s").hide();  $("#t").hide();
      });
      $(".o").click(function(){
        $("#a").hide();  $("#b").hide();  $("#c").hide();  $("#d").hide();  
        $("#e").hide();  $("#f").hide();  $("#g").hide();  $("#h").hide();
        $("#i").hide();  $("#j").hide();  $("#k").hide();  $("#l").hide();  
        $("#m").hide();  $("#n").hide();  $("#o").show();  $("#p").hide();  
        $("#q").hide();  $("#r").hide();  $("#s").hide();  $("#t").hide();
      });
      $(".pp").click(function(){
        $("#a").hide();  $("#b").hide();  $("#c").hide();  $("#d").hide();  
        $("#e").hide();  $("#f").hide();  $("#g").hide();  $("#h").hide();
        $("#i").hide();  $("#j").hide();  $("#k").hide();  $("#l").hide();  
        $("#m").hide();  $("#n").hide();  $("#o").hide();  $("#p").show();  
        $("#q").hide();  $("#r").hide();  $("#s").hide();  $("#t").hide();
      });
      $(".q").click(function(){
        $("#a").hide();  $("#b").hide();  $("#c").hide();  $("#d").hide();  
        $("#e").hide();  $("#f").hide();  $("#g").hide();  $("#h").hide();
        $("#i").hide();  $("#j").hide();  $("#k").hide();  $("#l").hide();  
        $("#m").hide();  $("#n").hide();  $("#o").hide();  $("#p").hide();  
        $("#q").show();  $("#r").hide();  $("#s").hide();  $("#t").hide();
      });
      $(".r").click(function(){
        $("#a").hide();  $("#b").hide();  $("#c").hide();  $("#d").hide();  
        $("#e").hide();  $("#f").hide();  $("#g").hide();  $("#h").hide();
        $("#i").hide();  $("#j").hide();  $("#k").hide();  $("#l").hide();  
        $("#m").hide();  $("#n").hide();  $("#o").hide();  $("#p").hide();  
        $("#q").hide();  $("#r").show();  $("#s").hide();  $("#t").hide();
      });
      $(".ss").click(function(){
        $("#a").hide();  $("#b").hide();  $("#c").hide();  $("#d").hide();  
        $("#e").hide();  $("#f").hide();  $("#g").hide();  $("#h").hide();
        $("#i").hide();  $("#j").hide();  $("#k").hide();  $("#l").hide();  
        $("#m").hide();  $("#n").hide();  $("#o").hide();  $("#p").hide();  
        $("#q").hide();  $("#r").hide();  $("#s").show();  $("#t").hide();
      }); 
    });
</script>
<div id="a" style="margin: -9% 0% 0% 30%">
    </br></br><i style="color: red;"><u>CBSC Books For Standerd 1st.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="1") {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
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
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
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
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
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
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
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
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
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
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
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
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
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
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
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
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?>
</div>
<div id="j" style="margin: -9% 0% 0% 30%">
    </br></br><i style="color: red;"><u>CBSC Books For Standerd 9th.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="9" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?>
</div>
<div id="k" style="margin: -9% 0% 0% 0%">
    </br></br><i style="color: red;margin-left: 30%"><u>CBSC Books For Isc.</u></i><br/>
    <div style="float: left;">
        <i style="color: red;"><u>1st Year.</u></i><br/>
        <?php
            $q="select * from admin_upload";
            $qq=mysqli_query($con, $q);
            $n=mysqli_num_rows($qq);
            while ( $r=mysqli_fetch_assoc($qq)) {
                if ($r['course']=="11" && !$r['question']) {
                    echo "<tr>
                    <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                    <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                    </tr>";
                }
            }
        ?>
    </div>
    <div style="margin-left: 50%;">
        <i style="color: red;"><u>2nd Year.</u></i><br/>
        <?php
            $q="select * from admin_upload";
            $qq=mysqli_query($con, $q);
            $n=mysqli_num_rows($qq);
            while ( $r=mysqli_fetch_assoc($qq)) {
                if ($r['course']=="12" && !$r['question']) {
                    echo "<tr>
                    <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                    <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                    </tr>";
                }
            }
        ?>
    </div>
</div>

<div id="l" style="margin: -9% 0% 0% 0%">
    </br></br><i style="color: red;margin-left: 30%;"><u>CBSC Books For BCA.</u></i><br/>
    <div style="float: left;">
    <i style="color: red;"><u>1st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCA" && $r['semester']=="1" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div style="margin-left: 50%;">
    <i style="color: red;"><u>2st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCA" && $r['semester']=="2" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div style="float: left;">
    <i style="color: red;"><u>3st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCA" && $r['semester']=="3" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div style="margin-left: 50%;">
    <i style="color: red;"><u>4st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCA" && $r['semester']=="4" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div style="float: left;">
    <i style="color: red;"><u>5st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCA" && $r['semester']=="5" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div style="margin-left: 50%;">
    <i style="color: red;"><u>6st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCA" && $r['semester']=="6" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
</div>
<div id="m" style="margin: -9% 0% 0% 0%">
    </br></br><i style="color: red;margin-left: 30%;"><u>CBSC Books For BBA.</u></i><br/>
    <div style="float: left;">
    <i style="color: red;"><u>1st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BBA" && $r['semester']=="1" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div style="margin-left: 50%;">
    <i style="color: red;"><u>2st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BBA" && $r['semester']=="2" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div style="float: left;">
    <i style="color: red;"><u>3st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BBA" && $r['semester']=="3" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div style="margin-left: 50%;">
    <i style="color: red;"><u>4st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BBA" && $r['semester']=="4" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div style="float: left;">
    <i style="color: red;"><u>5st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BBA" && $r['semester']=="5" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div style="margin-left: 50%;">
    <i style="color: red;"><u>6st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BBA" && $r['semester']=="6" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
</div>
<div id="n" style="margin: -9% 0% 0% 0%">
    </br></br><i style="color: red;margin-left: 30%;"><u>CBSC Books For BCom.</u></i><br/>
    <div style="float: left;">
    <i style="color: red;"><u>1st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCom" && $r['semester']=="1" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div style="margin-left: 50%;">
    <i style="color: red;"><u>2st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCom" && $r['semester']=="2" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div style="float: left;">
    <i style="color: red;"><u>3st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCom" && $r['semester']=="3" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div style="margin-left: 50%;">
    <i style="color: red;"><u>4st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCom" && $r['semester']=="4" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div style="float: left;">
    <i style="color: red;"><u>5st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCom" && $r['semester']=="5" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div style="margin-left: 50%;">
    <i style="color: red;"><u>6st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCom" && $r['semester']=="6" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
</div>
<div id="o" style="margin: -9% 0% 0% 0%">
    </br></br><i style="color: red;margin-left: 30%;"><u>CBSC Books For BSC.</u></i><br/>
    <div style="float: left;">
    <i style="color: red;"><u>1st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BSC" && $r['semester']=="1" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div style="margin-left: 50%;">
    <i style="color: red;"><u>2st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BSC" && $r['semester']=="2" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div style="float: left;">
    <i style="color: red;"><u>3st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BSC" && $r['semester']=="3" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div style="margin-left: 50%;">
    <i style="color: red;"><u>4st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BSC" && $r['semester']=="4" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div style="float: left;">
    <i style="color: red;"><u>5st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BSC" && $r['semester']=="5" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div style="margin-left: 50%;">
    <i style="color: red;"><u>6st Semester.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BSC" && $r['semester']=="6" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
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
            if ($r['course']=="HTML" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
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
            if ($r['course']=="JavaScript" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
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
            if ($r['course']=="PHP" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
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
            if ($r['course']=="MySQL" && !$r['question']) {
                echo "<tr>
                <td><a href='../Admin/book/$r[book]' download>$r[book]</a></td>
                <td><button><a href='bdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?>
</div>