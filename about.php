<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<style>
input[type=text], select,input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
	margin:auto;
	width:50%;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #33333396;
}

ul li{
  float: left;
}

ul li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

ul li a:hover {
  background-color: #111;
}
.bg {
  background-image: url("bg.jpg"); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  background-position: fixed; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: 100% 100%; /* Resize the background image to cover the entire container */
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
<body class="bg" style="min-height:600px">
<ul>
  <li><a href="index.php"  >Home</a></li>
  <li><a href="about.php" class="button">About</a></li>
</ul>
<div style='margin-top:2%'>
	 <h1 style="text-align:center;color:red">Contact Form to send E-Mail</h1>
	 <p style="text-align:justify;color:blue">About the project:</p>
	 <p style="text-align:justify;">Contact Form to send E-Mail through your website contact page is a web based project and it has been developed in PHP and user can manage message data, user data, mailbox name, domain name, subject and mail server address from this project. The main objective to develop sending mail without from address.
<br>
This is Contact Form to send E-Mail through your websites contact page. First, we should have an HTML form to collect data from users. And this data should be sent to PHP for sending email. This form should contain these elements, you can add more input fields also based on your requirement. I am using these fields Name input, email, subject, message. First I will send email, then I will extend the features of this contact form to save the submitted queries in database. If you want you can include captcha also for security purposes.
</p>
	 <p style="text-align:justify;color:blue">Requirement:</p>
	<ol>
		<li>Server</li>
		<li>Text Editor</li>
		<li>Cloud Computing</li>
	</ol>
</div>
	</body>
</html>