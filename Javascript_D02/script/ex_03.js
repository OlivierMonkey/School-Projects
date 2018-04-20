
var test = document.getElementsByTagName("div")[2];
var prompt_name = function()
{
    var person = "";
    while (person == "")
    {
	person = prompt("Enter your name");
    }
    if (person != null)
    {
	var conf = confirm("Are you sure that " + person + " is your name?");
	if (conf == true)
	{
	    this.innerHTML = "Hello " + person + " !";
	    alert("Hello " + person + " !");
	}
    }
}
test.addEventListener("click", prompt_name);

