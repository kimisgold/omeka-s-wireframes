<?php $root = ''; // Set this variable for your local directory structure. ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Omeka S</title>
    <link href="<?php echo $root; ?>/omeka-s-wireframes/css/screen.css" rel="stylesheet" type="text/css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo $root; ?>/omeka-s-wireframes/javascript/global.js"></script>
    <?php echo $js; ?>
</head>
<body class="<?php echo $bodyClass; ?>">
<header>
    <div class="logo"><a href="<?php echo $root; ?>/omeka-s-wireframes/">Omeka S</a></div>
    <div id="current-user">
        <p>Welcome, <a href="#">Admin</a></p>
        <p><a href="#">Logout</a></p>
    </div>
    <div id="search">
        <input type="text" name="global-search">
        <button>Advanced Options</button>
        <button type="submit">Search</button>
    </div>
    <nav id="primary-nav">
        <ul>
            <li><a href="<?php echo $root; ?>/omeka-s-wireframes/items/browse" class="icon-items">Items</a></li>
            <li><a href="#" class="icon-item-sets">Item Sets</a></li>
            <li><a href="<?php echo $root; ?>/omeka-s-wireframes/vocabularies/" class="icon-vocabularies">Vocabularies</a></li>
            <li><a href="#" class="icon-media">Media</a></li>
            <li><a href="#" class="icon-modules">Modules</a></li>
            <li><a href="#" class="icon-users">Users</a></li>
            <li><a href="#" class="icon-sites">Sites</a></li>
            <li><a href="#" class="icon-settings">Settings</a></li>
        </ul>
    </nav>
</header>
<div role="main">