<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $article->title; ?></title>
    </head>
    <body>
        <div class="article">
            <h1><?php echo $article->title; ?></h1>
            <div class="content">
                <?php echo $article->content; ?>
            </div>
        </div>
        <ul>
            <div>
                <?php
                    var_dump($page);
                ?>
            </div>
        </ul>
    </body>
</html>