<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <title><?= isset($PageTitle) ? $PageTitle : "Eat It"?></title>

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" media="screen,projection"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/styles.css" rel="stylesheet">
</head>

    <?php // Load page specific header code
    if (function_exists('customPageHeader')){
        customPageHeader();}
    ?>

<body class="flex-vert">
<nav class="z-depth-2">
    <div class="nav-wrapper">
        <a href="#" data-activates='dropdown1' data-beloworigin="true" data-gutter="-10" id="eat_it_button" class="brand-logo dropdown-button left"><i class="material-icons">view_list</i> Eat It</a>
        <img class="logo_image" src="img/logo2.png">
        <a href="#" id="give_it_button" class="brand-logo right">Give It<i class="material-icons right">add</i></a>
    </div>
</nav>