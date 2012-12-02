$(document).ready(function(){
	$("ul.subnav").parent().append("<span></span>"); //Affiche simplement le bouton (ici repr�sent� par une fl�che) qui sert � afficher le menu d�roulant lorsque le JavaScript est activ�.
	$("ul.topnav li span").hover(function() { //Lorsque l'on clique sur le bouton (fl�che)...

	//Les �v�nements suivants sont appliqu�s � la sous-navigation (menu d�roulant).
	$(this).parent().find("ul.subnav").slideDown('fast').show(); //Ouverture du menu d�roulant lorsque l'on clique sur le bouton

	$(this).parent().hover(function() {
	}, function(){
		$(this).parent().find("ul.subnav").slideUp('slow'); //Lorsque l'on survol � l'ext�rieur du menu d�roul�, le menu d�roulant remontra
	});

	//Les �v�nements suivant s'appliquent lors du survol du bouton de la fl�che.
	}).hover(function() {
		$(this).addClass("subhover"); //Lorsque l'on survol, ajout de la classe "subhover"
	}, function(){	//On Hover Out
		$(this).removeClass("subhover"); //Lorsque l'on survol � l'ext�rieur, enl�ve la classe "subhover"
	});
});