<html>
	<head>
		<link type="text/css" rel="stylesheet" href="./css/main.css"/>
		<script type="text/javascript" src="./js/jquery.js"></script>
		<script type="text/javascript" src='./js/main.js'></script>
		
		
		<script type="text/javascript" src="./js/coin-slider.min.js"></script>
		<link rel="stylesheet" href="./css/coin-slider-styles.css" type="text/css" />
		<title>
			Acueil
		</title>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#coin-slider').coinslider({width: 600, height: 350,delay: 3000,});
			});
		</script>
	</head>
	<body id='bodyIndex' class='CSS_body'>
		<div id='web_content' class='CSS_web_content'>
			<?php include ('./template/entete.tpl.php'); ?>
			<div id='contenu' class='CSS_contenu'>
				<h1>le mot du president</h1>
				<div>
					<p style='float:left; width:20%'><img width='150px' height='150px' src='./image/bb_presi.jpg'></img></p>
					<p style='float:left; width:80%;text-align:left;'>� Dans l�opposition, l�AFCP n�a rien perdu de son utilit�. 
					Bien au contraire. En ce d�but de XIVe l�gislature, 
					il appara�t clairement que les collaborateurs des d�put�s de la droite
					et du centre ont plus que jamais besoin de se conna�tre et 
					de se parler. C�est pr�cis�ment l�objet de la r�union que nous tenons d�sormais une fois par mois, 
					� l�Assembl�e nationale, pour �changer sur les principaux textes de loi � l�ordre du jour. �</br>
					</p></br>
					<p style='height:3px;'>Malick NDIAYE</p>
				</div>
			
			</div>
			<div 'pageDePage' class='CSS_pageDePage'>
			</div>
			
		</div>
	</body>
</html>