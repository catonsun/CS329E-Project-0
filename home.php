<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="home.css">
        <title>Pet Gallery</title>
    </head>
    <body>
        <h1>Welcome to our Pet Gallery!</h1>
        <br>
        <p>This is a simple gallery for pet lovers to upload pictures of their lovely pets! <br> We hope you enjoy!<br\></p>
        <a href="upload.html">Click here to upload</a>
        <br>
        <a href="login.html">Click here to login</a>
            <br>
        <a href="rules.html">Click here to view rules</a>
        <br>
        <?php
            $dirname = "UPLOAD_FOLDER/";
            $images = glob($dirname."*.{jpg,gif,png,,jpeg,PNG,JPG,JPEG,GIF}",GLOB_BRACE);
            foreach($images as $image) {
                echo '<img src="'.$image.'" /><br />';
            }
        ?>
    </body>
</html>