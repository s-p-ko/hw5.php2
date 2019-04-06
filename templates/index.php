<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,
          maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The last News</title>
</head>
<body>
<h1>The last news</h1>
<h3><a href="/admin">Go to the admin panel</a></h3>
<div>
    <?php foreach ($articles as $article) : ?>
        <article>
            <h2><a href="/article/<?php echo $article->id; ?>">
                    <?php echo $article->title; ?></a></h2>
            <p><?php echo $article->content; ?></p>
            <?php if (!empty($article->author)) : ?>
                <p><b>Author: <?php echo $article->author->name; ?></b></p>
            <?php endif; ?>
        </article>
    <?php endforeach; ?>
</div>
</body>
</html>