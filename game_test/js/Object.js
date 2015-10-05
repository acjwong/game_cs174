/**
    Handles objects throughout game by initializing and disposing them
*/

function Object() {
    this.x = 0;
    this.y = 0;
	this.z = 0;

    /**
        Initializes objects
        @param x the x coordinate
        @param y the y coordinate
        @param z the z coordinate to determine order to be drawn
    */
    this.InitObject = function(x, y, z) {
        this.x = x;
        this.y = y;
		this.z = z;
		
        objectManager.AddObject(this);
		
        return this;
    }

    /**
        Disposes/removes object through ObjectManger
    */
    this.DisposeObject = function() {
        objectManager.RemoveObject(this);
    }
}