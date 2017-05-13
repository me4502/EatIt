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
    <link type="text/css" rel="stylesheet" href="css/styles.css" rel="stylesheet">
</head>

    <?php // Load page specific header code
    if (function_exists('customPageHeader')){
        customPageHeader();}
    ?>

<body class="flex-vert">
<nav>
    <div class="nav-wrapper z-depth-1">
        <a href="#" id="eat_it_button" class="brand-logo waves-effect waves-light left"><i class="material-icons">view_list</i> Eat It</a>
        <a href="#" id="eat_it_button" class="brand-logo waves-effect waves-light left"><i class="material-icons">view_list</i> Eat It</a>
        <a href="#" id="give_it_button" class="brand-logo waves-effect waves-light right">Give It<i class="material-icons right">add</i></a>
        <!--<ul id="nav-mobile" class="right">
            <li><a href="#"><i class="material-icons">account_circle</i></a></li>
        </ul>-->
    </div>
</nav>