
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

<p>
	Hello World! You have successfully spawned a new application.
</p>

<p>
	This message is being triggered via the c_index.php controller, within the index() method.
</p>

<p>
	<strong>Since everything is in working order, you should now delete <?php echo APP_PATH?>diagnostics.php</strong>
</p>
