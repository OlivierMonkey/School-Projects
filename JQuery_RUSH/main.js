$(document).ready(function(){
    var tile1 = Math.floor(Math.random()*16);
    var tile2 = Math.floor(Math.random()*16);
    $(".cell").eq(tile1).append(2);
    while (tile1 == tile2)
	var tile2 = Math.floor(Math.random()*16);
    $(".cell").eq(tile2).append(2);

    $(document).keypress(function(e){
	switch(e.keyCode){
	case 38:
	    $(".cell").each(function(tile){
		while ((tile >3) && ($(".cell").eq(tile-4)).text()=="")
		{
		    uptile = tile - 4;
		    $(".cell").eq(uptile).append(($(".cell").eq(tile)).text());
		    $(".cell").eq(tile).empty();
		    tile = tile - 4;
		}
		uptile = tile - 4;
		if ($(".cell").eq(tile).text() == $(".cell").eq(uptile).text())
		{
		    var res = parseInt($(".cell").eq(tile).text()) *2;
		    $(".cell").eq(uptile).empty();
		    $(".cell").eq(tile).empty();
		    $(".cell").eq(uptile).append(res);
		}
	    });
	    var newtile = Math.floor(Math.random()*16);
	    while (($(".cell").eq(newtile).text()) != "")
		var newtile = Math.floor(Math.random()*16);		
	    $(".cell").eq(newtile).append(2);	    	   
	    break;
	    
	case 40:
	    var i = 15;
	    while (i >= 0)
	    {
		var tile = i;
		while ((tile < 12) && ($(".cell").eq(tile+4)).text()=="")
		{
		    downtile = tile + 4;
		    $(".cell").eq(downtile).append(($(".cell").eq(tile)).text());
		    $(".cell").eq(tile).empty();
		    tile = tile + 4;
		}
		downtile = tile + 4;
		if ($(".cell").eq(tile).text() == $(".cell").eq(downtile).text())
		{
		    var res = parseInt($(".cell").eq(tile).text()) *2;
		    $(".cell").eq(downtile).empty();
		    $(".cell").eq(tile).empty();
		    $(".cell").eq(downtile).append(res);
		}
		i--;
	    }
	    var newtile = Math.floor(Math.random()*16);
	    while (($(".cell").eq(newtile).text()) != "")
		var newtile = Math.floor(Math.random()*16);		
	    $(".cell").eq(newtile).append(2);
	    break;

	case 37:
	    $(".cell").each(function(tile){
		if (0 <= tile && tile  <= 3)
		{
		    while ((tile > 0) && ($(".cell").eq(tile-1)).text()=="")
		    {
			lefttile = tile - 1;
			$(".cell").eq(lefttile).append(($(".cell").eq(tile)).text());
			$(".cell").eq(tile).empty();
			tile = tile - 1;
		    }
		}
	    	else if (4 <= tile && tile  <= 7)
		{
		    while ((tile > 4) && ($(".cell").eq(tile-1)).text()=="")
		    {
			lefttile = tile - 1;
			$(".cell").eq(lefttile).append(($(".cell").eq(tile)).text());
			$(".cell").eq(tile).empty();
			tile = tile - 1;
		    }
		}
	    	else if (8 <= tile && tile <= 11)
		{
		    while ((tile > 8) && ($(".cell").eq(tile-1)).text()=="")
		    {
			lefttile = tile - 1;
			$(".cell").eq(lefttile).append(($(".cell").eq(tile)).text());
			$(".cell").eq(tile).empty();
			tile = tile - 1;
		    }
		}
	   	else if (12 <= tile && tile <= 15)
		{
		    while ((tile > 12) && ($(".cell").eq(tile-1)).text()=="")
		    {
			lefttile = tile - 1;
			$(".cell").eq(lefttile).append(($(".cell").eq(tile)).text());
			$(".cell").eq(tile).empty();
			tile = tile - 1;
		    }
		}
		lefttile = tile - 1;
		if ($(".cell").eq(tile).text() == $(".cell").eq(lefttile).text())
		{
		    var res = parseInt($(".cell").eq(tile).text()) *2;
		    $(".cell").eq(lefttile).empty();
		    $(".cell").eq(tile).empty();
		    $(".cell").eq(lefttile).append(res);
		}
	    });
	    var newtile = Math.floor(Math.random()*16);
	    while (($(".cell").eq(newtile).text()) != "")
		var newtile = Math.floor(Math.random()*16);		
	    $(".cell").eq(newtile).append(2);	    
	    break;

	    case 39:
	    var i = 15;
	    while (i >= 0)
	    {
		var tile = i;
		if (15 >= tile && tile >= 12)
		{
		    while ((tile < 15) && ($(".cell").eq(tile+1)).text()=="")
		    {
			righttile = tile + 1;
			$(".cell").eq(righttile).append(($(".cell").eq(tile)).text());
			$(".cell").eq(tile).empty();
			tile = tile + 1;
		    }
		}
	    	else if (11 >= tile && tile  >= 8)
		{
		    while ((tile < 11) && ($(".cell").eq(tile+1)).text()=="")
		    {
			righttile = tile + 1;
			$(".cell").eq(righttile).append(($(".cell").eq(tile)).text());
			$(".cell").eq(tile).empty();
			tile = tile + 1;
		    }
		}
	    	else if (7 >= tile  && tile >= 4)
		{
		    while ((tile < 7) && ($(".cell").eq(tile+1)).text()=="")
		    {
			righttile = tile + 1;
			$(".cell").eq(righttile).append(($(".cell").eq(tile)).text());
			$(".cell").eq(tile).empty();
			tile = tile + 1;
		    }
		}
	   	else if (3 >= tile && tile >= 0)
		{
		    while ((tile < 3) && ($(".cell").eq(tile+1)).text()=="")
		    {
			righttile = tile + 1;
			$(".cell").eq(righttile).append(($(".cell").eq(tile)).text());
			$(".cell").eq(tile).empty();
			tile = tile + 1;
		    }
		}
		righttile = tile + 1;
		if ($(".cell").eq(tile).text() == $(".cell").eq(righttile).text())
		{
		    var res = parseInt($(".cell").eq(tile).text()) *2;
		    $(".cell").eq(righttile).empty();
		    $(".cell").eq(tile).empty();
		    $(".cell").eq(righttile).append(res);
		}
		i--;
	    }
	    var newtile = Math.floor(Math.random()*16);
	    while (($(".cell").eq(newtile).text()) != "")
		var newtile = Math.floor(Math.random()*16);		
	    $(".cell").eq(newtile).append(2);	    
	    break;

	}
    });
});
