<?php if($user): ?>
    <h1><?=$user->first_name;?>, welcome to <?=APP_NAME?> !</h1>
<?php else: ?>
    <h2>Welcome to <?=APP_NAME?>.  Please sign up or log in!</h2>
<?php endif; ?>

<p>
    My +1 features for Project 2 include the following:
    <ul>
    	<li>Delete a post</li>
    	<li>Edit and display basic profile information (location, website, and bio)</li>
    	<li>Reset password (via the profile page)</li>
    	<li>Posts are displayed in reverse chronological order (rather than in user order)</li>
    	<li>Once signed up, I become followed by myself automatically so that my posts are also displayed in the posts page.</li>
    </ul> 
</p>