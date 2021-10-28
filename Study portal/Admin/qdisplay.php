<?php
include 'dblink.php';
?>

<script type="text/javascript">
    function checkdelete()
        {
            return confirm('Are you sure you want to Delete this data??');
        }
        $(document).ready(function(){
          $("#qb").hide();  $("#qc").hide();  $("#qd").hide();  $("#qe").hide();
          $("#qf").hide();  $("#qg").hide();  $("#qh").hide();  $("#qi").hide();
          $("#qj").hide();  $("#qk").hide();  $("#ql").hide();  $("#qm").hide();
          $("#qn").hide();  $("#qo").hide();  
          $(".qpa").click(function(){
            $("#qa").show();  $("#qb").hide();  $("#qc").hide();  $("#qd").hide();  
            $("#qe").hide();  $("#qf").hide();  $("#qg").hide();  $("#qh").hide();
            $("#qi").hide();  $("#qj").hide();  $("#qk").hide();  $("#ql").hide();  
            $("#qm").hide();  $("#qn").hide();  $("#qo").hide();  
          });
          $(".qpb").click(function(){
            $("#qa").hide();  $("#qb").show();  $("#qc").hide();  $("#qd").hide();  
            $("#qe").hide();  $("#qf").hide();  $("#qg").hide();  $("#qh").hide();
            $("#qi").hide();  $("#qj").hide();  $("#qk").hide();  $("#ql").hide();  
            $("#qm").hide();  $("#qn").hide();  $("#qo").hide();  
          });
          $(".qpc").click(function(){
            $("#qa").hide();  $("#qb").hide();  $("#qc").show();  $("#qd").hide();  
            $("#qe").hide();  $("#qf").hide();  $("#qg").hide();  $("#qh").hide();
            $("#qi").hide();  $("#qj").hide();  $("#qk").hide();  $("#ql").hide();  
            $("#qm").hide();  $("#qn").hide();  $("#qo").hide();  
          });
          $(".qpd").click(function(){
            $("#qa").hide();  $("#qb").hide();  $("#qc").hide();  $("#qd").show();  
            $("#qe").hide();  $("#qf").hide();  $("#qg").hide();  $("#qh").hide();
            $("#qi").hide();  $("#qj").hide();  $("#qk").hide();  $("#ql").hide();  
            $("#qm").hide();  $("#qn").hide();  $("#qo").hide();  
          });
          $(".qpe").click(function(){
            $("#qa").hide();  $("#qb").hide();  $("#qc").hide();  $("#qd").hide();  
            $("#qe").show();  $("#qf").hide();  $("#qg").hide();  $("#qh").hide();
            $("#qi").hide();  $("#qj").hide();  $("#qk").hide();  $("#ql").hide();  
            $("#qm").hide();  $("#qn").hide();  $("#qo").hide();
          });
          $(".qpf").click(function(){
            $("#qa").hide();  $("#qb").hide();  $("#qc").hide();  $("#qd").hide();  
            $("#qe").hide();  $("#qf").show();  $("#qg").hide();  $("#qh").hide();
            $("#qi").hide();  $("#qj").hide();  $("#qk").hide();  $("#ql").hide();  
            $("#qm").hide();  $("#qn").hide();  $("#qo").hide();
          });
          $(".qpg").click(function(){
            $("#qa").hide();  $("#qb").hide();  $("#qc").hide();  $("#qd").hide();  
            $("#qe").hide();  $("#qf").hide();  $("#qg").show();  $("#qh").hide();
            $("#qi").hide();  $("#qj").hide();  $("#qk").hide();  $("#ql").hide();  
            $("#qm").hide();  $("#qn").hide();  $("#qo").hide();
          });
          $(".qph").click(function(){
            $("#qa").hide();  $("#qb").hide();  $("#qc").hide();  $("#qd").hide();  
            $("#qe").hide();  $("#qf").hide();  $("#qg").hide();  $("#qh").show();
            $("#qi").hide();  $("#qj").hide();  $("#qk").hide();  $("#ql").hide();  
            $("#qm").hide();  $("#qn").hide();  $("#qo").hide();
          });
          $(".qpi").click(function(){
            $("#qa").hide();  $("#qb").hide();  $("#qc").hide();  $("#qd").hide();  
            $("#qe").hide();  $("#qf").hide();  $("#qg").hide();  $("#qh").hide();
            $("#qi").show();  $("#qj").hide();  $("#qk").hide();  $("#ql").hide();  
            $("#qm").hide();  $("#qn").hide();  $("#qo").hide();
          });
          $(".qpj").click(function(){
            $("#qa").hide();  $("#qb").hide();  $("#qc").hide();  $("#qd").hide();  
            $("#qe").hide();  $("#qf").hide();  $("#qg").hide();  $("#qh").hide();
            $("#qi").hide();  $("#qj").show();  $("#qk").hide();  $("#ql").hide();  
            $("#qm").hide();  $("#qn").hide();  $("#qo").hide();
          });
          $(".qpk").click(function(){
            $("#qa").hide();  $("#qb").hide();  $("#qc").hide();  $("#qd").hide();  
            $("#qe").hide();  $("#qf").hide();  $("#qg").hide();  $("#qh").hide();
            $("#qi").hide();  $("#qj").hide();  $("#qk").show();  $("#ql").hide();  
            $("#qm").hide();  $("#qn").hide();  $("#qo").hide();
          });
          $(".qpl").click(function(){
            $("#qa").hide();  $("#qb").hide();  $("#qc").hide();  $("#qd").hide();  
            $("#qe").hide();  $("#qf").hide();  $("#qg").hide();  $("#qh").hide();
            $("#qi").hide();  $("#qj").hide();  $("#qk").hide();  $("#ql").show();  
            $("#qm").hide();  $("#qn").hide();  $("#qo").hide();
          });
          $(".qpm").click(function(){
            $("#qa").hide();  $("#qb").hide();  $("#qc").hide();  $("#qd").hide();  
            $("#qe").hide();  $("#qf").hide();  $("#qg").hide();  $("#qh").hide();
            $("#qi").hide();  $("#qj").hide();  $("#qk").hide();  $("#ql").hide();  
            $("#qm").show();  $("#qn").hide();  $("#qo").hide();
          });
          $(".qpn").click(function(){
            $("#qa").hide();  $("#qb").hide();  $("#qc").hide();  $("#qd").hide();  
            $("#qe").hide();  $("#qf").hide();  $("#qg").hide();  $("#qh").hide();
            $("#qi").hide();  $("#qj").hide();  $("#qk").hide();  $("#ql").hide();  
            $("#qm").hide();  $("#qn").show();  $("#qo").hide();
          });
          $(".qpo").click(function(){
            $("#qa").hide();  $("#qb").hide();  $("#qc").hide();  $("#qd").hide();  
            $("#qe").hide();  $("#qf").hide();  $("#qg").hide();  $("#qh").hide();
            $("#qi").hide();  $("#qj").hide();  $("#qk").hide();  $("#ql").hide();  
            $("#qm").hide();  $("#qn").hide();  $("#qo").show();
          });
        });
    </script>

