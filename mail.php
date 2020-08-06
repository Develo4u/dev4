<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title> Dev4u -Контакты </title>
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
			<li><a href="index.html">01. ГЛАВНАЯ</a></li>
			<li><a href="portfolio.html">02. ПОРТФОЛИО</a></li>
			<li><a href="services.html">03. УСЛУГИ</a></li>
			<li><a href="contact.html">04. КОНТАКТЫ</a></li>
		</ul>

		<ul class="lang">
			<li><img src="images/ico-l-ru.gif" width="32" height="19" alt="" /><br />RUS</li>
			<li><a href="index-en.html"><img src="images/ico-l-en.gif" width="32" height="19" alt="" /><br />ENG</a></li>
		</ul>

		<a class="logo-a" href="index.html"><img src="images/e.gif" width="160" height="203" alt="Develop for You" /></a>

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
								echo '<h1>Спасибо. Ваше сообщение отправлено. </h1>';
							}
							else
							{
								echo '<h1>Извините. Возникли проблемы при отправке Вашего сообщения. Попробуйте правильно заполнить все поля формы, или попробуйте связаться с нами другим способом.</h1>';
							}
						}
						else
						{
							echo '<h1>Извините. Возникли проблемы при отправке Вашего сообщения. Попробуйте правильно заполнить все поля формы, или попробуйте связаться с нами другим способом.</h1>';
						}

					?>
			</div>


			
			
			<div class="con-b"></div>

		</div><!-- end col-left -->
		
		<!-- col-right -->
		<div id="col-right">

			<h2>Новости</h2>
			<p class="date">05.06.2009</p>
			<p>Открылся наш сайт <strong>Develop for you</strong><br /></p>

		</div><!-- end col-right -->

		<div class="c-foot"></div>

	</div><!-- content -->
</div><!-- end main -->


<!--  footer -->
<div id="footer">
	<div class="f-line"></div>
	<div class="copyr">&copy;2009 Develop for you</div>
	<ul class="f-menu">
		<li><a href="index.html">Главная</a></li>
		<li class="sep">|</li>
		<li><a href="portfolio.html">Портфолио</a></li>
		<li class="sep">|</li>
		<li><a href="services.html">Услуги</a></li>
		<li class="sep">|</li>
		<li><a href="contact.html">Контакты</a></li>
	</ul>
</div><!-- end footer -->

</body>
</html>