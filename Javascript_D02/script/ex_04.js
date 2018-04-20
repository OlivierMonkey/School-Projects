var path = document.getElementsByTagName("div")[2];
var word = "";
var display_key = function(event)
{
    word = word + String.fromCharCode(event.charCode);
    res = word.substr(word.length - 42);
    path.innerHTML = res;
}
document.addEventListener("keypress", display_key);
