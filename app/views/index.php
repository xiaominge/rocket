<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
    </head>
    <body>
        <div class="article">
            <h1><?php echo $article->title ?></h1>
            <div class="content">
                <?php echo $article->content ?>
            </div>
        </div>
        <ul>
            <li>HelloWorld</li>
            <li><?php echo $hello_world ?></li>
            <div>
                <?php
                    var_dump($session);
                ?>
            </div>
        </ul>
    </body>
</html>