<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,
          maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin panel</title>
</head>
<body>
<h1>Admin panel</h1>
<div>
    <h3><a href="/">Return to the Main page</a></h3>
</div>
<div>
    <h2>Create a new Article</h2>
        <form action="/admin/add" method="post">
            <p>Title</p>
            <input type="text" size="60" maxlength="250" name="title">
            <p>Content</p>
            <textarea name="content" id="" cols="60" rows="10"></textarea>
            <br>
            <button type="submit">Submit</button>
        </form>
    <b><hr></b>
</div>
<div>
    <h3>Articles</h3>
    <?php foreach ($articles as $article): ?>
        <article>
            <h4><?php echo $article->title; ?></h4>
            <div><?php echo $article->content; ?></div>
            <?php if (!empty($article->author)) : ?>
                <p><b>Author: <?php echo $article->author->name; ?></b></p>
            <?php endif; ?>
            <br>
            <a href="/admin/edit/<?php echo $article->id;?>">
                <button>Edit article</button></a>
            <a href="/admin/delete/<?php echo $article->id;?>">
                <button>Delete article</button></a>
        </article>
        <hr>
    <?php endforeach; ?>
</div>
</body>
</html>