<?php include('includes/email.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>About Kyle W. Johnston, a Creative Director &amp; Designer in Kansas City</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="I am currently Director of Creative at Vista Outdoor, where I lead a talented team of creative professionals who collaborate with internal marketing and sales teams and partner with external agencies to deliver innovative marketing and advertising." />
	<meta name="keywords" content="kyle johnston, creative director, designer, resume, contact, web designer, kansas city, garmin, flow14, vista outdoor, deg digital" />
	<meta name="author" content="Kyle Johnston" />
	<link href="https://plus.google.com/103758963959064535451" rel="publisher" />
	<link href="http://www.kylewjohnston.com/about-kyle-johnston" rel="canonical" />
	<?php include('includes/head.php'); ?>
	<style type="text/css">
		 header h1 span a:link, 
		 header h1 span a:hover, 
		 header h1 span a:active, 
		 header h1 span a:visited, 
		 h1, h2 { color: #e14526; }
		.intro { background-color: #e14526; }
	</style>
</head>

<body>
	<div class="bold-border" id="border-top"></div><div class="bold-border" id="border-right"></div><div class="bold-border" id="border-left"></div><div class="bold-border" id="border-bottom"></div>
	<div class="intro dark">
		<?php include('includes/header-nav.php'); ?>
	</div>
	<div class="container items" style="margin-top:2em;">
		<div class="row">
			<div class="span6">
				<h2>Experience Summary</h2>
				<ul>
					<li>Twenty years of graphic design and marketing communications experience</li>
					<li>Eighteen years of web and interactive design experience</li>
					<li>Fifteen years of management and leadership experience</li>
					<li>Outstanding interpersonal and communication skills</li>
					<li>Extensive experience with creative and strategic planning</li>
					<li>Excellent collaboration and problem-solving abilities</li>
					<li><a href="//kylewjohnston.com/files/kyle-w-johnston-resume.pdf">Download my resume</a> and learn more about my career.</li>
				</ul>
				<p>Most recently, I served as the Director of Creative at Vista Outdoor, a leader in the outdoor sports and recreation markets. I led talented creative teams in three locations across the US, and collaborated with internal business partners and external agencies to produce a range of engaging marketing and advertising for 50 brands.</p>
				<p>Prior to Vista Outdoor, I was the Creative Director at DEG, a rapidly growing digital marketing and advertising agency based in Kansas City, and Garmin International. In my time at Garmin, I had a front row seat to its explosive growth – from a niche brand known for its early innovations in Marine, Aviation and Outdoor GPS electronics, to its current standing as a global brand. Similarly, the teams I led there grew – from a small, scrappy band of web designers to a team of over 50, comprised of art directors, copywriters, UX specialists, motion designers, photographers and videographers.</p>
				<p>My time at Garmin also gave me the opportunity to collaborate with other leading brands, including Red Bull, Burton, AT&amp;T, Asus, and more.</p>
			</div>
			<div class="span3">
				<h2>Key Skills</h2>
				<ul>
					<li>Art &amp; creative direction</li>
					<li>Web &amp; UX design, including front-end design and development of mobile, responsive, and desktop websites</li>
					<li>Branding &amp; visual identity</li>
					<li>Print design</li>
					<li>User interface design</li>
				</ul>
				<hr>
				<h2>Recent Writing</h2>
				<p><strong><a href="https://medium.com/@kylejohnston/30-days-to-app-deec90cfb4de">30 Days to App</a></strong></p>
				<hr>
				<h2>Speaking</h2>
				<p><strong>Freelance vs. Agency vs. Corporate</strong><br>Panel Moderator<br>AAF-KC Spark KC Career Conference<br>November 2015</p>
				<p><strong><a href="http://www.slideshare.net/flow14/herding-cats-53255448">Herding Cats</a></strong><br>Federal Reserve Bank - Web Developers, Editors &amp; Designers Conference<br>September 2015</p>
			</div>
			<div class="span3">
				<h2>Organizations</h2>
				<p><strong>AAF-KC</strong><br>
				2015&#8212;2016<br>Board of Directors<br>
				Vice President, Membership<br>
				2014&#8212;2015<br>Board of Directors<br>Corporate Membership Chair</p>
				<p><strong>AIGA KC</strong><br>2011&#8212;2013<br>Web Communications Chair</p>
				<p><strong>Johnson County Community College</strong><br>2010&#8212;Present<br>Dean&rsquo;s Advisory Board</p>
				<p><strong>Johnson County Community College</strong><br>2006&#8212;Present<br>Interactive Media Advisory Board</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<h2 class="span12">Say Hi</h2>
			<div class="span6">
				<a name="contact"></a>
				<h3>Email Me:</h3>
				<div id="contactWrapper" role="form">
					<?php if(isset($hasError)) { //If errors are found ?>
					<p class="error">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
					<?php } ?>
					
					<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
					<div class="success">
						<h3>Thank You</h3>
						<p>Thank you for contacting me, <?php echo $name;?>. Your email was successfully sent and I'll be in touch with you soon.</p>
					</div>
					<?php } ?>
					
					<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
						<div class="stage clear">
							<label for="contactname">Your Name: <em>*</em></label>
							<input type="text" name="contactname" id="contactname" value="" class="text required" role="input" aria-required="true" />
						</div>
						
						<div class="stage clear">
							<label for="email" >Your Email: <em>*</em></label>
							<input type="email" name="email" id="email" value="" class="text required email" role="input" aria-required="true" />
						</div>
						
						<div class="stage clear">
							<label for="subject">Subject: <em>*</em></label>
							<input type="text" name="subject" id="subject" value="" class="text required" role="input" aria-required="true" />
						</div>
						
						<div class="stage clear">
							<label for="message">Message: <em>*</em></label>
							<textarea rows="8" name="message" id="message" class="text required" role="textbox" aria-required="true"></textarea>
						</div>
						
						<p class="requiredNote"><em>*</em> Denotes a required field.</p>
						
						<input class="btn" type="submit" value="Send Message" name="submit" id="submitButton" title="Click here to submit your message!" />
					</form>
			</div>
			</div>
			<div class="span3">
				<h3>Call Me:</h3><h3>913-707-7442</h3>
			</div>
			<div class="span3">
				<p>Here are a few of the other places you can find me on the web:<br>
				<a class="linkedin" href="http://www.linkedin.com/in/kylejohnston">LinkedIn</a><br>
				<a class="twitter" href="https://twitter.com/creativecohort">Twitter</a><br>
				<a class="instagram" href="https://instagram.com/kylejohnston/">Instagram</a><br>
				<a class="dribbble" href="https://dribbble.com/kylejohnston">dribbble</a><br>
				<a class="github" href="https://github.com/kylejohnston">GitHub</a><br>
				<a class="behance" href="https://www.behance.net/KyleJohnston">Behance</a><br>
				<a class="flickr" href="http://www.flickr.com/photos/flow14/">Flickr</a><br>
				<a class="vsco" href="http://kylejohnston.vsco.co/">VSCO</a><br>
				<a class="vimeo" href="http://vimeo.com/flow14">Vimeo</a><br>
				</p>
			</div>
		</div>

	</div>
	<div class="container marketing">
		<?php include('includes/footer.php'); ?>
	</div>

	<?php include('includes/foot.php'); ?>
</body>
</html>