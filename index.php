<!DOCTYPE HTML>
<html>
	<head>
		<title>Fitly</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <script type="text/javascript">
                function toggle_visibility(id1,id2) {
                var e = document.getElementById(id1);
                var f = document.getElementById(id2);
                if(e.style.display == 'block')
                    e.style.display = 'none';
                else
                    e.style.display = 'block';
                    f.style.display = 'none';
                }
        </script>
	</head>
	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">Fitly</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu"><span>Sign Up</span></a>
									<div id="menu">
										<ul>
											<li>I am a...</li>
											<li><a href="#" onclick="toggle_visibility('popups','popupt');"> Sweater</a></li>
                                            <div id="popups" style="display:none" class="popup-position">
                                                <div id="popup-wrapper">
                                                    <div id="popup-container">
                                                      <form action="php/sweater.php" method="post">
                                                          <br>
                                                          <input type="text" name="sname" placeholder="Name"><br>
                                                          <input type="email" name="semail" placeholder="Email"><br>
                                                          <input class="button fit special" type="submit" value="Submit">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
											<li><a href="#" onclick="toggle_visibility('popupt','popups');">Trainer</a></li>
                                            <div id="popupt" style="display:none" class="popup-position">
                                                <div id="popup-wrapper">
                                                    <div id="popup-container">
                                                      <form action="php/trainer.php" method="post">
                                                          <br>
                                                          <input type="text" name="tname" placeholder="Name"><br>
                                                          <input type="email" name="temail" placeholder="Email"><br>
                                                          <input class="button fit special" type="submit" value="Submit">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
											<!--<li><a href="#">Sign Up</a></li>
											<li><a href="#">Log In</a></li>-->
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Fitly</h2>
							<p>Train differently<br>
                                Train with Fitly<br></p>
							<ul class="actions">
								<li><a href="#" class="button special">Start Sweating</a></li>
							</ul>
						</div>
						<a href="#one" class="more scrolly">Learn More</a>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2 style="color: #000000;">Redefining "Personal"</h2>
								<p style="color: #000000;">The days of searching endlessly for the best trainers in your area are over. With Fitly, you can find the trainer you’re looking for in just about any field of fitness, so no matter what you’re interested in, there’s a personal trainer just around the corner.</p>
							</header>
							<ul class="icons major">
								<!--<li><span class="icon fa-diamond major style1"><span class="label">Lorem</span></span></li>-->
								<li><span class="icon fa-heart-o major style2"><span class="label">Ipsum</span></span></li>
								<!--<li><span class="icon fa-code major style3"><span class="label">Dolor</span></span></li>-->
							</ul>
						</div>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<!--<section class="spotlight">
							<div class="image"><img src="images/touch.png" alt="" /></div><div class="content">
								<h2>Healthier lifestyle at the touch of a button</h2>
								<p>You’ll work directly, one-on-one with the trainer of your choice.</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/comft.jpg" alt="" /></div><div class="content">
								<h2>Whenever, wherever with whoever</h2>
								<p>You decide where you want to meet your trainer - your home, the park, etc. Wherever you’re comfortable, your trainer will come to you. You can also bring a friend or even a set up a group session.</p>
							</div>
						</section>-->
						<section class="spotlight">
							<div class="image"><img src="images/floor.JPG" alt="" /></div><div class="content">
								<h2>Coming soon to Android</h2>
								<p>Our programmers are currently working on a final Android build. Developement for iOS starting soon.</p>
							</div>
						</section>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style3 special">
						<div class="inner">
							<header class="major">
								<h2>Changing the game</h2>
								<p>Fitly isn't your regular personal training service. We're changing the game by using new methods that we believe will work with today's technology. We're paving the way to a healthier lifestyle that everyone can benefit from.</p>
							</header>
							<ul class="features">
								<li>
                                <!-- <li class="icon fa-paper-plane-o"> -->
									<h3>Cut your costs</h3>
									<p>With Fitly, our single sessions start at just $30. That's half of what most traditional gyms are charging! </p>
								</li>
								<li>
                                <!-- <li class="icon fa-laptop"> -->
									<h3>On your time</h3>
									<p>Fit in sessions around your schedule; in the morning, afternoon, late in the evening - whenever!</p>
								</li>
								<li>
                                <!-- <li class="icon fa-code"> -->
									<h3>Bring a partner</h3>
									<p>Shared sessions are only $40 and are automatically split with you and your friend via our app. That's just $10 more.  </p>
								</li>
								<li>
                                <!-- <li class="icon fa-headphones"> -->
									<h3>Create a group</h3>
									<p>Turn any session into a group workout for just $10 per person after the flat rate of $30. The total cost per person will go down as more people join.</p>
								</li>
								<li>
                                <!-- <li class="icon fa-heart-o"> -->
									<h3>Train anywhere</h3>
									<p>You decide where you want to meet your trainer - your home, the park, etc. Wherever you’re comfortable, your trainer will come to you.</p>
								</li>
								<li>
                                <!-- <li class="icon fa-flag-o"> -->
									<h3>Find a local gym</h3>
									<p>We have a growing list of local gyms we're collaborating with that you and your trainer can utilize free of any extra charge.</p>
								</li>
							</ul>
						</div>
					</section>

                <!-- <li class="icon fa-paper-plane-o"> -->
                <!-- NEW -->
                <section id="two" class="wrapper alt style2">
                    <section class="spotlight">
							<div class="image"><img src="images/trainer.png" alt="" /></div><div class="content">
								<h2>Are you a trainer?</h2>
								<p>Join our Fitly team! Start your  booking clients near you. Fitly trainers earn $25 or more on every session.</p>
							</div>
						</section>
                </section>
				<!-- CTA -->
					<section id="cta" class="wrapper style4">
						<div class="inner">
							<header>
								<h2>Join our beta testing team</h2>
								<p></p>
							</header>
							<ul class="actions vertical">
								<li><a href="https://docs.google.com/forms/d/e/1FAIpQLSewevlXBIIvfddWd72pgzxy_CzQT5i-fQY-xdvx7kIK8jrSyg/viewform?c=0&w=1" class="button fit special">Sweater</a></li>
								<li><a href="https://docs.google.com/forms/d/e/1FAIpQLSewevlXBIIvfddWd72pgzxy_CzQT5i-fQY-xdvx7kIK8jrSyg/viewform?c=0&w=1" class="button fit">Trainer</a></li>
							</ul>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="https://twitter.com/myfitly" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://www.facebook.com/myfitly/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/myfitly/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="mailto:myfitly@gmail.com" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>Train differently</li><li>Train with Fitly</li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>