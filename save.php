<!DOCTYPE html>
<?php
if ($_FILES["image"]["type"] == "image/png") {
        $result = move_uploaded_file($_FILES["image"]["tmp_name"], "./images/test.png");
        if (!$result){
            die("Create the images subdirectory. Give the script permissions to write there!!!");
        }
}else{
    die("must be a png image");
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Storage test</title>
</head>
<body>

<a href="./images/test.png">Your file</a>

</body>
</html>
