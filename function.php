<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <h1>function</h1>
        <?php
        $str = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum facere quidem sapiente sit, ab, voluptatem illo repellat quisquam, accusantium sequi id rerum neque fugit beatae hic! Sed nisi possimus voluptates.";
        echo $str;
        ?>
        <h2>strlen()</h2>
        <?php
        echo strlen($str);
        ?>
        <h2>nl2br</h2>
        <?php
        echo nl2br($str);
        ?>
    </body>
</html>