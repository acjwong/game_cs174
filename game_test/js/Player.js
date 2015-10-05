/**
	The player object
*/
function Player() {
	this.velocity = 100;
	this.up = false;
	this.down = false;
	this.left = false;
	this.right = false;
    this.space = false;
	/**
		Initializes the player through DrawableObject
	*/
	this.InitPlayer = function() {
    	this.InitDrawableObject(player_idle, 5, 450, 0);
    	
    	return this;
   }

   /**
   		Determines if user pressed arrow keys
   */
   this.keyDown = function(key) {
   		if (key.keyCode == 38 || key.keyCode == 87) {
            this.up = true;
        }
		
		if (key.keyCode == 40 || key.keyCode == 83){
            this.down = true;
        }
		
        if (key.keyCode == 37 || key.keyCode == 65) {
            this.left = true;
        }
		
        if (key.keyCode == 39 || key.keyCode == 68) {
            this.right = true;
        }

        // Starts animation
        if (key.keyCode == 32 && this.space == false) {
            this.space = true;
        }
        else {
            this.space = false;
        }

    }

    /**
   		Determines if user is not pressing arrow keys
    */
    this.keyUp = function(key) {
		if (key.keyCode == 38 || key.keyCode == 87) {
            this.up = false;
        }
		
		if (key.keyCode == 40 || key.keyCode == 83) {
            this.down = false;
        }
	
        if (key.keyCode == 37 || key.keyCode == 65) {
            this.left = false;
        }

        if (key.keyCode == 39 || key.keyCode == 68) {
            this.right = false;
        }
    }

    /**
    	Updates Player's movement
    */
    this.Update = function (deltaTime, context) {
    	if(this.up) {
    		this.y -= this.velocity * deltaTime;
    	}

    	if(this.down) {
    		this.y += this.velocity * deltaTime;
    	}

    	if(this.left) {
    		this.x -= this.velocity * deltaTime;
    	}

    	if(this.right) {
    		this.x += this.velocity * deltaTime;
    	}

        if(this.space) {
            this.x += this.velocity * deltaTime;
        }
    }
}

Player.prototype = new DrawableObject;