<?php

use Laravel\Socialite\Facades\Socialite;
		$provider = "Instagram";
?>

<html>

<head>
	<title>Welcome </title>
</head>

<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/dashboard_style.css">

<body>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<?php

				if($provider == "Instagram"){
						$fb_user_data = Socialite::driver('instagram')->user();
					?>

				<span class="navbar-brand" href="#">Welcome , <?php echo $fb_user_data->getName(); ?></span>
			<?php
				}
				else{
						$twitter_user_data = Socialite::driver('twitter')->user();
					?>
					<span class="navbar-brand" href="#">Welcome , <?php echo $twitter_user_data->getName(); ?></span>
				<?php
				}
			?>
		</div>
		<ul class="nav pull-right">
			<a href="logout"> <button type="button" id="btnLogout" class="btn" >Logout</button></a>
		</ul>
	</div>
</nav>

<?php

if ($provider == "Instagram") {

?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
				<div class="media">
				<a class="pull-left">
					<img class="media-object dp img-circle" src="<?php echo $fb_user_data->getAvatar() ?>" style="width: 100px;height:100px;">
				</a>
				<div class="media-body" style="color: white">
					<h4 class="media-heading"><?php echo $fb_user_data-> getEmail(); ?></h4>
					<h5>You are Loggedin with <a href="https://www.facebook.com"  style="color:#1E347B;"> <?php  echo $provider; ?> </a></h5>
					<hr style="margin:8px auto">
					 <h5>Get connected with  <a href='twitterlogin'  name='twitter' > Twitter</a><br></h5>
				</div>
			</div>
		</div>
	</div>

<?php
	} // if close
		else {
			?>
<div class="container" style="margin-top: 20px;">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="media">
				<a class="pull-left">
					<img class="media-object dp img-circle" src="<?php echo $twitter_user_data->getAvatar() ?>" style="width: 100px;height:100px;">
				</a>
				<div class="media-body" style="color: #ffffff !important;">
					<h4 class="media-heading"><?php echo $twitter_user_data-> getNickname(); ?></h4>
					<h5>You are Loggedin with <a href="https://www.twitter.com" style="color:#1E347B;"> <?php  echo $provider; ?> </a></h5>
					<hr style="margin:8px auto">
					<h5>Get connected with  <a href='facebooklogin'  name='facebook'> FaceBook</a><br></h5>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
		} // else close
?>
</body>

</html>

<script type="text/javascript">
	var uri = window.location.toString();
	if (uri.indexOf("?") > 0) {
		var clean_uri = uri.substring(0, uri.indexOf("?"));
		window.history.replaceState({}, document.title, clean_uri);
	}

</script>