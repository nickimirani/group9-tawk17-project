<?php

class Template
{
    public static function header($title)
    {
        $home_path = getHomePath();
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?= $title ?> - Multitier Shop</title>

            <link rel="stylesheet" href="<?= $home_path ?>/assets/css/style.css">

            <script src="<?= $home_path ?>/assets/js/script.js"></script>
        </head>

        <body>
            <header style="background-color: grey">
                <h1><?= $title; ?></h1>
            </header>

            <nav>
                <a href="<?= $home_path ?>">Start</a>
                <a href="<?= $home_path ?>/users">Users</a>
                <a href="<?= $home_path ?>/articles">Exercises</a>
            </nav>

            <main>

        <?php }



    public static function footer()
    {
        ?>
        </main>
            <footer>
                Copyright 2025
            </footer>
        </body>

        </html>
<?php }
}
