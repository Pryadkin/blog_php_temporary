<?php 

    $post_id = $_GET['post_id'];


    require_once 'app/header.php';

    $post = get_post_by_id($post_id);
?>


<div class="container">
    <div class="row">        
        <div class='col-sm-4' style="margin: 10px;">
            <img src="<?=$post[image]?>" alt="..." class="img-thumbnail">
        </div>
        <div class='col-sm-6'>
            <h3><?=$post[title]?></h3>
            <p><?=$post[content]?></p>                  
        </div>          
    </div>   
</div>  


