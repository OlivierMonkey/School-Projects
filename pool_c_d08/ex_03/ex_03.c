#include "abs.h"
#include <stdlib.h>
#include <stdio.h>

int main()
{
  int num;
  
  num = -7;
  MY_ABS(num);
  
  printf("%d\n", MY_ABS(num));
}
