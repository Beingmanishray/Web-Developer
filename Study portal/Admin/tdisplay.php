<?php
include 'dblink.php';
?>

<script type="text/javascript">
function checkdelete()
  {
    return confirm('Are you sure you want to Delete this data??');
  }
  $(document).ready(function(){
    $("#tb").hide();  $("#tc").hide();  $("#td").hide();  $("#te").hide();
    $("#tf").hide();  $("#tg").hide();  $("#th").hide();    
    $(".ta").click(function(){
      $("#ta").show();  $("#tb").hide();  $("#tc").hide();  $("#td").hide();  
      $("#te").hide();  $("#tf").hide();  $("#tg").hide();  $("#th").hide();
    });
    $(".tb").click(function(){
      $("#ta").hide();  $("#tb").show();  $("#tc").hide();  $("#td").hide();  
      $("#te").hide();  $("#tf").hide();  $("#tg").hide();  $("#th").hide();
    });
    $(".tc").click(function(){
      $("#ta").hide();  $("#tb").hide();  $("#tc").show();  $("#td").hide();  
      $("#te").hide();  $("#tf").hide();  $("#tg").hide();  $("#th").hide();
    });
    $(".td").click(function(){
      $("#ta").hide();  $("#tb").hide();  $("#tc").hide();  $("#td").show();  
      $("#te").hide();  $("#tf").hide();  $("#tg").hide();  $("#th").hide();
    });
    $(".te").click(function(){
      $("#ta").hide();  $("#tb").hide();  $("#tc").hide();  $("#td").hide();  
      $("#te").show();  $("#tf").hide();  $("#tg").hide();  $("#th").hide();
    });
    $(".tf").click(function(){
      $("#ta").hide();  $("#tb").hide();  $("#tc").hide();  $("#td").hide();  
      $("#te").hide();  $("#tf").show();  $("#tg").hide();  $("#th").hide();
    });
    $(".tg").click(function(){
      $("#ta").hide();  $("#tb").hide();  $("#tc").hide();  $("#td").hide();  
      $("#te").hide();  $("#tf").hide();  $("#tg").show();  $("#th").hide();
    });
    $(".th").click(function(){
      $("#ta").hide();  $("#tb").hide();  $("#tc").hide();  $("#td").hide();  
      $("#te").hide();  $("#tf").hide();  $("#tg").hide();  $("#th").show();
    });
  });
</script>
<style type="text/css">
  .vitem{
        display: inline-block;
        width: 320px;
        margin: 4%;
    }
    #ta,#th{
        background-color: silver;
    }
</style>

<div id="ta" style="margin: -9% 0% 0% 0%">
    </br></br><i style="color: red;margin-left: 40%;"><u>Tutorial For HTML.</u></i><br/>
    <?php
      $q="select * from admin_upload";
      $qq=mysqli_query($con, $q);
      $n=mysqli_num_rows($qq);
      while ( $r=mysqli_fetch_assoc($qq)) {
          if ($r['course']=="Language" && $r['subject']=="html") {
              echo "<div class='vitem'>
                <video width='320' height='240' controls> <source src='../Admin/videos/".$r['videos']."' type='video/mp4' ></video>".$r['chapter']."<button><a href='tdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button>
              </div>";
          }
      }
    ?>
</div>

<div id="tb" style="margin: -9% 0% 0% 0%">
    </br></br><i style="color: red;margin-left: 40%;"><u>Tutorial For CSS.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="Language" && $r['subject']=="css") {
                echo "<div class='vitem'>
                  <video width='320' height='240' controls> <source src='../Admin/videos/".$r['videos']."' type='video/mp4' ></video>".$r['chapter']."
                  <button><a href='tdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button>
                </div>";
            }
        }
    ?>
</div>

<div id="tc" style="margin: -9% 0% 0% 0%">
    </br></br><i style="color: red;margin-left: 40%;"><u>Tutorial For MySQL.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="Language" && $r['subject']=="mysql") {
                echo "<div class='vitem'>
                  <video width='320' height='240' controls> <source src='../Admin/videos/".$r['videos']."' type='video/mp4' ></video>".$r['chapter']."
                  <button><a href='tdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button>
                </div>";
            }
        }
    ?>
</div>

<div id="td" style="margin: -9% 0% 0% 0%">
    </br></br><i style="color: red;margin-left: 40%;"><u>Tutorial For PHP.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="Language" && $r['subject']=="php") {
                echo "<div class='vitem'>
                  <video width='320' height='240' controls> <source src='../Admin/videos/".$r['videos']."' type='video/mp4' ></video>".$r['chapter']."
                  <button><a href='tdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button><br/>
                </div>";
            }
        }
    ?>
</div>

<div id="te" style="margin: -9% 0% 0% 0%">
    </br></br><i style="color: red;margin-left: 40%;"><u>Tutorial For JavaScript.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="Language" && $r['subject']=="javascript") {
                echo "<div class='vitem'>
                  <video width='320' height='240' controls> <source src='../Admin/videos/".$r['videos']."' type='video/mp4' ></video>".$r['chapter']."
                  <button><a href='tdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button>
                </div>";
            }
        }
    ?>
</div>

<div id="tf" style="margin: -9% 0% 0% 0%">
    </br></br><i style="color: red;margin-left: 40%;"><u>Tutorial For C.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="Language" && $r['subject']=="c") {
                echo "<div class='vitem'>
                  <video width='320' height='240' controls> <source src='../Admin/videos/".$r['videos']."' type='video/mp4' ></video>".$r['chapter']."
                  <button><a href='tdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button>
                </div>";
            }
        }
    ?>
</div>

<div id="tg" style="margin: -9% 0% 0% 0%">
    </br></br><i style="color: red;margin-left: 40%;"><u>Tutorial For C++.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="Language" && $r['subject']=="c++") {
                echo "<div class='vitem'>
                  <video width='320' height='240' controls> <source src='../Admin/videos/".$r['videos']."' type='video/mp4' ></video>".$r['chapter']."
                  <button><a href='tdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button>
                </div>";
            }
        }
    ?>
</div>

<div id="th" style="margin: -9% 0% 0% 0%">
    </br></br><i style="color: red;margin-left: 40%;"><u>Tutorial For JAVA.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="Language" && $r['subject']=="java") {
                echo "<div class='vitem'>
                  <video width='320' height='240' controls> <source src='../Admin/videos/".$r['videos']."' type='video/mp4' ></video>".$r['chapter']."
                  <button><a href='tdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button>
                </div>";
            }
        }
    ?>
</div>