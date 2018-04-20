//var a = [2, 2, 3];
//var b = [2, 2];

function arrayIsEqual(a, b)
{
    i = 0;
    alen = a.length;
    blen = b.length;
    if (alen == blen)
    {
	while (i < alen)
	{
	    if (a[i] != b[i])
		return("False");
	    i++;
	}
	return("True");
    }
    else
	return("False");
}

console.log(arrayIsEqual(a, b));
