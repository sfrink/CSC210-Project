<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>FAQ</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link href="home.css" type="text/css" rel="stylesheet" />

	<script type="text/javascript">
	function drop_down(stuff) {
		var fubar = document.getElementById(stuff);
		if (fubar.style.display != 'block') {
			fubar.style.display = 'block';
		}
		else {
			fubar.style.display = 'none';
		}
	}
	</script>

</head>

<body>

	<?php include 'header.php'; ?>
	
	<div id="content_frame">
	<h2>FAQ</h2>
	<div id="content">
	
		Click on any question to view an answer.

		<div class="faq" onclick="drop_down('q1')" style="font-weight: bold; cursor: hand; cursor: pointer; padding: 20px 5px 5px 5px;">
		What is Roc 'N' Roll?
			<div id="q1" class="answer" style="display:none; font-weight: normal; font-style: italic; padding: 5px 25px;">
			Roc 'N' Roll is a web app created to help bands and music groups at the University of Rochester and the Rochester, NY area with publicizing upcoming events and shows. 
			</div>
		</div>

		<div class="faq" onclick="drop_down('q2')" style="font-weight: bold; cursor: hand; cursor: pointer; padding: 5px;">
		How do I create an account?
			<div id="q2" class="answer" style="display:none; font-weight: normal; font-style: italic; padding: 5px 25px;">
			On the menu at the top of any page, click on "Sign In / Sign Up". Then, instead of logging in, click on "Sign up if you don't have an account yet". At the next page, enter a username, password, and enter some information about your band. Finally, hit "submit" at the bottom of the page. 
			</div>
		</div>

		<div class="faq" onclick="drop_down('q3')" style="font-weight: bold; cursor: hand; cursor: pointer; padding: 5px;">
		How do I sign in?
			<div id="q3" class="answer" style="display:none; font-weight: normal; font-style: italic; padding: 5px 25px;">
			On the menu at the top of any page, click on "Sign In / Sign Up". At the next page, enter your username and password.
			</div>
		</div>

		<div class="faq" onclick="drop_down('q4')" style="font-weight: bold; cursor: hand; cursor: pointer; padding: 5px;">
		How do I see my band page?
			<div id="q4" class="answer" style="display:none; font-weight: normal; font-style: italic; padding: 5px 25px;">
			On the menu at the top of any page, click on "My Band". This will take you to your band page.
			</div>
		</div>

		<div class="faq" onclick="drop_down('q5')" style="font-weight: bold; cursor: hand; cursor: pointer; padding: 5px;">
		Can I see the pages of other bands?
			<div id="q5" class="answer" style="display:none; font-weight: normal; font-style: italic; padding: 5px 25px;">
			On the menu at the top of any page, click on "Browse Bands".
			</div>
		</div>

		<div class="faq" onclick="drop_down('q6')" style="font-weight: bold; cursor: hand; cursor: pointer; padding: 5px;">
		Where can I see a list of upcoming events?
			<div id="q6" class="answer" style="display:none; font-weight: normal; font-style: italic; padding: 5px 25px;">
			A list is provided on the home page.
			</div>
		</div>

		<div class="faq" onclick="drop_down('q7')" style="font-weight: bold; cursor: hand; cursor: pointer; padding: 5px;">
		How do I edit my band page?
			<div id="q7" class="answer" style="display:none; font-weight: normal; font-style: italic; padding: 5px 25px;">
			Insert answer here
			</div>
		</div>

		<div class="faq" onclick="drop_down('q8')" style="font-weight: bold; cursor: hand; cursor: pointer; padding: 5px;">
		How can I create a new event?
			<div id="q8" class="answer" style="display:none; font-weight: normal; font-style: italic; padding: 5px 25px;">
			Insert answer here
			</div>
		</div>

		<div class="faq" onclick="drop_down('q9')" style="font-weight: bold; cursor: hand; cursor: pointer; padding: 5px;">
		I still need help! My problem is still unresolved, or I have a question that is not listed here.
			<div id="q9" class="answer" style="display:none; font-weight: normal; font-style: italic; padding: 5px 25px;">
			We would be happy to help you out. If a problem is still unresolved, or if you have a question that is not mentioned here, send an email to alee52 <at> u <dot> rochester <dot> edu
			</div>
		</div>

	</div>
	</div>
	
</body>

</html>