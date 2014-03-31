<?php
	//connect to the PHP SDK
	require 'sdk/src/facebook.php';
	$facebook = new Facebook(array(
		'appId'  => '256266514553030',
		'secret' => 'fbf50ef55b63920cee4efd75e1f5dec6'
	));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Facebook PHP</title>
</head>
<body>
<h1>Hello World</h1>
<?php
	//get user from facebook object
	$user = $facebook->getUser();
	
	if ($user): //check for existing user id
		echo '<p>User ID: ', $user, '</p>';
	else: //user doesn't exist
		$loginUrl = $facebook->getLoginUrl(array(
			'diplay'=>'popup',
			'redirect_uri' => 'https://apps.facebook.com/sergidaw/'
		));
		echo '<p><a href="', $loginUrl, '" target="_top">login</a></p>';
	endif; //check for user id
?>
</body>
</html>
