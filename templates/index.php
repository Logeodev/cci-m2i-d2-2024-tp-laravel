<?php
include_once 'vendor/autoload.php';
?>


<html>
<head>
    <title><?php echo env('APP_NAME').'- '. $title ?></title>
</head>
<body>
    <navbar>
        <ul>
            <li><?php echo $menu[0] ?></li>
            <li><?php echo $menu[1] ?></li>
            <li><?php print($menu[2]) ?></li>
        </ul>
    </navbar>

    <h1><?php echo $title ?></h1>
    <p><?php echo $content ?></p>
    <footer>

    </footer>
</body>
</html>
