var path = document.getElementsByTagName("div")[2];

class Hero {
    constructor(name, job, intelligence, strength)
    {
	this.name = name;
	this.job = job;
	this.intelligence = intelligence;
	this.strength = strength;
    }
    toString()
    {
	path.innerHTML += '"I am ' + this.name + ' the ' + this.job + ', I have ' + this.intelligence + ' intelligence points and ' + this.strength + ' strength points' + '"<br>'
    }
}
var mage = new Hero("amadeus", "mage", 10 , 3);
var warrior = new Hero("pontius", "warrior", 1, 8);
mage.toString();
warrior.toString();


var mess_appear = function()
{
    
}
path.addEventListener()
