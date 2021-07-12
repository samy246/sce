<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
 background-image: url("anii.jpg"); 
 
}
	</style>
</head>
<body>
<center>
<canvas id="box">
</canvas>

<div id="monitor">
</div>
</center>
</body>
</html>
<script>
	var text = "";
var canvas = document.getElementById("box");
var ctx = canvas.getContext("2d");

var c = 1.4;   //velo of wave
var t = 0;
var epsilon = 0.1;  
var PI = Math.PI;
var initAmp = 10;
var width = window.innerWidth;
var height = window.innerHeight;

var intervalTime = 20;  // ms
var deltaX = 10;
var deltaY = 10;
var deltaT = intervalTime * 0.001;

   //separate number of x
var N = Math.round(width / deltaX);
var M = Math.round(height / deltaY);    //separate no of y





var sizeX = 500;
var sizeY = 500;






var u = new Array(N);
var du = new Array(N);
for(let i = 0; i < u.length; i++){
  u[i] = new Array(M);
  du[i] = new Array(M);
  for(let j = 0; j < u[i].length; j++){
    let x = i/N * sizeX;      // set center of screen to the origin
    let y = j/M * sizeY;
    let flct = (Math.random() - 1/2);
    let r = euclidDist(x,y,1/2 * sizeX,1/2 * sizeY) + 20 * flct;
    u[i][j] = initAmp * bump(r/50);
    du[i][j] = 0;
  }
}






setInterval(function(){
  var innerHTML = '';
  width = window.innerWidth;
  height = window.innerHeight;
  sizeX = width;
  sizeY = height;
  
  t = t + deltaT;
  
  canvas.setAttribute('width',width);
  canvas.setAttribute('height',height);
  
  
  
  for(var i = 1; i < u.length-1; i++){
    for(var j = 1; j < u[i].length - 1; j++){
     
      var ddu = c**2 * ( secondOrderDiff(u[i-1][j],u[i][j],u[i+1][j],epsilon) + secondOrderDiff(u[i][j-1],u[i][j],u[i][j+1],epsilon) );
      
      du[i][j] = du[i][j] + ddu * deltaT;
    }
  }
      
 for(var i = 1; i < u.length - 1; i++){
    for(var j = 1; j < u[i].length - 1; j++){
      let x = sizeX/N * i + width/2 - sizeX/2;
      let y = sizeY/M * j + height/2 - sizeY/2;   
      
      
      u[i][j] = u[i][j] + du[i][j] * deltaT;
      
      let color = 100 * u[i][j];
      ctx.fillStyle = 'hsl(177,100%,' + color + '%)';
      ctx.fillRect(x,y,5,5);
      
      
    }
  }
  
  
  

  var text = '';

 

},intervalTime);



function innerProd(ax, ay, bx, by){
  var r = ax * bx + ay * by;
  return r;
}
  
  
function secondOrderDiff(a,b,c,epsilon){
  var dab = (b-a)/epsilon;
  var dbc = (c-b)/epsilon;
  var r = (dbc - dab)/epsilon;
  return r;
}

function euclidDist(ax, ay, bx, by){
  var r = Math.sqrt((ax-bx)**2 + (ay-by)**2);
  return r;
}

function bump(r){
  //bum function
  if(Math.abs(r) >= 1.0)return 0.0;
  var s = Math.exp(-(1/(1-r**2))) / Math.exp(-1);
  return s;
}
</script>