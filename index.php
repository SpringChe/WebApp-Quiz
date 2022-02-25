<!DOCTYPE html>
<?php
	session_start();
?>
<html lang="mk">

<head>

    <title>quiz</title>
    <link rel="stylesheet" href="style.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/bebas" type="text/css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
	<meta http-equiv="content-type" content-type="text/html" charset="utf-8">

</head>

<body>

<!--*********************HOME section*********************-->

    <section id="home">
      <!--header_menu-->
      <header>
          <div class="inner_header">
            <ul id="menu">
                <li><a href="#home">.home()</a></li>
                <li><a href="#logreg">.login()</a></li>
                <li><a href="#about">.about()</a></li>
                <li><a href="#team">.our_team()</a></li>
                <li><a href="#contact">.contact_us()</a></li>
								<br><br>
								<!--dark_mode-->
								<img src="icons/moon.png" alt="" id="icon">
	              <script type="text/javascript">
	                var dark = document.getElementById("icon");

	                icon.onclick = function(){
	                  document.body.classList.toggle("dark-mode");
											if (document.body.classList.contains("dark-mode")) {
												icon.src = "icons/sun.png";
											}
											else {
												icon.src = "icons/moon.png";
											}
	                }
	              </script>
								<!--dark_mode-->
            </ul>
          </div>
      </header>




      <div class="square">
        <span></span>
        <span></span>
        <span></span>
        <div class="content">
          <h2>Hello f.r.i.e.n.d {}</h2><br>
          <p>are you Ready() to .test Your knowledge? let's see how well your astrocytes serve you...</p><br>
          <a href="#logreg">Start_your_Journey</a>
        </div>
      </div>

    </section>

<!--*********************LOG_REG section*********************-->

    <section id="logreg">
      <!--log_reg form-->
      <div class="logregbox">
        <div class="main">
    			<div class="form-box">
					<div class="button-box">
						<div id="btn"></div>
						<button type="button" class="toggle-btn" onclick="login()" name="logBut">.login()</button>
						<button type="button" class="toggle-btn" onclick="register()" name="regBut">.register()</button>
					</div>
    			<div/>

    			<br> <br>

    			<form id="login" class="input-group" action="" method="POST" >
    				<input type="text" class="input-field" placeholder="username" name="uname1" required>
    				<input type="password" class="input-field" placeholder="password" name="pass1" required> <br> <br> <br>
    				<button type="submit" class="submit-btn" name="lBut">.login()</button>
    			</form>

    			<form id="register" class="input-group" action="" method="POST">
    				<input type="text" class="input-field" placeholder="username" name="uname" required>
    				<input type="password" class="input-field" placeholder="password" required name="pass"> <br> <br> <br>
    				<button type="submit" class="submit-btn" name="rBut">.register()</button>
    			</form>

    		</div>
    		<script>
    			var x=document.getElementById("login");
    			var y=document.getElementById("register");
    			var z=document.getElementById("btn");

    			function register(){
    				x.style.left="-450px";
    				y.style.left="50px";
    				z.style.left="150px";
    			}
    			function login(){
    				x.style.left="50px";
    				y.style.left="450px";
    				z.style.left="0px";
    			}
    		</script>
      </div>

      <div class="arrows">
        <div class="up">
          <a href="#home">.up</a>
        </div>
        <div class="down">
          <a href="#about">.down</a>
        </div>
      </div>
    </section>

<!--*********************ABOUT section*********************-->

    <section id="about">

      <div class="logregbox"> <!--name of class is the same as logreg, just so it takes the same values and style-->
        <div class="main">
          <div class="about-box">

            <h1>About_Us</h1><br><br>
            <p>{</p>
              <p>We are designers, programmers, tinkerers, writers, speakers, bikers, engineers, runners, developers, gamers, chefs, analysts, hikers, musicians, videomakers, photographers, readers, travelers, hard workers, students, f.r.i.e.n.d.s, a_team_of_computer_engineers() who strive to create a simple, minimalistic easy to use, free and fun online educational website available for everyone</p>
            <p>}</p>

        </div>
        </div>
      </div>


      <div class="arrows">
        <div class="up">
          <a href="#logreg">.up</a>
        </div>
        <div class="down">
          <a href="#team">.down</a>
        </div>
      </div>


    </section>

