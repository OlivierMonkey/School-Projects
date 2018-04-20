//#include "struct.h"
//#include "abs.h"
#include <stdlib.h>
#include <stdio.h>
#include <string.h>

int my_power_rec(int nb , int pow)
{
  int result;
 
  if (pow == 0)
    return (1);
  else if (pow < 0)
    return (0);
  if (pow == 1)
    return (nb);
  result = nb * (my_power_rec(nb, pow-1));
  return (result);
}

/*int main()
{
  printf("%d\n", my_power_rec(2 , 3));
}*/
