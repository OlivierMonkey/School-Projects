#include <stdio.h>
#include <stdlib.h>


int magic_square(int *sqr)
{
  int i;
  int sum;

  i = 0;
  sum = sqr[0] + sqr[1] + sqr[2];		//line1

  if (sum != (sqr[3] + sqr[4] + sqr[5]))	//line2
    return(1);
  if (sum != (sqr[6] + sqr[7] + sqr[8]))	//line3		
    return(1);
  if (sum != (sqr[0] + sqr[3] + sqr[6]))	//col1
    return(1);
  if (sum != (sqr[1] + sqr[4] + sqr[7]))	//col2
    return(1);
  if (sum != (sqr[2] + sqr[5] + sqr[8]))	//col3
    return(1);
  if (sum != (sqr[0] + sqr[4] + sqr[8]))	//diag1
    return(1);
  if (sum != (sqr[2] + sqr[4] + sqr[6]))	//diag2
    return(1);

  return(0);
}

/*int main()
{
  int tab[] = {8, 1, 6, 3, 5, 7, 4, 9, 2};

  magic_square(tab);
  return(0);
}*/
