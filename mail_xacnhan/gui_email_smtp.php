	
<!DOCTYPE html>
<html>
    <style>
@import url(https://fonts.googleapis.com/css?family=Raleway);
 
h1{
text-align:center;
font-size: 2em;
margin-top: 40px;
margin-bottom: 40px;
}
 
#main{
margin: 25px 100px;
font-family: 'Raleway', sans-serif;
}
 
h2{
background-color: #FEFFED;
text-align:center;
border-radius: 10px 10px 0 0;
margin: -10px -40px;
padding: 30px 40px;
color: black;
font-weight: bolder;
font-size: 1.5em;
margin-top: -1px !important;
}
 
hr{
border:0;
border-bottom:1px solid #ccc;
margin: 10px -40px;
margin-bottom: 30px;
}
 
#login{
width:580px;
float: left;
border-radius: 10px;
font-family:raleway;
border: 2px solid #ccc;
padding: 0px 40px 0px;
margin-top: 70px;
margin: 0% 25%;
}
 
input[type=text],input[type=email],input[type=password]{
width:99.5%;
padding: 10px;
margin-top: 8px;
border: 1px solid #ccc;
padding-left: 5px;
font-size: 16px;
font-family:raleway;
}
 
textarea{
width:99.5%;
padding: 10px;
margin-top: 8px;
border: 1px solid #ccc;
padding-left: 5px;
margin-bottom: 5px;
font-size: 16px;
font-family:raleway;
}
 
input[type=submit]{
width: 100%;
background-color:#FFBC00;
color: white;
border: 2px solid #FFCB00;
padding: 10px;
font-size:20px;
cursor:pointer;
border-radius: 5px;
margin-bottom: 40px;
}
#para{
clear: both;
margin: 0 35%;
}
    </style>
<head>
<meta charset="UTF-8">
<title>Gửi email thông qua SMTP google trong PHP</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="main">
<h1>Gửi email thông qua google smtp</h1>
<div id="login">
<h2>Gmail SMTP</h2>
<hr/>
<form action="gui_email_smtp.php" method="post">
<input type="text" placeholder="Vui lòng nhập email của bạn" name="email"/>
<input type="password" placeholder="Mật khẩu" name="password"/>
<input type="text" placeholder="To : Email của bạn " name="toid"/>
<input type="text" placeholder="Subject : " name="subject"/>
<textarea rows="4" cols="50" placeholder="Vui lòng nhập nội dung email ..." name="message"></textarea>
<input type="submit" value="Gửi" name="send"/>
</form>
</div>
</div>
<?php
require 'PHPMailerAutoload.php';
if(isset($_POST['send']))
{
$email = $_POST['email'];
$password = $_POST['password'];
$to_id = $_POST['toid'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $email;
$mail->Password = $password;
$mail->addAddress($to_id);
$mail->Subject = $subject;
$mail->msgHTML($message);
if (!$mail->send()) {
$error = "Mailer Error: " . $mail->ErrorInfo;
echo '<p id="para">'.$error.'</p>';
}
else {
echo '<p id="para">Message đã gửi!</p>';
}
}
else{
echo '<p id="para">Vui lòng nhập đúng thông tin</p>';
}
?>
</body>
</html>