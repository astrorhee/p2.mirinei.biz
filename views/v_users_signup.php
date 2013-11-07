<h2>Sign up</h2>

<p>Please sign up to join MiRiNei!</p>

<form method='POST' action='/users/p_signup'>

<p>
    First Name<br>
    <input type='text' name='first_name' size=25>
    <br><br>

    Last Name<br>
    <input type='text' name='last_name' size=25>
    <br><br>

    Email Address<br>
    <input type='text' name='email' size=25>
    <br><br>

    Password<br>
    <input type='password' name='password' size=25>
    <br><br>
</p>

<?php if(isset($error)): ?>
    <div class='error'>
        <p style="margin-top: -10px;"> All fields are required.  Please sign up again. </p>
    </div>
<?php endif; ?>

<p style="margin-top: -10px;">
    <input type='submit' value='Sign Up!'>
</p>

</form>