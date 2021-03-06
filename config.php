<?php
// database hostname, you don't usually need to change this
define('db_host', 'localhost');
// database username
define('db_user', 'root');
// database password
define('db_pass', '*');
// database name
define('db_name', 'm120');
// database charset, change this only if utf8 is not supported by your language
define('db_charset', 'utf8');
// Change "Your Company Name" and "yourdomain.com", do not remove the < and >
define('mail_from', 'M120 Jira <admin@wes.fm>');
// View ticket link, this will be used for the ticket emails
define('view_ticket_link', 'https://jira.wes.fm/ticketsystem/view.php');
// Authentication required?
define('authentication_required', true);
// Number of tickets to show per page
define('num_tickets_per_page', 5);
// Maximum allowed upload image file size
define('max_allowed_upload_image_size', 500000);
?>
