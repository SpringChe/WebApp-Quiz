<!DOCTYPE html>
<html lang="en">
<?php
	session_start();

?>
<head>

    <title>quiz</title>
    <link rel="stylesheet" href="profile.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/bebas" type="text/css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <meta charset="UTF-8">

</head>

<body>

<!--*********************HOME section*********************-->

    <section id="home">
      <!--header_menu-->
      <header>
          <div class="inner_header">
            <ul id="menu">
                <li><a href="#home">.<?php echo $_SESSION["uname"]; ?>()</a></li>
                <li><a href="#quizzes">.quizzes()</a></li>
                <li><a href="#score">.score(<?php
												$uname=$_SESSION['uname'];
												$servername = "localhost";
												$username ="root";
												$password ="usbw";
												$dbname = "kviz";
												$conn=mysqli_connect($servername,$username,$password,$dbname);
												mysqli_query($conn,"SET NAMES UTF8");
													if(!$conn)
														{
																die("Connection failed!".mysqli_error());

														}

													else {
															mysqli_set_charset($conn,"UTF-8");
															$sql = "SELECT * FROM korisnici WHERE User_Name='$uname'";
															$row=mysqli_fetch_row(mysqli_query($conn,$sql) );
															$score=$row[3];}
															echo $row[3];
											?>)</a></li>
                <li><a href="index.php">.logout()</a></li>
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
          <h2>.Welcome(<?php echo $_SESSION["uname"]; ?>)</h2><br>
          <p>Ready_To_Explore?</p><br>
          <a href="#quizzes">.explore()</a>
        </div>
      </div>

    </section>


<!--*********************QUIZ section*********************-->

    <section id="quizzes">
      <!--quizzes-->

      <div class="logregbox">
        <div class="main">
          <div class="quiz-box">
            <div class="icons">
              <ul>
                <li><a href="quizzes/1/one.php">?</a></li>
                <li><a href="quizzes/2/twoPHP.php">?</a></li>
                <li><a href="quizzes/3/threeS21.php">?</a></li>
                <li><a href="quizzes/4/fourIphone.php">?</a></li>
                <li><a href="quizzes/5/fiveHTMLCSS.php">?</a></li>
              </ul>
            </div>
            <div class="icons2">
              <ul>
                <li><a href="quizzes/1/one.php">?</a></li>
                <li><a href="quizzes/2/twoPHP.php">?</a></li>
                <li><a href="quizzes/3/threeS21.php">?</a></li>
                <li><a href="quizzes/4/fourIphone.php">?</a></li>
                <li><a href="quizzes/5/fiveHTMLCSS.php">?</a></li>
              </ul>
            </div>
            <div class="icons3">
              <ul>
                <li><a href="quizzes/1/one.php">?</a></li>
                <li><a href="quizzes/2/twoPHP.php">?</a></li>
                <li><a href="quizzes/3/threeS21.php">?</a></li>
                <li><a href="quizzes/4/fourIphone.php">?</a></li>
                <li><a href="quizzes/5/fiveHTMLCSS.php">?</a></li>
              </ul>
            </div>


						<div class="line">
            	<h1>.pick a quiz</h1>
            </div>
          <div/>
        </div>
      </div>



      <div class="observer">
        <div class="eyes">
          <div class="eye">
            <div class="ball"></div>
          </div>
          <div class="eye">
            <div class="ball"></div>
          </div>
        </div>
        <script>
          var balls = document.getElementsByClassName("ball");
          document.onmousemove = function(){
            var x = event.clientX * 100 / window.innerWidth + "%";
            var y = event.clientY * 100 / window.innerHeight + "%";
            //event.clientX => get the horizontal coordinate of the mouse
            //event.clientY => get the Vertical coordinate of the mouse
            //window.innerWidth => get the browser width
            //window.innerHeight => get the browser height

            for(var i=0;i<2;i++){
              balls[i].style.left = x;
              balls[i].style.top = y;
              balls[i].style.transform = "translate(-"+x+",-"+y+")";
            }
          }
        </script>
      </div>



      <div class="arrows">
        <div class="up">
          <a href="#home">.up</a>
        </div>
        <div class="down">
          <a href="#score">.down</a>
        </div>
      </div>

    </section>

<!--*********************SCORE section*********************-->

    <section id="score">



						<div class="score-box">
							<div class="square2">
				        <span></span>
				        <span></span>
				        <span></span>
				        <div class="content2">
				          <h2>Your_Score</h2><br>
				          <p>.score(<?php
												$uname=$_SESSION['uname'];
												$servername = "localhost";
												$username ="root";
												$password ="usbw";
												$dbname = "kviz";
												$conn=mysqli_connect($servername,$username,$password,$dbname);
												mysqli_query($conn,"SET NAMES UTF8");
													if(!$conn)
														{
																die("Connection failed!".mysqli_error());

														}

													else {
															mysqli_set_charset($conn,"UTF-8");
															$sql = "SELECT * FROM korisnici WHERE User_Name='$uname'";
															$row=mysqli_fetch_row(mysqli_query($conn,$sql) );
															$score=$row[3];}
															echo $row[3];
											?>)</p><br>
				        </div>
				      </div>
						</div>



      <div class="arrows">
        <div class="up">
          <a href="#quizzes">.up</a>
        </div>
        <div class="down">
          <a href="#home">.go_all_the_way_Up</a>
        </div>
      </div>


    </section>


</body>

</html>
