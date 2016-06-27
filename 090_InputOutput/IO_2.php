<?php

$fileDir = dirname ( __FILE__ );
$fileResource = opendir ( $fileDir );

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

	<p>File list:</p>
	<ul>
	<?php while ($item = readdir($fileResource)) :
	//讀值 ?>
	
		<li><?php echo $item; ?></li>
	<?php endwhile; ?>
	</ul>

<?php closedir($fileResource); ?>

</body>
</html>
