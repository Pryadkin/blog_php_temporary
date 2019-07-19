<?php

    require_once 'app/header.php';


    $posts = get_posts();
    
?>


<?php foreach($posts as $post): ?>

<div class="container">
    <div class="row">        
        <div class='col-sm-4' style="margin: 10px;">
            <img src="<?=$post[image]?>" alt="..." class="img-thumbnail">
        </div>
        <div class='col-sm-6'>
            <h3><?=$post[title]?></h3>
            <p><?=strlen($post[content]) > 250 ? substr($post[content], 0, 200).'...' : $post[content] ?></p>
            <a class="btn btn-primary" href="/post.php?post_id=<?=$post[id];?>" role="button">Reading more</a>            
        </div>          
    </div>   
</div>   
<hr>
<?php endforeach; ?>