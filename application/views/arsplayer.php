<html>
<head>
<title>Show Arsenal Player</title>
</head>
<body>
	<h3>FW Position</h1>
	<?php 
		foreach ($FWplayers as $player)
		{
		    echo $player->name.' '.$player->lastname.'<br>'; 
		}
	?>
	<h3>MF Position</h1>
	<?php 
		foreach ($MFplayers as $player)
		{
		    echo $player->name.' '.$player->lastname.'<br>'; 
		}
	?>
	<h3>DF Position</h1>
	<?php 
		foreach ($DFplayers as $player)
		{
		    echo $player->name.' '.$player->lastname.'<br>'; 
		}
	?>
	<h3>GK Position</h1>
	<?php 
		foreach ($GKplayers as $player)
		{
		    echo $player->name.' '.$player->lastname.'<br>'; 
		}
	?>
</body>
</html>