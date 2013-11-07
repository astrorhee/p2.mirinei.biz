<!DOCTYPE html>

<html>

<head>
    <title><?php if(isset($title)) echo $title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <!-- Common CSS/JSS -->
    <link rel="stylesheet" href="/css/external.css" type="text/css">

    <!-- Controller Specific CSS/JS -->
    <?php if(isset($client_files_head)) echo $client_files_head; ?>

</head>

<body>
    <div id="mainbody">
        <div class='window-outer'>
            
            <div id="header">
                <div id="bannertext">
                    the Milky Way
                </div>          
                <img src="/images/banner.jpg" alt="banner" width="698" height="114" border="0" />
            </div>

            <div id="navbody">
                <ul id="navmenu">
                    <li><a href='/'>Home</a><img src="/images/separator.png"></li>
                    <?php if($user): ?>
                        <li><a href='/posts/add'>New Post</a>   <img src="/images/separator.png"></li>
                        <li><a href='/posts'>Posts</a>          <img src="/images/separator.png"></li>
                        <li><a href='/posts/users'>Bloggers</a> <img src="/images/separator.png"></li>
                        <li><a href='/users/profile'>Profile</a><img src="/images/separator.png"></li>
                        <li><a href='/users/logout'>Logout</a></li>
                    <?php else: ?>
                        <li><a href='/users/signup'>Sign up</a> <img src="/images/separator.png"></li>
                        <li><a href='/users/login'>Log in</a></li>
                    <?php endif; ?>
                </ul>
            </div>

	        <?php if(isset($content)) echo $content; ?>
	        <?php if(isset($client_files_body)) echo $client_files_body; ?>

        </div>
    </div>
</body>

</html>