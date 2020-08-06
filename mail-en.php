<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title> Dev4u - Main Page </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
</head>

<body>
<!-- main -->
<div id="main">

	<!--  header  -->
	<div id="header">

		<div class="bg">
			<img src="images/he1.jpg" width="250" height="292" alt="" />
			<img src="images/he2.jpg" width="250" height="292" alt="" />
			<img src="images/he3.jpg" width="266" height="292" alt="" />
		</div>

		<ul class="h-menu">
			<li><a href="index-en.html">01. MAIN</a></li>
			<li><a href="portfolio-en.html">02. PORTFOLIO</a></li>
			<li><a href="services-en.html">03. SERVICES</a></li>
			<li><a href="contact-en.html">04. CONTACT US</a></li>
		</ul>

		<ul class="lang">
			<li><a href="index.html"><img src="images/ico-l-ru.gif" width="32" height="19" alt="" /><br />RUS</a></li>
			<li><img src="images/ico-l-en.gif" width="32" height="19" alt="" /><br />ENG</li>
		</ul>

		<a class="logo-a" href="index-en.html"><img src="images/e.gif" width="160" height="203" alt="Develop for You" /></a>

		<table class="contact">
			<tr>
				<td><img src="images/yahoo.jpg" width="37" height="33" alt="" /></td>
				<td>info.dev4you</td>
			</tr>
			<tr>
				<td><img src="images/gmail.jpg" width="45" height="33" alt="" /></td>
				<td><a href="mailto:info.dev4u@gmail.com">info.dev4u</a></td>
			</tr>
			<tr>
				<td><img src="images/googletalk.png" width="50" height="33" alt="" /></td>
				<td>info.dev4u</td>
			</tr>
			<tr>
				<td><img src="images/skype.jpg" width="33" height="33" alt="" /></td>
				<td>dev-4-u</td>
			</tr>
			<tr>
				<td><img src="images/icq.jpg" width="32" height="33" alt="" /></td>
				<td>473349058</td>
			</tr>
		</table>

	</div><!-- end header -->

	<!--  content  -->
	<div id="content">

		<!-- col-left -->
		<div id="col-left">
			
			<div class="con-t"></div>

			<div class="con-text">
					<?php 

						if ( ($_POST[name] != '') && ($_POST[email] != '') && ($_POST[text] != '') && ($_POST[captcha] != '') && ($_SESSION['secpic'] == strtolower($_POST['captcha']))  ) 
						{
							$to  = "info.dev4u@gmail.com";
							$subject = $_POST[subject];
							$headers  = "Content-type: text/html; charset=utf-8 \r\n";
							$headers .= "From: $_POST[email]\r\n"; 
							$message = "
							<html>
								<head>
									<title></title>
								</head>
								<body>
									<p>Name:". $_POST[name] ."</p>
									<p>Message" . $_POST[text] . "</p>
								</body>
							</html>";
							
							if (mail($to, $subject, $message, $headers))
							{
								echo '<h1>Your message sent</h1>';
							}
							else
							{
								echo '<h1>Some problem occured, while sending your message. Please, try again later</h1>';
							}
						}
						else
						{
							echo '<h1>Some problem occured, while sending your message. Please, try again later</h1>';
						}

					?>
</div>

			
			
			<div class="con-b"></div>

		</div><!-- end col-left -->
		
		<!-- col-right -->
		<div id="col-right">

			<h2>News</h2>
			<p class="date">05.06.2009</p>
			<p>We create our site <strong>Develop for you</strong><br /></p>

		</div><!-- end col-right -->

		<div class="c-foot"></div>

	</div><!-- content -->
</div><!-- end main -->


<!--  footer -->
<div id="footer">
	<div class="f-line"></div>
	<div class="copyr">&copy;2009 Develop for you</div>
	<ul class="f-menu">
		<li><a href="index-en.html">Main</a></li>
		<li class="sep">|</li>
		<li><a href="portfolio-en.html">Portfolio</a></li>
		<li class="sep">|</li>
		<li><a href="services-en.html">Services</a></li>
		<li class="sep">|</li>
		<li><a href="contact-en.html">Contact Us</a></li>
	</ul>
</div><!-- end footer -->

</body>
</html>