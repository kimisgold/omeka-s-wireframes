<?php $root = '/~kim'; // Set this variable for your local directory structure. ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Omeka S</title>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,400italic,600italic' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $root; ?>/omeka-s-wireframes/css/style.css" rel="stylesheet" type="text/css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo $root; ?>/omeka-s-wireframes/javascript/global.js"></script>
    <?php echo $js; ?>
</head>
<body class="<?php echo $bodyClass; ?>">
<header>
    <div class="logo"><a href="<?php echo $root; ?>/omeka-s-wireframes/">Omeka S</a></div>
    <div id="mobile-nav">
        <a href="#" class="fa-menu button"><span class="screen-reader-text">Navigation Menu</span></a>
        <a href="#" class="fa-search button"><span class="screen-reader-text">Search Site</span></a>
        <a href="#" class="fa-current-user button"><span class="screen-reader-text">User Menu</span></a>
    </div>
    <div id="current-user">
        <p>Welcome, <a href="#">Admin</a></p>
        <p><a href="#">Logout</a></p>
    </div>
    <div id="search">
        <form id="search-form">
            <input type="text" name="global-search">
            <button>Advanced Options</button>
            <button type="submit">Search</button>
        </form>
    </div>
    <nav id="menu" role="navigation">
        <ul>
            <li><a href="<?php echo $root; ?>/omeka-s-wireframes/items/" class="fa-cubes">Items</a></li>
            <li><a href="<?php echo $root; ?>/omeka-s-wireframes/item-sets/" class="fa-archive">Item Sets</a></li>
            <li><a href="<?php echo $root; ?>/omeka-s-wireframes/vocabularies/" class="fa-book">Vocabularies</a></li>
            <li><a href="#" class="fa-image">Assets</a></li>
            <li><a href="#" class="fa-plus-square">Modules</a></li>
            <li><a href="<?php echo $root; ?>/omeka-s-wireframes/users/" class="fa-users">Users</a></li>
            <li><a href="#" class="fa-laptop">Sites</a></li>
            <li><a href="#" class="fa-gears">Settings</a></li>
        </ul>
    </nav>
</header>
<div role="main">