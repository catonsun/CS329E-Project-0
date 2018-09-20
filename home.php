<!DOCTYPE html>


<html>
<script>

    var obj1 = localStorage.user;
    console.log(obj1);

    var obj2 = localStorage.password;
    console.log(obj2);



</script>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="home.css">
        <title>Pet Gallery</title>
    </head>
    <body style="background-color:lightcyan">
    </body>
    <body>
        <center>
        <h1>Welcome to our Pet Gallery!</h1>
        <br>
        <p>This is a simple gallery for pet lovers to upload pictures of their lovely pets! <br> We hope you enjoy!<br\></p>
        <p>
        <a href="login.html">Click here to login</a>
        <br>
        <a href="upload.html">Click here to upload</a>
        <br>
        <a href="rules.html">Click here to view rules</a>
        <br>
        </p>
        <?php
            $dirname = "UPLOAD_FOLDER/";
            $images = glob($dirname."*.{jpg,gif,png,,jpeg,PNG,JPG,JPEG,GIF}",GLOB_BRACE);
            foreach($images as $image) {
                echo '<img src="'.$image.'" /><br />';
            }
        ?>
        </center>
    </body>
</html>