/**
	CREDITS
	-------
	Design and Framework used/learned from
	Book : HTML 2D Platoformer
	Author : Aidan Temple

	Define assets and specs
*/
var frameTime = 0.05; // 50 frames per second
var enemyAmount = 100;
var object = null
//var removed = objectManager.RemoveObject(this);
var baseHealth = 100;
var health = 100;
var score = 0;

var player_idle = new Image();
player_idle.src = "sprites/character-idle.png";

var enemy_idle = new Image();
enemy_idle.src = "sprites/zombie-idle.png";

var bg = new Image();
bg.src = "images/BG.png";

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
	
	this.Initialise  = function(){
		var audio = new Audio('audio/bg-music.mp3');
		audio.play();
		//this.bg = new ScrollingBackground().InitScrollingBackground(bg, 0, 0, 1, 800, 600, 0.5);
		this.player = new Player().InitPlayer(player_idle, 0, 2, 0, 1, null);
		for (i = 0; i < enemyAmount; i ++)
			{
				var ranX = Math.floor((Math.random() * 500) + 1);
				var ranY = Math.floor((Math.random() * 3) + 2);
				enemyArray.push(new Player().InitPlayer(enemy_idle, ranX, ranY, 0, 0, this.player));
			}
	
		// function createEnemy(){
		// //for (i = 0; i < 10 ; i ++){
		// 	var ranX = Math.floor((Math.random() * 10) + 1);
		// 	var ranY = Math.floor((Math.random() * 3) + 2);
		// 	var newPlayer = new Player().InitPlayer(enemy_idle, ranX, ranY, 0, 0, this.player);
		// //}
  //  		}	

   		//setInterval(createEnemy, 1000);
    }	
	
}