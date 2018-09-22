<!DOCTYPE html>

<html>
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
        <p>This is a simple gallery for pet lovers to upload pictures of their lovely pets! <br> We hope you enjoy!</p>
        <p>
            <a href="login.html">Click here to login</a><br>
            <a href="rules.html">Click here to view rules</a><br>
            <a href="upload.html" id="upload">Click here to upload</a><br>
            <a href="messages.html" id="messages">Click here to post a message (admin only)</a><br>
            <script>
                if (localStorage.getItem("accessLevel") == -1) {
                    var x = document.getElementById("upload");
                    x.style.display = "none";
                    x = document.getElementById("messages");
                    x.style.display = "none";

                }
                else if (localStorage.getItem("accessLevel") == 0) {
                    var x = document.getElementById("upload");
                    x.style.display = "block";
                    x = document.getElementById("messages");
                    x.style.display = "none";
                }
                else if (localStorage.getItem("accessLevel") == 1) {
                    var x = document.getElementById("upload");
                    x.style.display = "block";
                    x = document.getElementById("messages");
                    x.style.display = "block";
                }
            </script>
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