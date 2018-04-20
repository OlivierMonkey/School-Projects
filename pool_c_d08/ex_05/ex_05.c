//#include "struct.h"
//#include "abs.h"
#include <stdlib.h>
#include <stdio.h>
#include <string.h>

int my_power_it(int nb , int pow)
{
  int result;

  result = nb;
  if (pow == 0)
    return (1);
  else if (pow < 0)
    return (0);
  while (pow > 1)
    {
      result = result * nb;
      pow = pow -1;
    }  
}


/*int main()
{
  my_power_it(2 , 3);
  printf("%d\n", my_power_it(2 , 3));
}*/
