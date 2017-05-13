<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= isset($PageTitle) ? $PageTitle : "EatIt"?></title>

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" media="screen,projection"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <link type="text/css" rel="stylesheet" href="css/styles.css" rel="stylesheet">
</head>

    <?php // Load page specific header code
    if (function_exists('customPageHeader')){
        customPageHeader();}
    ?>

<body class="default-primary-color flex-vert">
<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo center">EatIt</a>
        <ul id="nav-mobile" class="right">
            <li><a href="#"><i class="material-icons">account_circle</i></a></li>
        </ul>
    </div>
</nav>