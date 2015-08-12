/**
 * creates an analaog meter
 */
function Meter(){


    var canvas = null;
    var context = null;

    this.pivotCenter = [0 , 0];
    this.pivotR = 0;
    this.indicR = 0;

    var ground = this;

    /**
     * @param id
     * @param meterImage
     * @param angle
     */
    this.setAngle = function(id,meterImage,angle)
    {
        canvas = document.getElementById(id);
        context = canvas.getContext('2d');
        var imageObj = new Image();

        imageObj.onload = function() {

            context.clearRect ( 0 , 0 , canvas.width, canvas.height );
            context.drawImage(imageObj, 0, 0, canvas.width, canvas.height);

            if (canvas.getContext){

                ground.pivotCenter = [canvas.width /2, canvas.height*0.92];
                ground.pivotR = canvas.height*0.01;
                ground.indicR = canvas.height*0.9;

                ground.setIndicator(angle);

            }
        };
        imageObj.src = meterImage;
    };

    this.setIndicator = function(dgrs){
        var pi = 22/7;
        var theta = dgrs*pi/180;

        var pivotLeft = [-Math.sin(theta)*ground.pivotR  + ground.pivotCenter[0] , Math.cos(theta)*ground.pivotR + ground.pivotCenter[1]];
        var pivotRight = [Math.sin(theta)*ground.pivotR +ground.pivotCenter[0], -Math.cos(theta)*ground.pivotR + ground.pivotCenter[1]];
        var indicatorCordi = [Math.cos(pi-theta)*ground.indicR + ground.pivotCenter[0] , -Math.sin(pi-theta)*ground.indicR + ground.pivotCenter[1]];

        context.beginPath();
        context.moveTo(pivotLeft[0] , pivotLeft[1]);
        context.lineTo(pivotRight[0] , pivotRight[1]);
        context.lineTo(indicatorCordi[0] ,  indicatorCordi[1]);
        context.fill();


    };
}