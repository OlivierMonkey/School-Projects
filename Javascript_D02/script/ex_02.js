var nb_click = 0;
var test = document.getElementsByTagName("div")[2];
var count_click = function()
{
    nb_click += 1;
    this.innerHTML = nb_click;
}
test.addEventListener("click", count_click);
