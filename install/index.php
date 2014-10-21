<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Omeka S</title>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,400italic,600italic' rel='stylesheet' type='text/css'>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../javascript/global.js"></script>
</head>
<body class="install minimal">
<header>
    <div class="logo">Omeka S</div>
</header>
<div role="main">
    <ul class="messages">
        <li class="error">This is an example error.</li>
        <li class="warning">This is an example error.</li>
    </ul>
    <form id="install-form">
        <div class="field">
            <div class="field-meta">
                <label for="username">Admin username</label>
            </div>
            <div class="inputs">
                <input type="text" name="username" id="username">
            </div>
            <ul class="messages">
                <li class="error">Enter username before continuing.</li>
                <li class="warning">Enter username before continuing.</li>
            </ul>
        </div>
        <div class="field">
            <label for="display-name">Name</label>
            <input type="text" name="display-name" id="display-name">
        </div>
        <div class="field">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </div>
        <div class="field">
            <label for="confirm-email">Retype Email</label>
            <input type="text" name="confirm-email" id="confirm-email">
        </div>
        <div class="field">
            <label for="user-password">Password</label>
            <input type="password" name="user-password" id="user-password">
        </div>
        <div class="field">
            <label for="confirm-password">Retype Password</label>
            <input type="password" name="confirm-password" id="confirm-password">
        </div>
        <button type="submit">Install</button>
    </form>
</div>
<footer>
</footer>
</body>
</html>