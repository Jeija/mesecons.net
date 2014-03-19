<!DOCTYPE HTML>

<html>
<head>
	<title>Mesecons - Downloads</title>
	<link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
</head>
<body>
<div id = "article">
	<div class = "article-heading">Changelog</div>
V 0.1<br/>
>Mesecons<br/>
> Power Plants<br/>
> Blinky Plants<br/>
> Buttons<br/>
> Hydro Turbines<br/>
> Meselamps<br/>
> Movestones<br/>
> Removestones<br/>
> Silicon<br/>
> Solar Panels<br/><br/>
V 0.2<br/>
> Added Wirless Transmitters<br/>
> Added Wireless Receivers<br/>
> Added Wireless Inverters<br/>
> Added sticky movestone<br/>
> Changed texture for Hydro turbine<br/>
--> Big thx to jordan4ibanez for the new one<br/>
> Fixed multiple bugs<br/>
--> If the server crashes on startup or so, just have a look at a pos below<br/>
I'm talking about a known error there.<br/>
0.3 to 0.4 work from minetest 20111228,<br/><br/>
V 0.3<br/>
> Added Piston<br/>
> Added Sticky Piston<br/>
(Both anymations look quite strange yet, will be changed as soon as possible)<br/>
> Fixed bugs, esepcially those belonging to the wireless mesecon stuff<br/>
> Hatches (Download as an Addon in a post below)<br/>
> Added possibility for different mesecon rules<br/>
> Some internal changes<br/>
--> This Version is mostly an under-the-hood-update, expect more functionality (pressure plates) in version 0.31<br/>
V 0.31<br/>
> Pistons can also move blocks up/down (when signal is below/above)<br/>
> Sticky pistons only move back 1 block<br/>
> Added pressure plates (Wood+Stone)<br/>
> Added Object detector<br/>
> Bugfixes<br/>
> Receptors can specify mesecon rules<br/><br/>
V 0.4<br/>
> Standard nodes with inventory can't be moved by Pistons/Movestones<br/>
> Object detector only detects players<br/>
> Temperest's code added. See post below how to enable it.<br/>
> Bugfixes<br/>
For minetest Version 0.4.dev-20120122-1 and later,<br/><br/>
V 0.5<br/>
> Apply Itemdef Changes for new minetest versions<br/>
> Add Mesecon Torches (Thx to sfan55)<br/>
> Added Descriptions (for inventory)<br/>
> Object detector with sign below detects only Player who's name is on the sign<br/>
> Added Lightstone<br/>
> Bugfixes<br/><br/>
V 0.9<br/>
> Noteblock<br/>
> Mesecon Delayers<br/>
> Compatibility with latest minetest version<br/>
> Bugfixes<br/>
> Splitup of mod into modules, can be deleted & added by user<br/>
> Version number jump (mesecons are nearly finished. Will be 1.0 as soon as minetest 0.4 is stable.)<br/>

<div class = "article-heading">Changes since 0.41 and later - GitHub</div>
<b>Order: oldest to newest</b>
<?php
	// git will only clone the repo, if it does not already exist, otherwise just update
	shell_exec("git clone https://github.com/Jeija/minetest-mod-mesecons");
	shell_exec("cd minetest-mod-mesecons && git pull");
	echo ("<ul>");
	echo (shell_exec("cd minetest-mod-mesecons && git log --reverse --pretty=\<li\>%s\<\/li\>"));
	echo ("</ul>");
?>
</div>

</html>
