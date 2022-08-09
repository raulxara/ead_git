<!DOCTYPE html>
<html>
<head>
	<title>EadPlug</title>
	<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>fonts-6/css/all.css">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>css3/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Keywords" content="curso, ead, ensino a distancia">
	<meta name="description" content="ensino a distância para aprimorar seus conhecimentos">
	<meta name="author" content="Raul Nascimento Cruz">
	<link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon" />
	

</head>
<body>
	<base base="<?php echo INCLUDE_PATH; ?>" />

<header>
	<div class="container">
		<div class="logo"><a style="text-decoration: none; color: white; font-weight: 400;" href="<?php echo INCLUDE_PATH; ?>"><i class="fa-solid fa-book-open-reader"></i> EADPlug</a></div>
		<ul class="nav-links right">
			<?php
					if(isset($_SESSION['login_aluno'])){
						echo '<li><a class="nav-link" href="'.INCLUDE_PATH.'?deslogar">loggout</a></li>';
					}
				?>
		</ul>
	<div class="clear"></div>
	</div>
</header>