var path = document.getElementsByTagName("canvas")[0];
var path1 = document.getElementsByTagName("button")[0];
var path2 = document.getElementsByTagName("button")[1];
var path3 = document.getElementsByTagName("button")[2];

var canvas = function draw()
{
    var ctx = path.getContext("2d");
    ctx.beginPath();
    ctx.moveTo(6, 6);
    ctx.lineTo(14, 10);
    ctx.lineTo(6, 14);
    ctx.closePath();
    ctx.strokeStyle = "white";
    ctx.stroke();    
}
canvas();

var song =  new Audio("http://www.sousound.com/music/healing/healing_01.mp3");

var play = function()
{
    song.play();
}
path.addEventListener("click", play);

var pause = function()
{
    song.pause();
}
path1.addEventListener("click", pause);

var stop = function()
{
    song.pause();
    song.currentTime = 0;
}
path2.addEventListener("click", stop);

var mute = function()
{
    song.muted = !song.muted;
}
path3.addEventListener("click", mute);
