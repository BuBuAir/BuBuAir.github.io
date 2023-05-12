<?php
	require_once('common.php');
	checkUser();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title>BuBu Login System</title>
   <link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="main">
      <div class="caption">Toolbox</div>
      <div id="icon">&nbsp;</div>
      <div id="result">
		<?php echo $_SESSION['userName']; ?>! <br/>
		<p> 
</p>
		<p><a href="logout.php">Logout</a></p>
	  </div>	
	  <div id="source">BuBu Login System</div>
    </div>
</body>   
