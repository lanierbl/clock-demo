<!DOCTYPE html>
<html>
<head>

    <title>Clock - Lecture 3 Exercise</title>
	<!--      Include PHP logic file       -->
    <?php require 'logic.php' ?>
	
	<link rel='stylesheet' href='style.css' type='text/css'>
	
</head>

<body class=<?echo $time_of_day?>>

	<h1>It is <?php echo $curtime; ?></h1>
	<small>Time zone: <?php echo $curtimezone; ?></small>
	<br/>
	<img src='<?echo $imgbase?><?echo $time_of_day?>.png' alt = "">
	
</body>
</html>