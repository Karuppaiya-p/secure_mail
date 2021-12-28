
<!DOCTYPE html>
<html>
<head>
	<title>Send Mail</title>
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
  <li><a href="index.php" >Home</a></li>
  <li><a href="send.php" class="button">SEND</a></li>
  <li><a href="about.php">About</a></li>
</ul>
<div style='margin-top:2%'>
	<?=$out?>
	 <form action ="<?php echo $_SERVER["REQUEST_URI"]; ?>" method = "POST" enctype = "multipart/form-data">
		<input type="hidden" name="email" value="<?=$to?>" >
		<input type="hidden" name="content" value="<?=$content?>" >
		<input type="hidden" name="subject" value="<?=$subject?>" >
		<table id="mail">
		  <tr>
			<th>Indrex</th>
			<th>Content</th>
		  </tr>
		  <tr>
			<td>To Mail</td>
			<td><?=$to?></td>	
		  </tr> 
		  <tr>
			<td>Content</td>
			<td><?=$content?></td>	
		  </tr> 
		  <tr>
			<td>Subject</td>
			<td><?=$subject?></td>	
		  </tr> 
		  <tr>
			<td>Browse File</td>
			<td><input type="file" name="Filedata"></td>	
		  </tr> 
		</table>
		<button type="submit" name="final" class="button">SEND MAIL</button>
	</form>
</div>
	</body>
</html>