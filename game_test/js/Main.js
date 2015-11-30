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

var baseHealth = 100;
var health = 100;
var score = 0;

var player_idle = new Image();
player_idle.src = "sprites/character-idle.png";

var enemy_idle = new Image();
enemy_idle.src = "sprites/zombie-idle.png";

var enemyArray = [];
var d = new Date();

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
		this.player = new Player().InitPlayer(player_idle, 0, 0, 0, 1, null);
		this.enemy = new Player().InitPlayer(enemy_idle, 5, 1, 0, 0, this.player);
		this.enemy1 = new Player().InitPlayer(enemy_idle, 8, 2, 0, 0, this.player);
		this.enemy2 = new Player().InitPlayer(enemy_idle, 9, 3, 0, 0, this.player);
		this.enemy3 = new Player().InitPlayer(enemy_idle, 6, 4, 0, 0, this.player);
		this.enemy4 = new Player().InitPlayer(enemy_idle, 7, 1, 0, 0, this.player);
		this.enemy5 = new Player().InitPlayer(enemy_idle, 11, 2, 0, 0, this.player);
		this.enemy6 = new Player().InitPlayer(enemy_idle, 10, 3, 0, 0, this.player);
		this.enemy7 = new Player().InitPlayer(enemy_idle, 12, 4, 0, 0, this.player);
		this.enemy8 = new Player().InitPlayer(enemy_idle, 15, 2, 0, 0, this.player);
		this.enemy9 = new Player().InitPlayer(enemy_idle, 16, 3, 0, 0, this.player);
		this.enemy10 = new Player().InitPlayer(enemy_idle, 16, 4, 0, 0, this.player);
		this.enemy11 = new Player().InitPlayer(enemy_idle, 17, 1, 0, 0, this.player);
		this.enemy12 = new Player().InitPlayer(enemy_idle, 19, 4, 0, 0, this.player);
		this.enemy13 = new Player().InitPlayer(enemy_idle, 17, 4, 0, 0, this.player);
		this.enemy14 = new Player().InitPlayer(enemy_idle, 20, 1, 0, 0, this.player);
		this.enemy15 = new Player().InitPlayer(enemy_idle, 21, 2, 0, 0, this.player);
		this.enemy16 = new Player().InitPlayer(enemy_idle, 24, 3, 0, 0, this.player);
		this.enemy17 = new Player().InitPlayer(enemy_idle, 25, 2, 0, 0, this.player);
		this.enemy18 = new Player().InitPlayer(enemy_idle, 26, 1, 0, 0, this.player);
		this.enemy19 = new Player().InitPlayer(enemy_idle, 26, 4, 0, 0, this.player);
		this.enemy20 = new Player().InitPlayer(enemy_idle, 27, 2, 0, 0, this.player);
		this.enemy21 = new Player().InitPlayer(enemy_idle, 27, 3, 0, 0, this.player);
		this.enemy22 = new Player().InitPlayer(enemy_idle, 28, 4, 0, 0, this.player);
		this.enemy23 = new Player().InitPlayer(enemy_idle, 30, 1, 0, 0, this.player);
		this.enemy24 = new Player().InitPlayer(enemy_idle, 41, 2, 0, 0, this.player);
		this.enemy25 = new Player().InitPlayer(enemy_idle, 43, 1, 0, 0, this.player);
		this.enemy26 = new Player().InitPlayer(enemy_idle, 46, 1, 0, 0, this.player);
		this.enemy27 = new Player().InitPlayer(enemy_idle, 49, 3, 0, 0, this.player);
		this.enemy28 = new Player().InitPlayer(enemy_idle, 50, 1, 0, 0, this.player);
		this.enemy29 = new Player().InitPlayer(enemy_idle, 51, 4, 0, 0, this.player);
		this.enemy30 = new Player().InitPlayer(enemy_idle, 53, 2, 0, 0, this.player);
		this.enemy31 = new Player().InitPlayer(enemy_idle, 54, 3, 0, 0, this.player);
		this.enemy32 = new Player().InitPlayer(enemy_idle, 55, 4, 0, 0, this.player);
		this.enemy33 = new Player().InitPlayer(enemy_idle, 56, 1, 0, 0, this.player);
		this.enemy34 = new Player().InitPlayer(enemy_idle, 61, 3, 0, 0, this.player);
		this.enemy35 = new Player().InitPlayer(enemy_idle, 61, 4, 0, 0, this.player);
		this.enemy36 = new Player().InitPlayer(enemy_idle, 64, 1, 0, 0, this.player);
		this.enemy37 = new Player().InitPlayer(enemy_idle, 67, 3, 0, 0, this.player);
		this.enemy38 = new Player().InitPlayer(enemy_idle, 67, 1, 0, 0, this.player);
		this.enemy39 = new Player().InitPlayer(enemy_idle, 69, 4, 0, 0, this.player);
		this.enemy40 = new Player().InitPlayer(enemy_idle, 70, 1, 0, 0, this.player);

		//this.player1 = new Player().InitPlayer(player_idle, 2, 2, 0, 1, null);
        return this;
    }	
}