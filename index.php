<?php
$array = scandir('posts');
$posts = [];
//$posts=array_filter($files, is_file);
foreach($array as $file) {
    if(is_dir($file)){
        continue;
    }
    $posts[] = $file;//équivaut à array_push($posts, $file);   
}
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h1>Amazing Blog !</h1>
    <a href = "create.html" >Creation</a>
    <p>Here we are, born to be Dev Web Designers !!!!</p>
    <?php foreach($posts as $file){//foreach($array as $file) { 
        //if(!is_dir($file)){
        ?>
    <article>
        <h2><?php echo basename($file, '.txt') ?></h2>
        <p><?php echo file_get_contents('posts/'.$file);?></p>
        <form action="delete-post.php" method="POST">
            <input type="hidden" name="filename" value="<?php echo $file ?>"></input>
            <input type="submit" value="Delete"></input>

        </form>
    </article>
    <?php 
    }
    //}
     ?>
</body>
</html>