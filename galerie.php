<html>
	<head>
		<link type="text/css" rel="stylesheet" href="./css/main.css"/>
		<script type="text/javascript" src="./js/jquery.js"></script>
		<script type="text/javascript" src='./js/main.js'></script>
		
		
		<script type="text/javascript" src="./js/coin-slider.min.js"></script>
		<link rel="stylesheet" href="./css/coin-slider-styles.css" type="text/css" />
		<title>
			Galerie
		</title>
		<script type="text/javascript">
			$(document).ready(function() {
			
			
				$('#coin-slider').coinslider({width: 600, height: 500,delay: 3000,hoverPause: true });
			});
		</script>
	</head>
	<body id='bodyIndex' class='CSS_body'>
		<div id='web_content' class='CSS_web_content'>
			<?php include ('./template/entete.tpl.php'); ?>
			<div id='contenu' class='CSS_contenu'>
				<div id='coin-slider'>
				<?php 
				$aListImage = array(
					array('desc 1', 'P1030374.jpg'),
					array('desc 2', 'P1030376.jpg'),
					array('desc 3', 'P1030378.jpg'),
					array('desc 4', 'P1030370.jpg'),
				);
				define('PATH_GALERIE', './image/galerie/');
				
				foreach($aListImage as $nKey => $aDataImage){
					echo $sUrlImage;
					$sBaliseImage ="<a href='#'>
							<img src=".PATH_GALERIE.$aDataImage[1].">
							<span>".$aDataImage[0]."
							</span>
						</a>";
					echo $sBaliseImage;
				}
				?>
				</div>
			</div>
			<div 'pageDePage' class='CSS_pageDePage'>
			</div>
			
		</div>
	</body>
</html>