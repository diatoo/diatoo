  
  //chargement de swfobject � partir du CDN de google
  google.load("swfobject", "2.1");

  // Update a particular HTML element with a new value
  function updateHTML(elmId, value) {
	document.getElementById(elmId).innerHTML = value;
  }

  // chargement de la vid�o concern� dans le player
  function loadVideo(idvid) {
	var videoID = idvid;
	if(ytplayer) {
	  ytplayer.loadVideoById(videoID);
	}
  }

  // fonction appell� en cas d'erreur
  function onPlayerError(errorCode) {
	alert("An error occured of type:" + errorCode);
  }

  // fonction appell� au chargement du player
  function onYouTubePlayerReady(playerId) {
	ytplayer = document.getElementById("ytPlayer");
	ytplayer.addEventListener("onError", "onPlayerError");
  }

  // M�thode m�re qui va �tre appel�e en premi�re, pour charger la vid�o qu'il faut, l� o� il faut
  function loadPlayer() {
	var videoID = '3ST1swCmJWc';  // vid�o � charger
	var params = { allowScriptAccess: "always" }; // persmission d'acces d'un autre domaine
	var atts = { id: "ytPlayer", wmode:"transparent" };  // attributs du player
	// embed avec swf object
	swfobject.embedSWF("http://www.youtube.com/v/" + videoID + "&enablejsapi=1&playerapiid=player1",
	"videoDiv", //id de l'�l�ment contenant le player
	700, //largeur du player
	500, //hauteur du player
	"8", null, null, params, atts); 
  }
  function _run() {
	loadPlayer();
  }
  google.setOnLoadCallback(_run);
