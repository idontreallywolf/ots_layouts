<?php
	$follow = array(
		"twitter" => "http://www.twitter.com/",
		"facebook" => "http://www.facebook.com/",
		"youtube" => "http://www.youtube.com/"
	);
	$url_param = "/?subtopic=";


	/*
		isNew -- determines wether the page is new or not, set to _true_ if it is a new page

		isPage -- if the menu item is not a page but a link to a file to be downloaded, set to _false_

	*/
	$menu_items = array(
		"Main" => array(
			"fontIcon" 		=> "home",
			"Latest News" 		=> array("latestnews", 	"isNew" => false, 	"isPage" => true),
			"News Archive" 	=> array("newsarchive", 	"isNew" => false, 	"isPage" => true),
			"Report Bug(s)"	=> array("reportbug", 	"isNew" => true, 	"isPage" => true)
		),
		"Account" => array(
			"fontIcon"		=> "user-circle",
			"My Account" 		=> array("accountmanagement", "isNew" => false, "isPage" => true),
			"Create Account"	=> array("createaccount", 	"isNew" => false, "isPage" => true),
			"Downloads" 		=> array("downloads", 		"isNew" => false, "isPage" => true),
			"Recover Password"	=> array("loastaccount", 	"isNew" => true, "isPage" => true)
		),
		"Community" => array(
			"fontIcon"		=> "users",
			"Characters" 		=> array("characters", 		"isNew" => false, "isPage" => true),
			"Who is online" 	=> array("whoisonline", 		"isNew" => false, "isPage" => true),
			"Highscores" 		=> array("highscores", 		"isNew" => false, "isPage" => true),
			"Houses" 			=> array("houses", 			"isNew" => false, "isPage" => true),
			"Latest Kills"		=> array("killstatistics", 	"isNew" => false, "isPage" => true),
			"Guilds"			=> array("guilds", 			"isNew" => false, "isPage" => true)
		),
		"Library" => array(
			"fontIcon"		=> "book",
			"Server Rules" 	=> array("tibiarules", 		"isNew" => false, "isPage" => true),
			"Server Info" 		=> array("serverinfo", 		"isNew" => false, "isPage" => true),
			"Exp Table" 		=> array("experiencetable", 	"isNew" => true, "isPage" => true)
		),
		"Support" => array(
			"fontIcon"		=> "info-circle",
			"Team"			=> array("team", 	"isNew" => false, "isPage" => true),
			"testDLFILE"		=> array("file.txt", "isNew" => true, "isPage" => false)
		),
		"Shop" => array(
			"fontIcon"		=> "shopping-cart",
			"Donate"			=> array("donate", 		"isNew" => true, "isPage" => true),
			"Buy Points" 		=> array("buypoints", 	"isNew" => false, "isPage" => true),
			"Items" 			=> array("shopoffer", 	"isNew" => false, "isPage" => true)
		)
	);


	$countDown = "Jan 5, 2019 15:37:25";
?>
<!--
	Author: Blackwolf (Snavy on otland)

	Otland: https://otland.net/members/snavy.155163/
	Facebook: http://www.facebook.com/idont.reallywolf.1
	Twitter: @idontreallywolf
