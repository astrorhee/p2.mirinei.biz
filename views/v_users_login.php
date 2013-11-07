<h2>Log in</h2>

<p>Please log in so that you can chat with people on MiRiNei!</p>

<form method='POST' action='/users/p_login'>

<p>
    Email Address<br>
    <input type='text' name='email' size=25>
    <br><br>

    Password<br>
    <input type='password' name='password' size=25>
    <br><br>
</p>

<?php if(isset($error)): ?>
    <div class='error'>
        <p style="margin-top: -10px;"> Login failed.  Please double check your email address and password. </p>
    </div>
<?php endif; ?>

<p style="margin-top: -10px;">
    <input type='submit' value='Login'>
</p>

</form>