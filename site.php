<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="site.php" method="get">
            Name: <input type="text" name="name"> <br>
            <input type="submit">
        </form>
        <br><br>

        <?php
            echo $_GET["name"];
        ?>
    </body>
</html>
