<?php foreach($users as $user): ?>

<div id="postbody">

    <div class='window-inner'>

        <h3>
            <?=$user['first_name']?> <?=$user['last_name']?>

            <?php if(isset($connections[$user['user_id']])): ?>
                <a href='/posts/unfollow/<?=$user['user_id']?>' style='text-decoration: none; float: right;'> Unfollow </a>
            <?php else: ?>
                <a href='/posts/follow/<?=$user['user_id']?>' style='text-decoration: none; float: right;'> Follow </a>        	
            <?php endif; ?>
        </h3>

    </div>

</div>

<?php endforeach; ?>