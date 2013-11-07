<?php foreach($posts as $post): ?>

<div id="postbody">

<div class='window-inner'>

    <h1><?=$post['first_name']?> <?=$post['last_name']?> posted:</h1>

    <p><?=$post['content']?></p>

    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        <?=Time::display($post['created'])?>
    </time>

    <a href="/posts/delete/<?=$post['post_id']?>" style="text-decoration: none;"><input type="button" value="Delete"></a>

</div>

</div>

<?php endforeach; ?>