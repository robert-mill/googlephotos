<?php require_once './src/classes/GooglePhotos.php';?>
<?php
    $albumid = '0B3WE-Ir69w7CQnlHREp4TFJmWk0';
    $googlepicsClass = new robertmill\classes\GooglePhotos($albumid);
?>
<style>
iframe{
    width:100%;
    height: 100%;
    display: block;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h3>Google Photos</h3>
<?php
    $data = $googlepicsClass->buildAlbum();
    echo $data;
?>
</body>
</html>
