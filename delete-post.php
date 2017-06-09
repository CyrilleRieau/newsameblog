<?php
$filename = $_POST['filename'];
unlink('posts/'.$filename);
echo 'File deleted.';
header('location: index.php');
?>    