<div id="qa" style="margin: -9% 0% 0% 8%">
    </br></br><i style="color: red;margin-left:20%;"><u>CBSC Question For Standerd 10th.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="10" && !$r['book']) {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?>
</div>
<div id="qb" style="margin: -9% 0% 0% 8%">
    </br></br><i style="color: red;margin-left:20%;"><u>CBSC Question For ISC.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="ISc" && !$r['book']) {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?>
</div>

<div id="qc" style="margin: -9% 0% 0% 8%">
    </br></br><i style="color: red;margin-left:20%;"><u>CBSC Question For IA.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="IA") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?>
</div>

<div id="qd" style="margin: -9% 0% 0% 8%">
    </br></br><i style="color: red;margin-left:20%;"><u>CBSC Question For ICom.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="ICom") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?>
</div>

<div id="qe" style="margin: -9% 0% 0% 8%">
    </br></br><i style="color: red;margin-left:20%;">CBCS Question For BCA.</u></i><bmargin-left:25%;r/>
   <div>
    <i style="color: red">1st Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCA" && $r['semester']=="1" && !$r['book']) {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>

    <div>
    <i style="color: red;">2nd Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCA" && $r['semester']=="2" && !$r['book']) {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>

    <div>
    <i style="color: red">3rd Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCA" && $r['semester']=="3" && !$r['book']) {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div>
    <i style="color: red">4th Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCA" && $r['semester']=="4" && !$r['book']) {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div>
    <i style="color: red">5th Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCA" && $r['semester']=="5" && !$r['book']) {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div>
    <i style="color: red">6th Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCA" && $r['semester']=="6" && !$r['book']) {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div><br/>
</div>



<div id="qf" style="margin: -9% 0% 0%8%">
    </br></br><i style="color: red;margin-left:20%;">CBCS Question For BBA.</u></i><br>
   <div>
    <i style="color: red">1st Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BBA" && $r['semester']=="1" && !$r['book']) {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>

    <div>
    <i style="color: red">2nd Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BBA" && $r['semester']=="2" && !$r['book']) {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>

    <div>
    <i style="color: red">3rd Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BBA" && $r['semester']=="3" && !$r['book']) {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div>
    <i style="color: red">4th Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BBA" && $r['semester']=="4" && !$r['book']) {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div>
    <i style="color: red">5th Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BBA" && $r['semester']=="5" && !$r['book']) {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div>
    <i style="color: red">6th Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BBA" && $r['semester']=="6" && !$r['book']) {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div><br/>
