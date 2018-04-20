$(document).ready(function(){
    var tile1 = Math.floor(Math.random()*16);
    var tile2 = Math.floor(Math.random()*16);
    console.log(tile1);
    console.log(tile2);
    $(".cell").eq(tile1).append(2);
    while (tile1 == tile2)
	var tile2 = Math.floor(Math.random()*16);
    $(".cell").eq(tile2).append(3);
    //$(".cell").append(4);
    $(".cell").each(function(index){
	
	if (index > 3)
	    console.log(index + ": " + $(this).text() );
    });
    $(document).keypress(function(e){
	switch(e.keyCode){
	case 38:
	    var uptile = (tile1)-4;
	    var text1 = ($(".cell").eq((tile1)-4).text());
	    var text2 = ($(".cell").eq((tile2)-4).text());
	    //var text = ($(".cell").text());
	    //console.log(text[]);
	    console.log("toto");
	    console.log(text1);
	    console.log(text2);
	    console.log(tile1);
	    console.log(tile2);
	    console.log("titi");
	    while (tile1 > 3 && text1=="")
	    {
		$(".cell").eq((tile1)-4).append(($(".cell").eq(tile1)).text());
		$(".cell").eq(tile1).empty();
		var text1 = ($(".cell").eq((tile1)-4).text());
		tile1 = (tile1) - 4;
	    }
	    while (tile2 > 3 && text2=="")
	    {
		$(".cell").eq((tile2)-4).append(($(".cell").eq(tile2)).text());
		$(".cell").eq(tile2).empty();
		var text2 = ($(".cell").eq((tile2)-4).text());
		tile2 = (tile2) - 4;
	    }
	    var newtile = Math.floor(Math.random()*16);
	    if (($(".cell").eq(newtile).text()) == "")
		  $(".cell").eq(newtile).append(4);
	    break;
	}
    });
});

/*$(document).ready(function(){
    $(document).keypress(function(e){
	switch(e.keyCode){
	case 38:
	    $(".cell").eq(case1).append(".cell").eq(0);
	    console.log("up");
	    break;
	case 40:
	    console.log("down");
	    break;
	case 37:
	    console.log("left");
	    break;
	case 39:
	    console.log("right");
	    break;
	}
    });
});

$(document).ready(function(){

});*/
