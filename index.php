<?php
include 'functions.php';
// Connect to MySQL
$pdo = pdo_connect_mysql();

?>
<?=template_header('Home')?>

<div class="content home">

	<h2>Home</h2>

	<div class="btns">
		<a href="create.php" class="btn">Create Ticket</a>
	</div>

	<div class="tickets-links responsive-width-100">
		<a href="tickets.php?status=open" class="open responsive-width-100">
			<i class="fas fa-history fa-10x"></i>
			<span class="num"></span>
			<span class="title">Open Tickets</span>
		</a>
		<a href="tickets.php?status=resolved" class="resolved responsive-width-100">
			<i class="fas fa-user-check fa-9x"></i>
			<span class="num"></span>
			<span class="title">Resolved Tickets</span>
		</a>
		<a href="tickets.php?status=closed" class="closed responsive-width-100">
			<i class="fas fa-angry fa-10x"></i>
			<span class="num"></span>
			<span class="title">Closed Tickets</span>
		</a>
	</div>

</div>

<?=template_footer()?>
