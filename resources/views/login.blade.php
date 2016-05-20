
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">

<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
       <span>Welcome to Laravel 5!</span>
    </div>
</nav>


<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Login with site</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Your Email ID" name="email" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                        </fieldset>
                    </form>
                    <hr/>
                    <center><h4>OR</h4></center>


                        <p>
                            <a class="btn btn-primary social-login-btn social-facebook" href="facebooklogin"><i class="fa fa-facebook"></i></a>
                            <a class="btn btn-primary social-login-btn social-twitter" href="twitterlogin"><i class="fa fa-twitter"></i></a>
                            <a class="btn btn-primary social-login-btn social-google" href="googlelogin"><i class="fa fa-google-plus"></i></a>
                            <a class="btn btn-primary social-login-btn social-linkedin" href="linkedinlogin"><i class="fa fa-linkedin"></i></a>
                            <a class="btn btn-primary social-login-btn social-github" href="githublogin"><i class="fa fa-github"></i></a>
                            <a class="btn btn-primary social-login-btn social-pinterest" href="pinterestlogin"><i class="fa fa-pinterest"></i></a>
                            <a class="btn btn-primary social-login-btn social-instagram" href="instagramlogin"><i class="fa fa-instagram"></i></a>
                            <a class="btn btn-primary social-login-btn social-dropbox" href="dropboxlogin"><i class="fa fa-dropbox"></i></a>
                            {{--<a class="btn btn-primary social-login-btn social-windows" href="microsoftlogin"><i class="fa fa-windows"></i></a>
                            <a class="btn btn-primary social-login-btn social-bitbucket" href="microsoftlogin"><i class="fa fa-bitbucket"></i></a>
                            <a class="btn btn-primary social-login-btn social-tumblr" href="microsoftlogin"><i class="fa fa-tumblr-sign"></i></a>
                            <a class="btn btn-primary social-login-btn social-amazon" href="microsoftlogin"><i class="fa fa-amazon"></i></a>--}}
                        </p>


                </div>
            </div>
        </div>
    </div>
</div>
</body>

<script type="application/javascript">

    function fb_click() {
        <?php $_provider = "FaceBook" ?>
    }
    
    function twitter_click() {
        <?php $_provider = "Twitter" ?>
    }

</script>

</html>
