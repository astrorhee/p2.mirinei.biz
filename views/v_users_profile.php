<h1>This is the profile of <?=$user->first_name?></h1>

<form method='POST' action='/users/p_profile'>

    First Name<br>
    <input type='text' name='first_name' value=<?=$user->first_name?>>
    <br><br>

    Last Name<br>
    <input type='text' name='last_name' value=<?=$user->last_name?>>
    <br><br>

    Email<br>
    <input type='text' name='email' value=<?=$user->email?>>
    <br><br>

    Password<br>
    <input type='password' name='password'>
    <br><br>

    Location<br>
    <input type='text' name='location' value=<?=$user->location?>>
    <br><br>

    Website<br>
    <input type='text' name='website' value=<?=$user->website?>>
    <br><br>

    Bio<br>
    <input type='text' name='bio' value=<?=$user->bio?>>
    <br><br>

    <?php if(isset($error)): ?>
        <div class='error'>
            First name, last name, and email address are required.
        </div>
        <br>
    <?php endif; ?>

    <input type='submit' value='Update Profile'>
    <a href="/" style="text-decoration: none;"><input type="button" value="Cancel"></a>

</form>

<!--
<?php if(isset($user->first_name)): ?>
    <h1>This is the profile for <?=$user->first_name?></h1>
<?php else: ?>
    <h1>No user specified</h1>
<?php endif; ?>
--!>
