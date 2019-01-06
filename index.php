<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <h1>WEB</h1>
        <ol>
            <li><a href="index.php?id=html">HTML</a></li>
            <li><a href="index.php?id=CSS">CSS</a></li>
            <li><a href="index.php?id=JavaScript">JavaScript</a></li>
        </ol>
        <h2>
            <?php
                echo $_GET["id"];
            ?>
        </h2>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit blanditiis vel ab sapiente natus commodi iure aliquid inventore quisquam perspiciatis ullam illo iste dolores nobis ipsa, sed eos soluta ratione!
    </body>
</html>