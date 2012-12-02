$(document).ready(function(){
	$("ul.subnav").parent().append("<span></span>"); //Affiche simplement le bouton (ici représenté par une flèche) qui sert à afficher le menu déroulant lorsque le JavaScript est activé.
	$("ul.topnav li span").hover(function() { //Lorsque l'on clique sur le bouton (flèche)...

	//Les événements suivants sont appliqués à la sous-navigation (menu déroulant).
	$(this).parent().find("ul.subnav").slideDown('fast').show(); //Ouverture du menu déroulant lorsque l'on clique sur le bouton

	$(this).parent().hover(function() {
	}, function(){
		$(this).parent().find("ul.subnav").slideUp('slow'); //Lorsque l'on survol à l'extérieur du menu déroulé, le menu déroulant remontra
	});

	//Les événements suivant s'appliquent lors du survol du bouton de la flèche.
	}).hover(function() {
		$(this).addClass("subhover"); //Lorsque l'on survol, ajout de la classe "subhover"
	}, function(){	//On Hover Out
		$(this).removeClass("subhover"); //Lorsque l'on survol à l'extérieur, enlève la classe "subhover"
	});
});