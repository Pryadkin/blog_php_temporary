<?php 

    require_once 'include/database.php';
    require_once 'include/function.php';   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Blog_tamporary</title>
</head>
<body>


    <div class="container-fluid" style='padding: 0; margin-bottom: 20px;'>       
            
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php 
                    $categories = get_categories();
                ?>
                <?php foreach( $categories as $category ): ?>
                <li class="nav-item">
                    <a class="nav-link" href="/category.php?id=<?=$category[id]?>"><?=$category[title]?></a>
                </li>
                <?php endforeach;?>            
            </ul>            
        </div>
        </nav>
                 
    
    </div>



</body>
</html>

