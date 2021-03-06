#include "struct.h"
#include "abs.h"
#include <stdlib.h>
#include <stdio.h>
#include <string.h>

void my_init(t_struct *identity, int number, char *copy)
{
  identity->id = MY_ABS(number);
  identity->str = strdup(copy);
}

/*int main()
{
  t_struct test;

  my_init(&test, -7, "french");
  
  printf("%d %s\n", test.id, test.str);
}*/

/*t_struct *new_identity(int id, char *str);
{
  t_struct *identity;
  
  identity = malloc(sizeof(t_struct));
  if (identity == NULL)
    return (NULL);
  identity->id = MY_ABS(id);
  identity->str = my_strdup(str);
  return (identity); 
}

int free_identity(t_struct *identity)
{
  if (identity == NULL)
    return (1);
  if (identity->str != NULL)
    free(identity->str);
  free(identity);
  return (0);
  }*/
