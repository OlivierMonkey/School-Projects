var path = document.getElementsByTagName("div")[2];
var path2 = document.getElementsByTagName("select")[0];
var path3 = document.getElementsByTagName("button")[0];
var path4 = document.getElementsByTagName("button")[1];
var path5 = document.getElementsByTagName("section")[0];
var path6 = document.getElementsByTagName("body")[0];
var size = window.getComputedStyle(path5, null).getPropertyValue('font-size');
var fontSize = parseFloat(size);
var bg_color = function()
{
    var color = path2.value;
    path6.style.backgroundColor = color;
}
path2.addEventListener("change", bg_color);

var up_size = function()
{
    fontSize += 2;
    path5.style.fontSize = fontSize + "px";
}
path3.addEventListener("click", up_size);

var down_size = function()
{
    fontSize -= 2;
    path5.style.fontSize = fontSize + "px";
}
path4.addEventListener("click", down_size);
