<h2><?=$user->first_name?>'s Profile</h2>

<p>Fill out your profile so that people know who you are!</p>

<form method='POST' action='/users/p_profile'>

<p>
    First Name<br>
    <input type='text' name='first_name' size=30 value=<?=$user->first_name?>>
    <br><br>

    Last Name<br>
    <input type='text' name='last_name' size=30 value=<?=$user->last_name?>>
    <br><br>

    Email Address<br>
    <input type='text' name='email' size=30 value=<?=$user->email?>>
    <br><br>

    Password<br>
    <input type='password' name='password' size=30>
    <br><br>

    Location<br>
    <textarea name='location' rows=1 cols=35><?=$user->location?></textarea>
    <br><br>

    Website<br>
    <input type='text' name='website' size=40 value=<?=$user->website?>>
    <br><br>

    Bio<br>
    <textarea name='bio' rows=8 cols=65><?=$user->bio?></textarea>
    <br><br>
</p>

<?php if(isset($error)): ?>
    <div class='error'>
        <p style="margin-top: -10px;"> First name, last name, and email address are required. </p>
    </div>
<?php endif; ?>

<p style="margin-top: -10px;">
    <input type='submit' value='Update Profile'>
    <a href="/" style="text-decoration: none;"><input type="button" value="Cancel"></a>
</p>

</form>