-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>OTS Title | Layout</title>

		<!-- Stylesheet(s) -->
		<link rel="stylesheet" href="./css/style.css">
		<link rel="stylesheet" href="./fontawesome/css/font-awesome.min.css">

		<!-- JavaScript(s) -->
		<script src="./js/jq331.js" charset="utf-8"></script>
		<script src="./js/countdown.js" charset="utf-8"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				countDown("countDownTimer", $("#countDownTimer").data("date"));
			});
		</script>
	</head>
	<body>
		<header>
			<div class="logo">
				OTServer xx.yy
			</div>
		</header>
		<!-- Main container -->
		<div class="main">
			<nav>
				<div class="container">
					<div class="pull-right">
						<ul>
							<li><a href="#test">Login</a>
								<ul>
									<div class="loginForm">
										<form id="loginForm" action="/?subtopic=accountmanagement" method="post">
											<input type="password" name="accountLogin" placeholder="•••••••">
											<input type="password" name="passwordLogin" placeholder="••••••••">
											<button type="submit" name="submit">Login</button>
										</form>
									</div>
									<!--li><a href="#test">Test</a></li-->
								</ul>
							</li><!--
							--><li><a href="#Register">Register</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="content">
				<div class="well infoBar">
					<span><b>Zombie Event:</b> 5h 3m 2s</span>
					<span><b>Fire Event:</b> 2h 33m 17s</span>
					<span><b>LMS Event:</b> 0h 5m 34s</span>
					<span><b>Zombie Event:</b> 6h 0m 2s</span>
				</div>
				<div class="paneHolder">
					<div class="well leftPane pull-left">
						<div class="well otsadBox">
							ADs section<br>
							230x100
						</div>
						<div class="well searchBox">
							<form class="searchForm" action="index.html" method="post">
								<div><input type="text" name="search" placeholder="e.g: Doctor Who"></div>
								<div><button type="submit" name="submit"><i class="fa fa-search"></i> </button></div>
							</form>
						</div>
						<?php foreach($menu_items as $category => $items){ ?>
						<div class="menuItemHolder">
							<div class="well paneHeader"><i class="fa fa-<?=$items["fontIcon"]?>"></i> <?=$category?></div>
							<?php foreach($items as $item => $properties) {
									if($item == "fontIcon") continue;
								 ?>
							<a href="<?=($properties["isPage"] == true ? $url_param.$properties[0]:$properties[0])?>">
								<div class="well"><i class="fa fa-circle-o"></i> <?=$properties[0]?><?=($properties["isNew"] == true ? "<span class=\"new\">NEW!</span>":"")?> </div>
							</a>
							<?php } ?>
						</div>
						<?php } ?>

					</div>
					<div class="well rightPane pull-right">
						<div class="well">
							<div class="well paneHeader">
								<i class="fa fa-empire"></i> Top GUilds
							</div>
							<div class="topGuilds">
								<div class="guildContainer">
									<div class="guildName ellipsis">Guild Name</div>
									<div class="guildImg"><img width="100" src="./img/g1.png" alt=""></div>
									<div class="guildKills">5000 kills</div>
								</div>
								<div class="guildContainer">
									<div class="guildName ellipsis">Guild Name</div>
									<div class="guildImg"><img width="100" src="./img/g2.png" alt=""></div>
									<div class="guildKills">5000 kills</div>
								</div>
								<div class="guildContainer">
									<div class="guildName ellipsis">Guild Name</div>
									<div class="guildImg"><img width="100" src="./img/g3.png" alt=""></div>
									<div class="guildKills">5000 kills</div>
								</div>
								<div class="guildContainer">
									<div class="guildName ellipsis">Guild Name</div>
									<div class="guildImg"><img width="100" src="./img/g3.png" alt=""></div>
									<div class="guildKills">5000 kills</div>
								</div>
								<div class="guildContainer">
									<div class="guildName ellipsis">Guild Name</div>
									<div class="guildImg"><img width="100" src="./img/g3.png" alt=""></div>
									<div class="guildKills">5000 kills</div>
								</div>
							</div>
						</div>
						<div class="well feedContainer">
							<div class="postContainer">
								<div class="well paneHeader">header</div>
								<div class="post">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</div>
							</div>
							<div class="postContainer">
								<div class="well paneHeader">header</div>
								<div class="post">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</div>
							</div>
							<div class="postContainer">
								<div class="well paneHeader">header</div>
								<div class="post">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</div>
							</div>
							<div class="postContainer">
								<div class="well paneHeader">header</div>
								<div class="post">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div><!-- Main container END -->
	</body>
</html>
<!--
	Author: Blackwolf (Snavy on otland)

	Otland: https://otland.net/members/snavy.155163/
	Facebook: http://www.facebook.com/idont.reallywolf.1
	Twitter: @idontreallywolf
-->
