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
			"Latest News" 		=> array("latestnews", 	"isNew" => false, 	"isPage" => true),
			"News Archive" 	=> array("newsarchive", 	"isNew" => false, 	"isPage" => true),
			"Report Bug(s)"	=> array("reportbug", 	"isNew" => false, 	"isPage" => true),
			"css"			=> "btn-default" // more classes can be added "class1 class2 class3" .. etc
		),
		"Account" => array(
			"My Account" 		=> array("accountmanagement", "isNew" => false, "isPage" => true),
			"Create Account"	=> array("createaccount", 	"isNew" => false, "isPage" => true),
			"Downloads" 		=> array("downloads", 		"isNew" => false, "isPage" => true),
			"Recover Password"	=> array("loastaccount", 	"isNew" => true, "isPage" => true),
			"css"			=> "btn-info"
		),
		"Community" => array(
			"Characters" 		=> array("characters", 		"isNew" => false, "isPage" => true),
			"Who is online" 	=> array("whoisonline", 		"isNew" => false, "isPage" => true),
			"Highscores" 		=> array("highscores", 		"isNew" => false, "isPage" => true),
			"Houses" 			=> array("houses", 			"isNew" => false, "isPage" => true),
			"Latest Kills"		=> array("killstatistics", 	"isNew" => false, "isPage" => true),
			"Guilds"			=> array("guilds", 			"isNew" => false, "isPage" => true),
			"css"			=> "btn-success"
		),
		"Library" => array(
			"Server Rules" 	=> array("tibiarules", 		"isNew" => false, "isPage" => true),
			"Server Info" 		=> array("serverinfo", 		"isNew" => false, "isPage" => true),
			"Exp Table" 		=> array("experiencetable", 	"isNew" => true, "isPage" => true),
			"css"			=> "btn-warning"
		),
		"Support" => array(
			"Team"			=> array("team", 	"isNew" => false, "isPage" => true),
			"testDLFILE"		=> array("file.txt", "isNew" => true, "isPage" => false),
			"css"			=> "btn-danger"
		),
		"Shop" => array(
			"Donate"			=> array("donate", 		"isNew" => true, "isPage" => true),
			"Buy Points" 		=> array("buypoints", 	"isNew" => false, "isPage" => true),
			"Items" 			=> array("shopoffer", 	"isNew" => false, "isPage" => true),
			"css"			=> "btn-info"
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
		<link rel="stylesheet" href="./css/buttons.css">
		<link rel="stylesheet" href="./css/forms.css">
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

		<div class="main">
			<!-- COUNTDOWN TIMER SECTION -->
			<div id="countDownTimer" data-date="<?=$countDown?>" class="well"></div>
			<!-- COUNTDOWN TIMER SECTION END  -->
			<div class="top">
				<ul>
					<?php foreach($menu_items as $category => $items) { ?>
						<li><a class="<?=$items["css"]?>"><?=$category?></a>
							<ul>
								<?php foreach($items as $item => $properties){ if($item === "css") continue; ?>
										<li><a href="<?=($properties["isPage"] == true ? $url_param:"").$properties[0]?>"><div class="menuItemTxt ellipsis"><?=$item?></div><?=($properties["isNew"] ? "<span class=\"new\">NEW!</span>":"")?></a> </li>
								<?php } ?>
							</ul>
						</li>
					<?php } ?>
				</ul>
			</div>
			<div class="bottom">
				<div class="leftPane">
					<div class="well">
						<div class="well_header">SEARCH</div>
						<div class="well_body">
							<form class="loginForm" action="index.html" method="post">
								<input type="text" name="accountLogin" placeholder="e.g: Fapus Maximus">
								<button class="buttonSearch" type="submit" name="login">search</button>
							</form>
						</div>
					</div>
					<div class="well">
						<div class="well_header">LOGIN</div>
						<div class="well_body">
							<form class="loginForm" action="index.html" method="post">
								<input type="text" name="accountLogin" placeholder="••••••••">
								<input type="password" name="passwordLogin" value="••••••••">
								<button class="buttonLogin" type="submit" name="login">Login</button>
							</form>
						</div>
					</div>
					<div class="well">
						<div class="well_header">EVENTS</div>
						<div class="well_body">
							<table class="events">
								<tr><td><img width="64" height="64" src="./img/zombie.png" alt=""></td>
									<td>
										<div>Zombie Event</div>
										<div>0d 0h 0m 0s</div>
									</td>
								</tr>
								<tr><td><img width="64" height="64" src="./img/fire.gif" alt=""></td>
									<td>
										<div>Zombie Event</div>
										<div>0d 0h 0m 0s</div>
									</td></tr>
								<tr><td><img width="64" height="64" src="./img/fist.png" alt=""></td>
									<td>
										<div>Zombie Event</div>
										<div>0d 0h 0m 0s</div>
									</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="well">
						<div class="well_header">TOP 5 KILLERS</div>
						<div class="well_body">
							<table class="top5">
								<tr><td>#</td><td>Name</td></tr>
								<tr><td>1</td><td>Faperino Masterino</td></tr>
								<tr><td>2</td><td>Ben isAho</td></tr>
								<tr><td>3</td><td>Becky Lemmesmash</td></tr>
								<tr><td>4</td><td>Michael Italicson</td></tr>
							</table>
						</div>
					</div>
					<div class="well">
						<div class="well_header">FOLLOW US</div>
						<div class="well_body">
							<div class="sm_holder">
								<a href="<?=$follow[0]?>" target="_blank"><div class="sm_icon icon_tw"><i class="fa fa-twitter fa-2x"></i></div></a>
								<a href="<?=$follow[1]?>" target="_blank"><div class="sm_icon icon_fb"><i class="fa fa-facebook fa-2x"></i> </div></a>
								<a href="<?=$follow[2]?>" target="_blank"><div class="sm_icon icon_yt"><i class="fa fa-youtube fa-2x"></i></div></a>
							</div>

						</div>
					</div>

				</div>
				<div class="rightPane">
					<div class="well">
						<div class="well_header">
							Some random title
						</div>
						<div class="well_body">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
					</div>
					<div class="well">
						<div class="well_header">
							Some random title
						</div>
						<div class="well_body">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
					</div>
				</div>
			</div>
		</div>

	</body>
</html>
<!--
	Author: Blackwolf (Snavy on otland)

	Otland: https://otland.net/members/snavy.155163/
	Facebook: http://www.facebook.com/idont.reallywolf.1
	Twitter: @idontreallywolf
-->
