<?php

$title = $_POST['title'];
$content = $_POST['content'];
if (!is_dir('posts')){
    mkdir('posts');
}
$file = fopen('posts/'.$title.'.txt', 'w');
fwrite($file, $content);
fclose($file);   
echo '<p>Well Play ! File created.</p>';
header('location: index.php');
?>
<a href="index.php">Retour</a>