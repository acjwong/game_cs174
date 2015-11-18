/**
	CREDITS
	-------
	Design and Framework used/learned from
	Book : HTML 2D Platoformer
	Author : Aidan Temple

	Define assets and specs
*/
var frameTime = 0.05; // 50 frames per second

var objectManager = null;

var player_idle = new Image();
player_idle.src = "sprites/character-idle.png";

/**
	Loads up game on page startup
*/
window.onload = function() {
	new ObjectManager().InitObjectManager();
}

/**
	Initialize assets
*/
function Main() {
	this.Initialise = function() {
		this.player = new Player().InitPlayer(player_idle);
        return this;
    }
}