<!--*********************TEAM section*********************-->

    <section id="team">


      <div class="logregbox"> <!--name of class is the same as logreg, just so it takes the same values and style-->
        <div class="main">
          <div class="team-box">

            <div id="outer-container">
              <div class="main-content">
                <div class="member">
                    <img src="images/v.png" alt="">
                    <h2>.VesnaHristovska()</h2>
                    <p>system and web analyst, back-end developer, tester, UX designer</p>
                </div>
                <div class="member">
                    <img src="images/j.png" alt="">
                    <h2>.JovanaJordanovska()</h2>
                    <p>system and web analyst, front-end developer, tester, UI designer</p>
                </div>
                <div class="member">
                    <img src="images/i.png" alt="">
                    <h2>.IvonaVarelovska()</h2>
                    <p>project manager, development leader, web designer, full stack developer</p>
                </div>
              </div>
              <div class="parallax-content parallax">
                <img src="images/b1.png" alt="">
                <img src="images/b2.png" alt="">
                <img src="images/b1.png" alt="">
              </div>
            </div>

            <script type="text/javascript">
              // Get all the elements to be parallaxed
              const parallaxElements = document.querySelectorAll('.parallax')

              // The parallax function
              const parallax = elements => {
                if ('undefined' !== elements && elements.length > 0) {
                  elements.forEach( element => {
                    let y = window.innerHeight - element.getBoundingClientRect().top
                    if (y > 0) {
                      element.style.transform = 'translate3d(0, -' + (0.15 * y) + 'px ,0)'
                    }
                  })
                }
              }

              //If element is in viewport, set its position
              parallax(parallaxElements)

              //Call the function on scroll
              window.onscroll = () => {
                parallax(parallaxElements)
              }
            </script>

          </div>
        </div>
      </div>

      <div class="arrows">
        <div class="up">
          <a href="#about">.up</a>
        </div>
        <div class="down">
          <a href="#contact">.down</a>
        </div>
      </div>


    </section>

<!--*********************CONTACT section*********************-->

    <section id="contact">

      <div class="logregbox"> <!--name of class is the same as logreg, just so it takes the same values and style-->
        <div class="main">


					<center>
						<div class="contact-box">
							<div class="info-content">
								<h1>.Contact_Information()</h1>
								<div class="info">
										<h2>.VesnaHristovska()</h2>
										<h2>{</h2>
										<p><b>.Email(</b><i>vesna.102301@student.ugd.edu.mk</i><b>)</b></p>
										<p><b>.Phone(</b><i>+389 72 520 583</i><b>)</b></p>
										<h2>}</h2>
								</div>
								<div class="info">
										<h2>.JovanaJordanovska()</h2>
										<h2>{</h2>
										<p><b>.Email(</b><i>jovana.102350@student.ugd.edu.mk</i><b>)</b></p>
										<p><b>.Phone(</b><i>+389 78 623 901</i><b>)</b></p>
										<h2>}</h2>
								</div>
								<div class="info">
										<h2>.IvonaVarelovska()</h2>
										<h2>{</h2>
										<p><b>.Email(</b><i>ivona.102321@student.ugd.edu.mk</i><b>)</b></p>
										<p><b>.Phone(</b><i>+389 75 520 466</i><b>)</b></p>
										<h2>}</h2>
								</div>
							</div>
					</center>



						<!--
            <div class="contact-section">
              <div class="inner-width">
                <h1>Get_in_touch_with_us</h1><br><br><br>
                <form class="" action="contact.php" method="post">
                  <input type="text" class="name" placeholder="Your Name">
                  <input type="email" class="email" placeholder="Your Email">
                  <textarea name="message"rows="1" placeholder="Message" class="message"></textarea>
                  <button type="submit" name="submit">.send()</button>
                </form>
              </div>
            </div>
					-->


          </div>
        </div>
      </div>

      <div class="arrows">
        <div class="up">
          <a href="#team">.up</a>
        </div>
        <div class="down">
          <a href="#home">.go_all_the_way_Up</a>
        </div>
      </div>



    </section>


</body>

</html>


<?php

  if(isset($_POST['rBut']))
  {
    $servername = "localhost";
    $username ="root";
    $password ="usbw";
    $dbname = "kviz";
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
	$hide_pass=hash('md5',$pass.$uname);
    $conn=mysqli_connect($servername,$username,$password,$dbname);
	mysqli_query($conn,"SET NAMES UTF8");
    if(!$conn)
    {
      die("Connection failed!".mysqli_error());

    }
    else {
		mysqli_set_charset($conn,"UTF-8");
      $sql = "INSERT INTO korisnici(User_Name, Password)
          VALUES('$uname','$hide_pass')";
      if(mysqli_query($conn, $sql))
      {
		$_SESSION['uname']=$uname;
        echo '<script type="text/JavaScript">
            window.location.replace("profile.php");
            </script>' ;
      }
      else
      {

        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      mysqli_close($conn);
    }




  }
  elseif(isset($_POST['lBut'])){
    $servername = "localhost";
    $username ="root";
    $password ="usbw";
    $dbname = "kviz";
    $uname=$_POST['uname1'];
    $pass=$_POST['pass1'];
	$hided_pass=hash('md5',$pass.$uname);
    $conn=mysqli_connect($servername,$username,$password,$dbname);
	mysqli_query($conn,"SET NAMES UTF8");
    if(!$conn)
    {
      die("Connection failed!".mysqli_error());

    }
    else {
		mysqli_set_charset($conn,"UTF-8");
      $sql = "SELECT * FROM korisnici WHERE User_Name='$uname' AND Password='$hided_pass'";
	  $row=mysqli_fetch_row(mysqli_query($conn,$sql) );
      if(mysqli_query($conn, $sql)&&$row[1]!="" && $row[2]!="")
      {
		$_SESSION['uname']=$row[1];
        echo '<script type="text/JavaScript">
            window.location.replace("profile.php");
            </script>' ;
      }
      else
      {

        echo '<script>alert("Wrong Username or Password, try again!")</script>';
      }
      mysqli_close($conn);
    }

  }


?>
