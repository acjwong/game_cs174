/**
	Manages objects by loading and rendering them
*/
function ObjectManager() {
    this.objects = new Array();
	
    this.lastFrame = new Date().getTime();
	
    this.deltaX = 0;
    this.deltaY = 0;
	
    this.main = null;
	
    this.canvas = null;
    this.context = null;
	
	/**
		Initializes objects
	*/
    this.InitObjectManager = function() {
        objectManager = this;

        // initialize keyboard input (key up/down)
        document.onkeydown = function(event) {
            event.preventDefault();
            objectManager.keyDown(event);
        }

        document.onkeyup = function(event) {
            objectManager.keyUp(event);
        }

        this.canvas = document.getElementById('canvas');
        this.context = this.canvas.getContext('2d');

        this.main = new Main().Initialise();
        
        // Intervals to refresh the canvas to update game as it changes
        setInterval(function() { 
            objectManager.Draw(); 
        }, frameTime);
        
        return this;        
    }
	
	/**
		Add objects to array
	*/
	this.AddObject = function(Object) {
        this.objects.push(Object);
        this.objects.sort(function(a,b) {
            return a.z - b.z;
        })
    };

    /**
		Remove objects when finished using them
	*/
    this.RemoveObject = function(Object) {
        this.objects.removeObject(Object);
    }

    /**

    */
    this.keyDown = function(event) {
        for (obj in this.objects) {
            if (this.objects[obj].keyDown) {
                this.objects[obj].keyDown(event);
            }
        }
    }

    /**
    */
    this.keyUp = function(event) {
        for (obj in this.objects) {
            if (this.objects[obj].keyUp) {
                this.objects[obj].keyUp(event);
            }
        }
    }

    /**
    	Draw objects to canvas
    */
    this.Draw = function () {
        var frame = new Date().getTime();
        var deltaTime = (frame - this.lastFrame) / 1000;
        this.lastFrame = frame;

        // Clears canvas
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);

        for (obj in this.objects) {
            if (this.objects[obj].Update) {
                this.objects[obj].Update(deltaTime, this.context);
            }

            if (this.objects[obj].Draw) {
                this.objects[obj].Draw(this.context, this.deltaX, this.deltaY);
            }

        }

        this.context.drawImage(this.canvas, 0, 0);      
    };
}


Array.prototype.remove = function (a) {
    var rest = this.slice(a + 1 || this.length);
    
    if(a >= 0)
        this.length = a;

    return this.push.apply(this, rest);
};

Array.prototype.removeObject = function (object) {
    for (var i = 0; i < this.length; ++i)
    {
        if (this[i] === object)
        {
            this.remove(i);
            break;
        }
    }
}