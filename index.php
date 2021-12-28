<?php
	$out="";
	$to = $content = $subject=$filename=$out1="";
	$from="renudhakshi0321@gmail.com";
	if(isset($_POST["send"]))
	{
		if(isset($_POST["email"]) && isset($_POST["content"]) && isset($_POST["subject"]) && is_uploaded_file($_FILES['Filedata']['tmp_name']))
		{
			$to = $_POST["email"];
			$content = $_POST["content"];
			$subject = $_POST["subject"];
			$uploadDir ="upload/";
			$file_ext=pathinfo($_FILES['Filedata']['name'], PATHINFO_EXTENSION);
				$filename=md5(uniqid()).".".$file_ext;
				$tempFile   = $_FILES['Filedata']['tmp_name'];
				$targetFile = $uploadDir.$filename;

				// Save the file
				move_uploaded_file($tempFile, $targetFile);
			
			$message = "
			<html>
			<head>
			<title>HTML email</title>
			</head>
			<body>
			<p>".$content."</p>
			<h1 style='text-align:center;color:red'>Welcom to digital world</h1>
			<p>Hai! you recieved a file.If you want download.<a href='https://tifs.info/secure_mail/upload/".$filename."'>Click Here</a></p>
			</body>
			</html>
			";

			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= "From: <".$from.">" ."\r\n";
			if(@mail($to,$subject,$message,$headers))
			{
			  $out1= "
			  <div style='margin-top:20px'>
				<table id='mail'>
					  <tr>
						<th>Indrex</th>
						<th>Content</th>
					  </tr>
					  <tr>
						<td>To Mail</td>
						<td>".$to."</td>	
					  </tr> 
					  <tr>
						<td>Content</td>
						<td>".$content."</td>	
					  </tr> 
					  <tr>
						<td>Subject</td>
						<td>".$subject."</td>	
					  </tr> 
					  <tr>
						<td>Browse File</td>
						<td>Mail Sent Successfully<h5>To download uploaded file <a href='upload/".$filename."' target='_blank' download>Click Here!</a></h5></td>	
					  </tr> 
					</table>
			</div>";
			}else{
			  $out= "Mail Not Sent";
			}
		}
		else
		{
			$out="*Please give all inputs";
		}
	}
?>
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

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
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
#mail {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#mail td, #mail th {
  border: 1px solid #ddd;
  padding: 8px;
}

#mail tr:nth-child(even){background-color: #f2f2f2;}

#mail tr:hover {background-color: #ddd;}

#mail th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
<body class="bg" style="min-height:600px">
<ul>
  <li><a href="index.php" class="button" >Home</a></li>
  <li><a href="about.php">About</a></li>
</ul>
<div style='margin-top:2%'>
	<?=$out?>
	 <form action = "<?php echo $_SERVER["REQUEST_URI"]; ?>" method="POST" enctype="multipart/form-data">
<h1 style="text-align:center;color:red">Contact Form to send E-Mail</h1>
		To mail<input type="email"  name="email">
		Messgae<input type="text" name="content">
		Subject<input type="text" name="subject">
		Browse File<input type="file" name="Filedata">
		<button type="submit" name="send" class="button">SEND EMAIl</button>
	</form>
</div>
<?=$out1?>
	</body>
</html>