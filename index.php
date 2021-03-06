﻿<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Portfolio</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/animate.css">
	  <script src="js/wow.min.js"></script>
	  <script>
	    new WOW().init();
	  </script>
</head>
<body>
<header id="home">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-lg-12 head parallax-window" data-parallax="scroll" data-speed="0.3" data-image-src="/img/bg-head.png" >
				<div class="wow bounceInDown">
					<div class="header-menu">
						<ul>
							<li><a href="#home" data-target="anchor" >Home</a></li>
							<li><a href="#about-me" data-target="anchor">About Me</a>
							<li><a href="#works" class="active" data-target="anchor">My Works</a></li>
							<li><a href="#contact" data-target="anchor">Contact Me</a></li>
						</ul>
					</div>
					<hr class="header-menu_border">
				</div>
				<h1 class="header-text header-text__big wow slideInDown">Sivashchenko Andrey</h1>
				<h3 class="header-text header-text__small wow slideInUp">I'm front-end developer</h3>
				<div class="block wow fadeIn" data-wow-delay="0.6s">
					<div class="header-icon">
						<img class="header-icon-html" src="img/header_icon_html.png">
						<img class="header-icon-css" src="img/header_icon_css.png">
						<img class="header-icon-js" src="img/header_icon_js.png">
						<img class="header-icon-bt" src="img/header_icon_bt.png">
					</div>
				</div>
			</div>			
		</div>
	</div>
</header>
<section id="about-me">
	<div class="container-fluid">
		<div class="row">
			<div class="title-section">
				<div class="border-title wow fadeIn">
					<hr class="left-hr">
						<h3>Who I am?</h3>
					<hr class="right-hr">
				</div>
			</div>
			<div class="selector-menu">
				<div class="circle_1 circle_active"></div>
				<div class="circle_2"></div>
				<div class="circle_3"></div>
			</div>
				<div class="about-me-content">
					<div class="about-me-photo wow fadeInDown"></div>
					<div class="col-md-4 col-md-offset-2 about-me-text about-me-text__bio wow fadeInLeft">
					<img src="img/icon.png">
					<h2 class="title"> My Biography</h2>
					<hr>
					<h5>Start</h5>
					<p id="selectors__start"><img src='img/img03.png'></p>
					<section class="section-about-me">
						<span class="section-aboutMe-title">
							<img class="bio-icon" src='img/icon-about-me-bio.png'>
							<h3>About Me</h3>
						</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum officiis molestiae harum sequi pariatur, unde ut molestias, repellat velit quod magnam quisquam minus corporis ipsa. Accusantium aliquam sapiente cupiditate accusamus quia autem eos eaque. Quaerat, iusto, optio. Ullam sed repudiandae, maxime minus placeat eaque cumque reprehenderit consequuntur ex quis voluptatem.</p>
					</section>

					<p id="selectors"><img src='img/img06.png'></p>
					
					<section class="section-about-me">
						<span class="section-aboutMe-title">
							<img class="bio-icon" src='img/icon-university.png'>
							<h3>University</h3>
						</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis mollitia odio consequuntur eligendi quasi, hic modi recusandae enim voluptas voluptatem voluptatibus, temporibus id, culpa suscipit.</p>
					</section>
					<p id="selectors"><img src='img/img05.png'></p>

					<section class="section-about-me">
						<span class="section-aboutMe-title">
							<img class="bio-icon" src='img/icon-hobbies-bio.png'>
							<h3>Hobbies</h3>
						</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, eos?</p>
					</section>

					<p id="selectors"><img src='img/img06.png'></p>

					<section class="section-about-me">
						<span class="section-aboutMe-title">
							<img class="bio-icon" src='img/icon-skills-bio.png'>
							<h3>My Skills</h3>
						</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolor fugit quod suscipit, accusamus exercitationem.</p>
					</section>
					<p id="selectors__finish"><img src='img/img04.png'></p>
					<h5>End</h5>
				</div>
				<div class="col-md-4 col-md-offser-right-2 about-me-text about-me-text__skills wow fadeInUp">
				<img src="img/skills-icon.png">
				<h2 class="title"> My Skills</h2>
					<div class="my-skillbar">
						<div class="skillbar" data-percent="75%">
							<div class="skillbar-title" style="background:#e55126;"><span>HTML5</span></div>
							<div class="skillbar-bar" style="background:#e55126;"></div>
							<div class="skillbar-bar-precent">75%</div>
						</div>
						<div class="skillbar" data-percent="70%">
							<div class="skillbar-title" style="background:#00a8ff"><span>CSS3</span></div>
							<div class="skillbar-bar" style="background:#00a8ff"></div>
							<div class="skillbar-bar-precent">65%</div>
						</div>
						<div class="skillbar" data-percent="40%">
							<div class="skillbar-title" style="background:#f2c126"><span>JS</span></div>
							<div class="skillbar-bar" style="background:#f2c126"></div>
							<div class="skillbar-bar-precent">40%</div>
						</div>
						<div class="skillbar" data-percent="60%">
							<div class="skillbar-title" style="background:#161e4d"><span>Photoshop</span></div>
							<div class="skillbar-bar" style="background:#161e4d"></div>
							<div class="skillbar-bar-precent">60%</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
