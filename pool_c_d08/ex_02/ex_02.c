#include "struct.h"
#include <stdlib.h>
#include <stdio.h>

void my_init(t_struct *identity)
{
  identity->id = 0;
  identity->str = NULL;
}

/*int main()
{
  t_struct struc;

  my_init(&struc);
  
  printf("%d\n", struc.id);
  }*/
