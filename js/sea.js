// svg animated waves, drawing and animation functions
function Waves( $canvas, $width, $height ){
    this.numberOfWaves = 3;
    this.waveGap = 5;                       /* y distance between waves  parseInt(Waves.width/this.numberOfWaves)*/
    this.width = Waves.width = $width;
    this.height = Waves.height = $height;
    Waves.globalY = Waves.height/2;                      /* y starting point for waves*/
    this.move = 0;                          /* vertical movement increment */    
    
    this.ctx = $canvas.getContext( '2d' );
   
    this.wavesArray = new Array();
   
    this.beginingY = Waves.height / 3;
    
    while(this.numberOfWaves--){
        this.colour = 87+", "+153+", "+255;
        var alpha = 0.3;
        if (this.numberOfWaves == 0) {
          alpha = 1;
          this.colour = 87 +", "+ 153 +", "+ 255;
        }
        this.wavesArray.push(new Wave($canvas, this.beginingY, this.colour, alpha));
        this.beginingY += this.waveGap;
        // console.log(this.beginingY);
    }
   
    this.update = function(){
        var bL = this.wavesArray.length;
        while( bL-- ){
            this.wavesArray[ bL ].update( );
        }
        // Waves.globalY += this.move;
        // if(Waves.globalY > (Waves.height / 2)-50){
        //     this.move = -1;
        // }else if(Waves.globalY < -(Waves.height / 2)){
        //     this.move = 1;
        // }
    }
   
    this.draw = function(){
        this.ctx.save();
        var bL = this.wavesArray.length;
        while( bL-- ){
            this.wavesArray[ bL ].draw( );
        }
        this.ctx.restore();
    }
}

function Wave( $canvas, $y, $colour, $alpha ){
    this.ctx = $canvas.getContext( '2d' );
    this.force = 0;       /* for the update*/
    this.wavePower = 40;    /* relates to how much the wave rises and lowers*/
    this.count = $y;
    this.y = $y + Waves.globalY;
    this.colour = "rgba("+$colour+", "+$alpha+")";
   
    this.update = function(){
        this.y = $y + Waves.globalY;
        this.force = Math.sin(this.count);
        this.count += 0.3;
        this.ctx.clearRect(0, 0, Waves.width,Waves.height);
    }
   
    this.draw = function(){
        this.ctx.fillStyle = this.colour;
        var sine = this.wavePower * this.force
        this.ctx.beginPath();
        this.ctx.moveTo(0, this.y);
        this.ctx.quadraticCurveTo(Waves.width*(1/16), this.y + sine, Waves.width*(2/16), this.y);
        this.ctx.quadraticCurveTo(Waves.width*(3/16), this.y - sine, Waves.width*(4/16), this.y);
        this.ctx.quadraticCurveTo(Waves.width*(5/16), this.y + sine, Waves.width*(6/16), this.y);
        this.ctx.quadraticCurveTo(Waves.width*(7/16), this.y - sine, Waves.width*(8/16), this.y);
        this.ctx.quadraticCurveTo(Waves.width*(9/16), this.y + sine, Waves.width*(10/16), this.y);
        this.ctx.quadraticCurveTo(Waves.width*(11/16), this.y - sine, Waves.width*(12/16), this.y);
        this.ctx.quadraticCurveTo(Waves.width*(13/16), this.y + sine, Waves.width*(14/16), this.y);
        this.ctx.quadraticCurveTo(Waves.width*(15/16), this.y - sine, Waves.width*(16/16), this.y);
        this.ctx.lineTo(Waves.width, Waves.height);
        this.ctx.lineTo(0, Waves.height);
        this.ctx.lineTo(0, this.y);
        this.ctx.closePath();
        this.ctx.fill();

        //this.ctx.strokeStyle = "#5799FF";
        //this.ctx.lineWidth = 1;
        // this.ctx.moveTo(0,0);
        // this.ctx.lineTo(Waves.width, Waves.height);
        //this.ctx.stroke();
    }
}

// create a new canvas element inside a div (id:waveCanvas)
// and draw an animated svg with waves into canvas element
var canvas = null;
var waves = null;

function loadCanvas() {
        var waveCanvas = document.createElement('canvas');
        waveCanvas.id = "waveCanvas";
        var list = document.getElementById("header-div");
        list.insertBefore(waveCanvas, list.childNodes[0]); 
}

function drawWaveCanvas() {
    var waveCanvas = document.getElementById('waveCanvas'); 
    waveCanvas.width = window.screen.availWidth;
    waveCanvas.height = window.screen.availHeight;
    waves = new Waves(waveCanvas, window.screen.availWidth, window.screen.availHeight);
    setInterval( "run()", 80 );
}

function run(){
    waves.update();
    waves.draw();
}

window.addEventListener( 'load', loadCanvas, false );
window.addEventListener( 'load', drawWaveCanvas, false );


function launchFullScreen(element) {
    if(element.requestFullScreen) {
        element.requestFullScreen();
    } else if(element.mozRequestFullScreen) {
        element.mozRequestFullScreen();
    } else if(element.webkitRequestFullScreen) {
        element.webkitRequestFullScreen();
    }
}