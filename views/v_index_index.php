<h1>Welcome to <?=APP_NAME?><?php if($user) echo ', '.$user->first_name; ?></h1>

<?php if($user): ?>

    <pre>
    <?php
    print_r($user);
    ?>
    </pre>

    Hello <?=$user->first_name;?>

<?php else: ?>
    Welcome to my app.  Please sign up or log in

<?php endif; ?>

<br>
<br>
<br>

<p>
	Hello World! You have successfully spawned a new application.
</p>