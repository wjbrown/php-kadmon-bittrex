<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Slim Kadmon</title>

    <link rel="stylesheet" href="/css/main.css">

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body>

    <div>
        <?php
        $phpView = new \Slim\Views\PhpRenderer(VIEW_PATH);
        echo $phpView->fetch($view['template'], $view['data']);
        ?>
    </div>

</body>
</html>