</section>
<section id="works">
	<div class="container-fluid my-works parallax-window" data-parallax="scroll" data-speed="0.3" data-image-src="/img/bg-work.png">
		<div class="row">
			<div class="title-section-works ">
				<div class="border-title-works wow fadeIn ">
					<hr class="left-hr-works">
						<h3>My Wokrs</h3>
					<hr class="right-hr-works">
				</div>
			</div>
			<div class="selector-menu">
				<div class="circle_1 wow fadeInLeft"></div>
				<div class="circle_2 circle_active"></div>
				<div class="circle_3 wow fadeInRight"></div>
			</div>
			<div class="col-md-4 col-lg-4 img-center wow slideInDown">
			<div class="grid">
			<div class="border-works-image">
				<figure class="effect-apollo">
					<img src="img/works_1.png"/>
						<figcaption>
							<h2>Work<span>1</span></h2>
							<p>Sivaschenko Andrey</p>
							<a href="#">View more</a>
						</figcaption>			
						</figure>
				</div>	
				<div class="border-works-image">
				<figure class="effect-apollo">
					<img src="img/works_1.png"/>
						<figcaption>
							<h2>Work<span>4</span></h2>
							<p>Sivaschenko Andrey</p>
							<a href="#">View more</a>
						</figcaption>			
				</figure>
				</div>
			</div>
			
			</div>
			<div class="col-md-4 col-lg-4 img-center wow fadeIn" data-wow-delay="0.2s">
				<div class="grid">
			<div class="border-works-image">
				<figure class="effect-apollo">
					<img src="img/works_1.png"/>
						<figcaption>
							<h2>Work<span>2</span></h2>
							<p>Sivaschenko Andrey</p>
							<a href="#">View more</a>
						</figcaption>			
						</figure>
				</div>	
				<div class="border-works-image">
				<figure class="effect-apollo">
					<img src="img/works_1.png"/>
						<figcaption>
							<h2>Work<span>5</span></h2>
							<p>Sivaschenko Andrey</p>
							<a href="#">View more</a>
						</figcaption>			
				</figure>
				</div>
			</div>
			</div>

			<div class="col-md-4 col-lg-4 img-center wow slideInUp" data-wow-delay="0.3s">
				<div class="grid">
			<div class="border-works-image">
				<figure class="effect-apollo">
					<img src="img/works_1.png"/>
						<figcaption>
							<h2>Work<span>3</span></h2>
							<p>Sivaschenko Andrey</p>
							<a href="#">View more</a>
						</figcaption>			
						</figure>
				</div>	
				<div class="border-works-image">
				<figure class="effect-apollo">
					<img src="img/works_1.png"/>
						<figcaption>
							<h2>Work<span>6</span></h2>
							<p>Sivaschenko Andrey</p>
							<a href="#">View more</a>
						</figcaption>			
				</figure>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>
<footer id="contact">
	<div class="container">
		<div class="row">
			<div class="title-section">
				<div class="border-title border-title__footer wow fadeIn">
					<hr class="left-hr left-hr__footer ">
						<h3>Contact Me</h3>
					<hr class="right-hr right-hr__footer">
				</div>
			</div>
			<div class="selector-menu">
				<div class="circle_1 circle-1__footer wow fadeInLeft"></div>
				<div class="circle_2 circle-2__footer "></div>
				<div class="circle_3 circle-3__footer circle_active__footer wow fadeInRight"></div>
			</div>
			<div class="col-md-4 footer-title">
				<h2>My mobile phone</h2>
				<h3>+380936060034</h3>

				<h2>My Email</h2>
				<h3>sivachenkoar@gmail.com</h3>
			</div>
			<div class="col-md-4 footer-title">
				<h2>Write Me</h2>
				<form method="POST" action="submit.php" class="send-me">
					<input type="text" name="Name" placeholder="Name">
					<input type="email" name="Email" placeholder="Email">
					<textarea placeholder="Messages"></textarea>
					<div class="send-button">
							<hr class="send-button__lefthr">
							<input id="submit" type="submit" value="Send">
							<hr class="send-button__righthr">
					</div>

					<div class="copyright">
						<h4>Sivashchenko Andrey © 2017</h4>
					</div>
				</form>
			</div>
			<div class="col-md-4 footer-title">
				<h2>Social Networks</h2>
				<div class="social">
					<a href="#" class="soc-vk">&nbsp;</a>
					<a href="#" class="soc-fb">&nbsp;</a>
					<a href="#" class="soc-g">&nbsp;</a>
				</div>
			</div>
		</div>
	</div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/parallax.min.js"></script>
<script
  src="http://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="js/skills.js"></script>
  <script src="js/scroll.js"></script>
</body>
</html>


