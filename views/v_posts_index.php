<?php foreach($posts as $post): ?>

<div id="postbody">

    <div class='window-inner'>

        <p style="margin-top: 22px; margin-bottom: 15px;"><?=$post['first_name']?> <?=$post['last_name']?></p>

        <h3><?=$post['content']?></h3>

        <p>
        	<time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>"><?=Time::display($post['created'])?></time>
            <a href="/posts/delete/<?=$post['post_id']?>" style="text-decoration: none;">
        	    <input type="button" value="Delete" style="float: right; margin-right:25px;">
            </a>
        </p>

    </div>

</div>

<?php endforeach; ?>