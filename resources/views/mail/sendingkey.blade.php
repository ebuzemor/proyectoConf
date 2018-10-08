<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Welcome to Confraise!!!</title>
</head>
<body>
    <p>
    	Hello {{$userInfo->email}},<br>
    	Thanks for subscribing to Confraise! To complete your registration, click on the following link: 
    	<br>http://confraise.test/step2/{{$userInfo->personId}}
    	<br><br>
    	If you have not personally requested a subscription to our site, please ignore this email.<br>
    	To prevent future emails from being considered spam, please include the email address: projectdecrowdfunding@gmail.com on your mailing list.<br>
    	If you want to change your personal information or unsubscribe click on this link.<br>

    	Greetings,<br>
    	The Confraise team.
    </p>
</body>
</html>