</div>

<div id="qg" style="margin: -9% 0% 0% 8%">
    </br></br><i style="color: red;margin-left:20%;">CBCS Question For BSC.</u></i><br/>
   <div>
    <i style="color: red">1st Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BSc" && $r['semester']=="1") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>

    <div>    
    <i style="color: red">2nd Semester</i><bmargin-left:25%;r/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BSc" && $r['semester']=="2") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>

    <div>
    <i style="color: red">3rd Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BSc" && $r['semester']=="3") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div>    
        <i style="color: red">4th Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BSc" && $r['semester']=="4") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div>
    <i style="color: red">5th Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BSc" && $r['semester']=="5") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div>    
    <i style="color: red">6th Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BSc" && $r['semester']=="6") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div><br/>
</div>

<div id="qh" style="margin: -9% 0% 0% 8%">
    </br></br><i style="color: red;margin-left:20%;">CBCS Question For BCOM.</u></i><br/>
    <div>
    <i style="color: red">1st Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCom" && $r['semester']=="1") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>

    <div>
    <i style="color: red">2nd Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCom" && $r['semester']=="2") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>

    <div>
    <i style="color: red">3rd Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCom" && $r['semester']=="3") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div>
    <i style="color: red">4th Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCom" && $r['semester']=="4") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div>
    <i style="color: red">5th Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCom" && $r['semester']=="5") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div>
    <i style="color: red">6th Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BCom" && $r['semester']=="6") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div><br/>
</div>

<div id="qi" style="margin: -9% 0% 0% 8%">
    </br></br><i style="color: red;margin-left:20%;">CBCS Question For BA.</u></i><br/>
    <div>
    <i style="color: red">1st Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BA" && $r['semester']=="1") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>

    <div>    
    <i style="color: red">2nd Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BA" && $r['semester']=="2") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>

    <div>
    <i style="color: red">3rd Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BA" && $r['semester']=="3") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div>    
    <i style="color: red">4th Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BA" && $r['semester']=="4") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div>
    <i style="color: red">5th Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BA" && $r['semester']=="5") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div>    
    <i style="color: red">6th Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="BA" && $r['semester']=="6") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div><br/>
</div>

<div id="qj" style="margin: -9% 0% 0% 8%">
    </br></br><i style="color: red;margin-left:20%;">CBCS Question For MCA.</u></i><br/>
   <div>
    <i style="color: red">1st Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="MCA" && $r['semester']=="1") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>

    <div>    
    <i style="color: red">2nd Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="MCA" && $r['semester']=="2") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>

    <div>
    <i style="color: red">3rd Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="MCA" && $r['semester']=="3") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div>    
    <i style="color: red">4th Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="MCA" && $r['semester']=="4") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div>
    <i style="color: red">5th Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="MCA" && $r['semester']=="5") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div>    
    <i style="color: red">6th Semester</i><br/>
   <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="MCA" && $r['semester']=="6") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div><br/>
</div>

<div id="qk" style="margin: -9% 0% 0% 8%">
    </br></br><i style="color: red;margin-left:20%;">CBCS Question For MBA.</u></i><br/>
   <div>
    <i style="color: red">1st Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="MBA" && $r['semester']=="1") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>

    <div>    
    <i style="color: red">2nd Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="MBA" && $r['semester']=="2") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>

    <div>
    <i style="color: red">3rd Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="MBA" && $r['semester']=="3") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
    <div>    
    <i style="color: red">4th Semester</i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="MBA" && $r['semester']=="4") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?></div>
</div>

<div id="ql" style="margin: -9% 0% 0% 8%">
    </br></br><i style="color: red;margin-left:20%;"><u> Question For IAS.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="IAS") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?>
</div>

<div id="qm" style="margin: -9% 0% 0% 8%">
    </br></br><i style="color: red;margin-left:20%;"><u>Question For UPSC.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="UPSC") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?>
</div>

<div id="qn" style="margin: -9% 0% 0% 8%">
    </br></br><i style="color: red;margin-left:20%;"><u>Question For Railway.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="railway") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?>
</div>

<div id="qo" style="margin: -9% 0% 0% 8%">
    </br></br><i style="color: red;margin-left:20%;"><u>Question For SSC.</u></i><br/>
    <?php
        $q="select * from admin_upload";
        $qq=mysqli_query($con, $q);
        $n=mysqli_num_rows($qq);
        while ( $r=mysqli_fetch_assoc($qq)) {
            if ($r['course']=="SSC") {
                echo "<tr>
                <td>".$r['year']."</td>
                <td><a href='question/$r[question]' download>$r[question]</a><td>
                <td><button><a href='qdelete.php?ui=$r[id]' onclick ='return checkdelete()' >Delete</a></button></td><br/>
                </tr>";
            }
        }
    ?>
</div>