<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Errors</title>
</head>
<body>
<h3><a href="/admin">Return to the admin-panel</a></h3>
<div>
        <!-- Block for MultiException's messagies -->
    <?php if ($message instanceof \App\Exceptions\MultiException) : ?>
        <div>
            <h1>Some fields of form have not passed validation</h1>
            <?php foreach ($message->all() as $msg) : ?>
                <p>Cause: <?php echo $msg->getMessage(); ?></p>
                <hr>
            <?php endforeach;?>
        <!-- End of block for MultiException's messagies -->
        </div>
        <!-- Block for the rest messages of exceptions -->
        <div>
            <?php else: ?>
            <h1>Something went wrong</h1>
            <p>Cause: <?php echo $message->getMessage(); ?></p>
        </div>
    <?php endif; ?>
        <!-- End block for the rest messages of exceptions -->
</div>
</body>
</html>