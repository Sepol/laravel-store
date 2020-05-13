<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вход в админку</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <?php if($_COOKIE['user'] == '' ): ?>

            <?php require('auth_please.php') ?>

            <?php else: ?>

            <p> В сети </p>

            <?php endif; ?>
        </div>
    </div>
</body>

</html>