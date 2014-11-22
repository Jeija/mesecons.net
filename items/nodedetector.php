<?php include "../header.html";?>
<div id = "article">
	<div class = "article-heading">Node Detector</div><br/>
	<div class = "paragraph-heading">Craft recipe</div>
	<img src = "../crafts/nodedetector.png">
	<br/><br/>
	<div class = "paragraph-heading">Description</div>
	<div class = "text">
		The node detector is a receptor. It changes its state when either any node<br/>
		or a specific node is detected. Right-click it to set a nodename to scan for.<br/>
		It can also receive digiline signals. You can either send "GET" and it will<br/>
		respond with the detected nodename or you can send any other string and it will<br/>
		set this string as the node to scan for.<br/>
		Nodenames must include the mod they reside in, so for instance default:dirt, not just dirt.
	</div>
</div>
<?php include "../footer.html";?>
