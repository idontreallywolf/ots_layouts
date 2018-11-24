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
			"Report Bug(s)"	=> array("reportbug", 	"isNew" => false, 	"isPage" => true)
		),
		"Account" => array(
			"My Account" 		=> array("accountmanagement", "isNew" => false, "isPage" => true),
			"Create Account"	=> array("createaccount", 	"isNew" => false, "isPage" => true),
			"Downloads" 		=> array("downloads", 		"isNew" => false, "isPage" => true),
			"Recover Password"	=> array("loastaccount", 	"isNew" => true, "isPage" => true)
		),
		"Community" => array(
			"Characters" 		=> array("characters", 		"isNew" => false, "isPage" => true),
			"Who is online" 	=> array("whoisonline", 		"isNew" => false, "isPage" => true),
			"Highscores" 		=> array("highscores", 		"isNew" => false, "isPage" => true),
			"Houses" 			=> array("houses", 			"isNew" => false, "isPage" => true),
			"Latest Kills"		=> array("killstatistics", 	"isNew" => false, "isPage" => true),
			"Guilds"			=> array("guilds", 			"isNew" => false, "isPage" => true)
		),
		"Library" => array(
			"Server Rules" 	=> array("tibiarules", 		"isNew" => false, "isPage" => true),
			"Server Info" 		=> array("serverinfo", 		"isNew" => false, "isPage" => true),
			"Exp Table" 		=> array("experiencetable", 	"isNew" => true, "isPage" => true)
		),
		"Support" => array(
			"Team"			=> array("team", 	"isNew" => false, "isPage" => true),
			"testDLFILE"		=> array("file.txt", "isNew" => true, "isPage" => false)
		),
		"Shop" => array(
			"Donate"			=> array("donate", 		"isNew" => true, "isPage" => true),
			"Buy Points" 		=> array("buypoints", 	"isNew" => false, "isPage" => true),
			"Items" 			=> array("shopoffer", 	"isNew" => false, "isPage" => true)
		)
	);
?>
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
	</head>
	<body>
		<!-- Blurry Background -->
		<div class="backblur"></div>

		<!-- Main container -->
		<div class="main">
			<header>
				<div class="logo">
					Fapia OTS V-xx.yy
				</div>
			</header>

			<!-- COUNTDOWN TIMER SECTION -->
			<div class="alert-box alert-info alert-size3">Server starts in 00:00:00</div>
			<!-- COUNTDOWN TIMER SECTION END -->
			<!--
				LEFT div contains all of the categories as menu items
				do not touch unless you know what you're doing!
			-->

			<div class="left"> <!-- LEFT PANE -->
				<div class="well">
					<div class="header"></div>
					<div class="well_body">

						<form class="searchForm" action="index.html" method="post">
							<input type="text" name="player_name" placeholder="Search player ... ">
							<button type="submit" class="btn btn-success">
    								<i class="fa fa-search fa-2x"></i>
							</button>
						</form>
					</div>
					<div class="divider"></div>
					<div class="well_body">

						<form class="loginForm" action="index.html" method="post">
							<input type="password" name="accountLogin" placeholder="•••••••">
							<input type="password" name="passwordLogin" placeholder="••••••••">
							<button type="submit" class="btn btn-success">
    								<i class="fa fa-lock fa-2x"></i>
							</button>
						</form>
					</div>
				</div>


				<?php foreach($menu_items as $category => $items){ ?>
				<div class="well">
					<div class="header"> <?=$category?> </div>
					<div class="well_body">
						<ul>
							<?php  foreach($items as $item => $link){ ?>
								<li>
									<a href="<?=($link["isPage"] === true ? '/ots/?subtopic=':'')?><?=$link[0]?>">
										<div class="menuItemTxt">
											<?=$item?>
										</div>
										<?=($link["isNew"] == true ? "<span class=\"new\">NEW!</span>":"")?>
									</a>
								</li>
							<?php  }  ?>
						</ul>
					</div>
				</div>
				<?php } ?>
			</div> <!-- LEFT PANE END -->


			<!-- RIGHT div contains MAIN FEED. e.g: news -->
			<div class="right">
				<div class="well">
					<div class="header"><span class="fa fa-users"></span> Top 5 Guilds <span class="fa fa-users"></span> </div>
					<div class="well_body">
						<center>
						<table style="text-align:center;display:inline-block;">
							<tr><td><img src="./img/guild_default.jpg" width="64" height="64" alt=""></td></tr>
							<tr><td>GName1</td></tr>
							<tr><td>50 Kills</td></tr>
						</table>
						<table style="text-align:center;display:inline-block;">
							<tr><td><img src="./img/guild_default.jpg" width="64" height="64" alt=""></td></tr>
							<tr><td>GName1</td></tr>
							<tr><td>50 Kills</td></tr>
						</table>
						<table style="text-align:center;display:inline-block;">
							<tr><td><img src="./img/guild_default.jpg" width="64" height="64" alt=""></td></tr>
							<tr><td>GName1</td></tr>
							<tr><td>50 Kills</td></tr>
						</table>
						<table style="text-align:center;display:inline-block;">
							<tr><td><img src="./img/guild_default.jpg" width="64" height="64" alt=""></td></tr>
							<tr><td>GName1</td></tr>
							<tr><td>50 Kills</td></tr>
						</table>
						<table style="text-align:center;display:inline-block;">
							<tr><td><img src="./img/guild_default.jpg" width="64" height="64" alt=""></td></tr>
							<tr><td>GName1</td></tr>
							<tr><td>50 Kills</td></tr>
						</table>
					</center>
					</div>
				</div>

				<!-- Post container -->
				<div class="well">
					<div class="header">
						<span class="pull-left">Some News Header</span>
						<span class="pull-right" style="width:200px">
							<small>
								<span class="pull-left">Jan 15 - 2018</span>
								<span class="pull-right">Comments (0)</span>
							</small>
						 </span>
					</div>
					<div class="well_body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						<blockquote cite="http://www.google.com/">
							testst
						</blockquote>
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
				<!-- POST CONTAINER END -->

				<!-- FOOTER -->
				<footer>
					<div style="width:300px;" class="pull-left">
						Designed By <a href="http://www.facebook.com/idont.reallywolf.1" target="_blank">BlackWolf</a> 24-11-'18
					</div><br><br>
					<div class="socialMedia pull-left">
						<a href="<?=$follow["twitter"]?>"><div><i class="fa fa-twitter"></i></div></a>
						<a href="<?=$follow["facebook"]?>"><div><i class="fa fa-facebook"></i></div></a>
						<a href="<?=$follow["youtube"]?>"><div><i class="fa fa-youtube"></i></div></a>
					</div>
				</footer>
			</div> <!-- FEED(right) container END-->


		</div><!-- Main container END -->
	</body>
</html>
