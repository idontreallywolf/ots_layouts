<?php

	// Making config accessible from all pages
	$GLOBALS['config'] = include('./config/config.php');

	// Include Database class
	include("./classes/Database.php");

	// create a global instance of PDO
	$GLOBALS['dbh'] = Database::DBH($config);

	// Avoid empty page requests
	if(!isset($_REQUEST['page']) || empty($_REQUEST['page']))
	{
		$title = $config['pages']['home'];
		$page = "home";
	}
	else
	{
		// Make sure requested page exists
		if(array_key_exists($_REQUEST['page'], $config['pages'])){

			// compare & set page
			foreach($config['pages'] as $key => $val)
			{
				if($_REQUEST['page'] === $key)
				{
					$page = $key;
					$title = $val;
					break;
				}
			}

		} else {
			$title = $config['pages']['home'];
			$page = "home";
		}
	}

	$page = $config['site']['page_root'].$page.'.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title><?=$title?></title>
		<?php require('./partials/head.php'); ?>
	</head>
	<body>
		<?php require('./partials/nav.php'); ?>

		<div class="main_container">
			<?php require($page); ?>
		</div>

		<?php require('./partials/footer.php'); ?>
	</body>
</html>
