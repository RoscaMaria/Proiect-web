var i = 0; 
var path = new Array();
//var timer = setInterval("slide()",2000);
var timer;

// LIST OF IMAGES 
path[0] = "http://themarklee.com/wp-content/uploads/2013/12/snowying.jpg"; 
path[1] = "http://themarklee.com/wp-content/uploads/2013/12/starlight.jpg"; 
path[2] = "http://themarklee.com/wp-content/uploads/2013/12/snowstorm.jpg";
path[3] = "http://themarklee.com/wp-content/uploads/2013/12/misty-winter-afternoon.jpg";

function slide() {
    document.getElementById("imgSlideshow").src = path[i];
    i = (i + 1)%path.length;
    //console.log(i);
}

function setTimer(){
    if (timer) {
       // stop 
       clearInterval( timer );
       timer=null;
    }
    else {
       timer = setInterval("slide()",2000);
    }
}

var imgNumber = 1;
var numberOfImg = path.length;

function previousImage() {
  if(imgNumber > 1) {
    imgNumber--;
  }
  else {
    imgNumber = numberOfImg;
  }

  document.getElementById("imgSlideshow").src = path[imgNumber-1];
  changeCounter(imgNumber, numberOfImg);
}

function nextImage(){
  if(imgNumber < numberOfImg){
    imgNumber++
  }
  else{
    imgNumber = 1
  }

  document.getElementById("imgSlideshow").src = path[imgNumber-1];
  changeCounter(imgNumber, numberOfImg);
}

function changeCounter(cur, total) {
    document.getElementById("counter").innerHTML = cur + "/" + total;
}
document.getElementById("counter").innerHTML = 1 + "/" + path.length;