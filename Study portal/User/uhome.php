<?php
  session_start();
  include 'dblink.php';
  $email = $_SESSION['username'];
  if (!$_SESSION['username']) {
    header('location:../index.php');
  }
?>


<html>
<head>
<title> study portal</title>
	<style type="text/css">
		body{
          margin: 0%;
          padding: 0%;
        }
        .hd{
          position: fixed;
          width: 100%;
        }
        h1{
            margin: 0;
            color: white;
            background-color: gray;
            word-spacing: 10px;
        }
        h2{
            margin: 0;
            background-color: black;
            text-align: center;
        }
        h2 a{
            color: red;
            text-decoration: none;
            margin: 20px;
        }
        h2 a:hover,a:focus{
            background-color: gray;
            color: rgb(0, 255, 64);
        }
        .slider{
            width: 800px;
            margin:auto;
            overflow: hidden;
            border: 10px solid white;
            box-shadow: 0px 0px 5px 2px black;
        }
        .ph{
            position: relative;
        	  width: 3200px;
            animation-name: manish;
            animation-duration: 16s;
            animation-iteration-count: infinite;
            margin-top: 60px;
        }
        .ph img{
            float: left;
            width: 800px;
        }
        @keyframes manish{
            0%{
                left:0px;
            }
            20%{
                left:0px;
            }
            25%{
                left: -800px;
            }
            45%{
                left: -800px;
            }
            50%{
                left: -1600px;
            }
            70%{
                left: -1600px;
            }
            75%{
                left: -2400px;
            }
            95%{
                left: -2400px;
            }
        }
        .book1,.Question1,.tut1{
            border: solid green;
            font-size: 40px; 
            border-radius: 10px;   
        }
        .book1 a,.Question1 a,.tut1 a{
            margin: 20px 20px 20px 20px;
            text-decoration: none;
        }
        .book1 a:hover,a:focus,.Question1 a:hover,a:focus,.tut1 a:hover,a:focus{
            color: green;
        }
        .info-about{
            height: 20%;
            width: 5    0%;
            border:solid black;
            text-align: center;
            font-size: 20px;
            margin: -15% 0% 0% 50%;
        }
        .info-about h4{
            margin-left: 40px;
            background-color: blue;
            color: yellow;
            height: 20%;
            width: 80%
        }
        .info-about p{
            margin: -27px 0px 0px 40px;
            background-color: black;
            color: white;
            height: 20%;
            width: 80%
        }
        .s{
            border:solid black;
            width: 45%;
            text-align: center;
            font-size: 20px;
            background-color: dimgray;
            color: white;
            margin-top: -5%;
        }
        .s1{
            width: 40%;
            border: solid gray;
            border-radius: 20px;
            text-align: center;
            margin: -20%;
        }
        .s12{
            width: 40%;
            border: solid gray;
            border-radius: 20px;
            background-color: silver;
            font-size: 26px;
            margin-left: 2%;
        }
        .s1 select{
            height: 40px; 
            width: 70%; 
            border-radius: 20px; 
            font-size: 20px;
            text-align: center;
        }
	</style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
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
          $(".h").click(function(){
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
          $(".p").click(function(){
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
</head>
<body>

<!-- code for head -->
  <div class="hd">
    <h1> <marquee>WELCOME  TO ONLINE STUDY PORTAL. </marquee></h1>
    <h2> <a href="#"> Home </a><a href="uprofile.php"> Profile </a><a href="#book1" class="pro">Book</a><a href="#Question1" class="qp">Question paper</a><a href="#tut1" class="Tutorial"> Tutorial </a><a href="#about"> About_us </a><a href="#contact1"> Contact </a><a href="../admin/logout.php"> Logout </a> </h2>
  </div>

<!-- code for sliding images -->
  <div class="slider">
      <div class="ph">
          <img src="image/Profile.jpg">
          <img src="image/Profile1.png">
          <img src="image/tutorial.jpg">
          <img src="image/about.jpg">	
      </div>
  </div>
  
  <!-- code for display book -->
    <div class="book1" id="book1">
        <p style="font-size: 60px;color: black;margin: 80px 0px 0px 0%;text-align: center;">Available <small style="font-size: 50px;color: silver;">Course Book </small><hr></p>
        <i style="color: red;">Primary School ></i>
        <a href="#book1" class="a">1st</a>
        <a href="#book1" class="b">2nd</a>
        <a href="#book1" class="c">3rd</a>
        <a href="#book1" class="d">4th</a>
        <a href="#book1" class="e">5th</a>
        <a href="#book1" class="f">6th</a>
        <a href="#book1" class="g">7th</a>
        <a href="#book1" class="h">8th</a> <br/>
        <i style="color: red;margin-left: 52px;">High School ></i>
        <a href="#book1" class="i">9th</a>
        <a href="#book1" class="j">10th</a>
        <a href="#book1" class="k">Isc</a><br/>
        <i style="color: red;">Under graduate ></i>
        <a href="#book1" class="l">BCA</a>
        <a href="#book1" class="m">BBA</a>
        <a href="#book1" class="n">BCom</a>
        <a href="#book1" class="o">BSC</a><br/>
        <i style="color: red;margin-left: 85px;">Language ></i>
        <a href="#book1" class="p">HTML</a>
        <a href="#book1" class="q">JavaScript</a>
        <a href="#book1" class="r">PHP</a>
        <a href="#book1" class="ss">MySQL</a><hr>

        <?php include 'bdisplay.php';?>
    </div>

<!-- code for display question paper -->
  <div class="Question1" id="Question1">
     <p style="font-size: 60px;color: black;margin: 80px 0px 0px 0%;text-align: center;">Available <small style="font-size: 50px;color: silver;">Question Paper </small><hr></p>
     <i style="color: red;">High School ></i>
     <a href="#Question1" class="qpa">10th</a>
     <a href="#Question1" class="qpb">Isc</a>
     <a href="#Question1" class="qpc">IA</a>
     <a href="#Question1" class="qpd">Icom</a><br/>
     <i style="color: red;margin-left: 10%">UG ></i>
     <a href="#Question1" class="qpe">BCA</a>
     <a href="#Question1" class="qpf">BBA</a>
     <a href="#Question1" class="qpg">BSC</a>
     <a href="#Question1" class="qph">Bcom</a>
     <a href="#Question1" class="qpi">BA</a>
     <a href="#Question1" class="qpj">MCA</a>
     <a href="#Question1" class="qpk">MBA</a> <br/>
     <i style="color: red;margin-left: 5%">General ></i>
     <a href="#Question1" class="qpl">IAS</a>
     <a href="#Question1" class="qpm">UPSC</a>
     <a href="#Question1" class="qpn">Railway</a>
     <a href="#Question1" class="qpo">SSC</a><hr>
     <?php include 'qdisplay.php'; ?>
  </div>




<!-- code for display tutorials -->
    <div class="tut1" id="tut1">
        <p style="font-size: 60px;color: black;margin: 80px 0px 0px 0%;text-align: center;">Available <small style="font-size: 50px;color: silver;">Course Tutorial </small><hr></p>
        <a href="#tut1" class="ta">HTML</a>
        <a href="#tut1" class="tb">CSS</a>
        <a href="#tut1" class="tc">MySQL</a>
        <a href="#tut1" class="td">PHP</a>
        <a href="#tut1" class="te">JavaScript</a>
        <a href="#tut1" class="tf">C</a>
        <a href="#tut1" class="tg">C++</a>
        <a href="#tut1" class="th">JAVA</a><hr>
        <?php include 'tdisplay.php';?>
    </div>



<!-- code for about us -->
  <div id="about" style="border: solid green;">
        <div style="background-color: silver;">
        <p style="font-size: 60px;color: black;margin: 50px 0px 0px 0%;text-align: center;">About_Us <hr></p>
        <p style="font-size: 20px;text-align: center;"> Since the very beginning, we care about giving something back to the community. We take our first core value 'Make our world a little better' seriously, which is why we contribute to those who need it most. Studyportals supports Knowledge for Children as well as other education-related charities and projects. Our mission is to invest in quality education for children in rural areas by building a platform that operates professionally and emphasises on results. We focus on promoting the involvement and self-reliance of the local community by a financial co-investment concept. The long-term goal: improving the quality of primary education and giving to as many children as possible, a better future. <br> Studyportals is the global study choice platform. Empowering the world to choose education.</p>
        <img style="width: 100%;height: 500px;" src="image/j1.jpeg">
        <div class="s">
          <p style="font-size: 50px;color: red;">Our Services.<hr style="margin-top: -50px"></p>
          <h4>Come First, Learn After! </h4>
          <p>This site is fully free of cost for the student they can whatch the tutorial very easily and read the book and question paper and download it.<br>We are providing best tutorial from beginning.</p>    
        </div>

        <div class="info-about">
          <h4>You'll love all the amenities we offer!</h4>
          <p>Lorem ipsum dolor sit amet, ut magna aliqua. </p>
        </div><br/><br/><br/><br/>
        </div>
    </div>



<!-- code for contact us -->
    <div id="contact1" style="background-image: url(image/cont.jpg)">
        <p style="font-size: 60px;color: red;margin: 70px 0px 0px 0%;text-align: center;">Contact_Us <hr></p>
        <div class="s12">
          <?php
            $ad="select* from admin";
            $add=mysqli_query($con,$ad);
            $aresult=mysqli_fetch_assoc($add);
          ?>
          <p style="text-align: center;font-size: 26px;color: red;">Contect With Us<hr style="margin-top: -20px"></p>
          <th>Phone:</th>
          <td><?php echo "$aresult[admin_cont]";?></td><br/><br/>
          <th>Email:</th>
          <td><?php echo "$aresult[admin_email]";?></td><br/><br/>
          <th>Address:</th>
          <td>Soldavenahalli,bangalore,560107</td>
        </div>
        <div class="s1" style="margin-left: 50%;background-color: silver">
          <form action="message.php" method="POST" autocomplete="off">
            <p style="color: red;font-size: 30px;"><?php echo($email) ?></p>
            <select name="sub" required>
              <option value selected disabled>what is your message about?</option>
              <option value="I Found Mistake in Book">I Found Mistake in Book</option>
              <option value="I Found Mistake in Question bank">I Found Mistake in Question bank</option>
              <option value="I Found Mistake in Tutorial">I Found Mistake in Tutorial</option>
              <option value="I Found Error/Mistake in Website">I Found Error/Mistake in Website</option>
              <option value="I Have a suggestion">I Have a suggestion</option>
              <option value="Other">Other</option>
            </select><br/><br/>
            <textarea style="border-radius:20px;text-align: center;font-size: 20px" cols="30" rows="5" name="msg" placeholder ="Message" required></textarea><br/><br/>
            <button style="height: 10%;width: 30%;background-color: gray;border-radius: 20px;"><input style="height: 90%;width: 90%;background-color: red;color: white;border-radius: 20px;font-size: 30px" type="submit" name="submit" value="Send"></button>
          </form>   
        </div>
        <p style="background-color: blue;margin-top: 20%;height: 40px;font-size: 30px;color: white;text-align: center;position: absolute;width: 100%;"># 2019 Study Portal.Design by Beingmanishray.</p>
    </div>
    
</body>
</html>