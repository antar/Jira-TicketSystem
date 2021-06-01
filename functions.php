<?php
session_start();
include_once 'config.php';
// Connect to MySQL using PDO function
function pdo_connect_mysql() {
    try {
        // Connect to the MySQL database using PDO...
    	$pdo = new PDO('mysql:host=' . db_host . ';dbname=' . db_name . ';charset=' . db_charset, db_user, db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $exception) {
    	// Could not connect to the MySQL database, if this error occurs make sure you check your db settings are correct!
    	exit('Failed to connect to database!');
    }
    return $pdo;
}
// Template footer
function template_footer() {
echo <<<EOT
    </body>
</html>
EOT;
}
// Template admin header
function template_admin_header($title, $selected = 'dashboard') {
    $admin_links = '
        <a href="index.php"' . ($selected == 'dashboard' ? ' class="selected"' : '') . '><i class="fas fa-tachometer-alt"></i>Dashboard</a>
        <a href="tickets.php"' . ($selected == 'tickets' ? ' class="selected"' : '') . '><i class="fas fa-ticket-alt"></i>Tickets</a>
        <a href="comments.php"' . ($selected == 'comments' ? ' class="selected"' : '') . '><i class="fas fa-comments"></i>Comments</a>
        <a href="accounts.php"' . ($selected == 'accounts' ? ' class="selected"' : '') . '><i class="fas fa-users"></i>Accounts</a>
        <a href="categories.php"' . ($selected == 'categories' ? ' class="selected"' : '') . '><i class="fas fa-list"></i>Categories</a>
        <a href="emailtemplate.php"' . ($selected == 'emailtemplate' ? ' class="selected"' : '') . '><i class="fas fa-envelope"></i>Email Templates</a>
        <a href="settings.php"' . ($selected == 'settings' ? ' class="selected"' : '') . '><i class="fas fa-tools"></i>Settings</a>
    ';
echo <<<EOT
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <title>$title</title>
        <link href="admin.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body class="admin">
        <aside class="responsive-width-100 responsive-hidden">
            <h1>Admin Panel</h1>
            $admin_links
        </aside>
        <main class="responsive-width-100">
            <header>
                <a class="responsive-toggle" href="#">
                    <i class="fas fa-bars"></i>
                </a>
                <div class="space-between"></div>
                <a href="about.php" class="right"><i class="fas fa-question-circle"></i></a>
                <a href="logout.php" class="right"><i class="fas fa-sign-out-alt"></i></a>
            </header>
EOT;
}
?>
