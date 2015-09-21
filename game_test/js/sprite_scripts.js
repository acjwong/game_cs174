var canvas, context, sprites,
    width = 500,
    height = 400,
    rightKey = false,
    leftKey = false,
    upKey = false,
    downKey = false,
    ship_x = (width / 2) - 25, ship_y = height - 85, ship_w = 65, ship_h = 85,
    ship_movementDelta = 5,
    ship_xMin = 0,
    ship_xMax = width - ship_w,
    ship_yMin = 0,
    ship_yMax = height - ship_h,
    srcX = 10, srcY = 10;

function clearCanvas() {
  context.clearRect(0,0,500,400);
}
function drawShip() {
  moveShip();
  context.drawImage(sprites,srcX,srcY,ship_w,ship_h,ship_x,ship_y,ship_w,ship_h);
  if (rightKey == false || leftKey == false) {
    srcX = 10;
  }

  if(upKey == false || leftKey == false) {
    srcY = 10;
    context.drawImage(sprites,srcX,srcY,ship_w,ship_h,ship_x,ship_y,ship_w,ship_h);
  }
}
function moveShip(){
    if (rightKey) {
	if((ship_x + ship_movementDelta) <= ship_xMax){
	    ship_x += ship_movementDelta;
	}
	srcX = 83;
    } else if (leftKey) {
	if((ship_x - ship_movementDelta) >= ship_xMin){
	    ship_x -= ship_movementDelta;
	}
	srcX = 156;
    } else if (upKey) {
	if((ship_y - ship_movementDelta) >= ship_yMin){
	    ship_y -= ship_movementDelta;
	}
	srcY = 156;
    } else if (downKey) {
	if((ship_y + ship_movementDelta) <= ship_yMax){
	    ship_y += ship_movementDelta;
	}
	srcY = 83;
    }
}

function loop() {
  clearCanvas();
  drawShip();
}

function keyDown(e) {
  if (e.keyCode == 39) rightKey = true;
  else if (e.keyCode == 37) leftKey = true;
  else if (e.keyCode == 38) upKey = true;
  else if (e.keyCode == 40) downKey = true;
}

function keyUp(e) {
  if (e.keyCode == 39) rightKey = false;
  else if (e.keyCode == 37) leftKey = false;
   else if (e.keyCode == 38) upKey = false;
  else if (e.keyCode == 40) downKey = false;
}

$('.gamelayer').hide();
$('#gamestartscreen').show();

function showLevelScreen() {
    $('.gamelayer').hide();
    $('#canvas').show(.0000009);
}

function init() {
  showLevelScreen();  
  canvas = document.getElementById('canvas');
  context = canvas.getContext('2d');
  sprites = new Image();
  sprites.src = 'images/ships.png';
  setInterval(loop, 1000/30);
  document.addEventListener('keydown', keyDown, false);
  document.addEventListener('keyup', keyUp, false);
}




