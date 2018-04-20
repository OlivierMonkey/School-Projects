#include <stdio.h>
#include <stdlib.h>
#include "rubiks.h"
#define EMPTY 0
#define BLOCKED 1

int *look_for_space(int **table, int *lines, int *columns, int value)
{
  int i;
  int j;
  int *res;

  res = malloc(2 * sizeof(int));
  i = 0;
  j = 0;
  while (j < 4)
    {
      while (i < 4)
	{
	  if (lines[i] == EMPTY && columns[j] == EMPTY && table[i][j] == value)
	    {
	      res[0] = i;
	      res[1] = j;
	      return (res);
	    }
	  i++;     
	}
      i = 0;
      j++;
    }
  free(res);
  return NULL;
}

void verif_return(int *ret)
{
  if (ret != NULL)
    printf("line :\t%d\nColumn :\t%d\n", ret[0], ret[1]);
  else
    printf("Nothing found in the given range.\n");
}


int main()
{
  int lines[4];
  int columns[4];
  int **tableau;

  tableau = init_tab();
  print_tab(tableau);

  lines[0] = BLOCKED;
  lines[1] = BLOCKED;
  lines[2] = EMPTY;
  lines[3] = BLOCKED;
  columns[0] = EMPTY;
  columns[1] = EMPTY;
  columns[2] = BLOCKED;
  columns[3] = BLOCKED;
  verif_return(look_for_space(tableau, lines, columns, 1));
  verif_return(look_for_space(tableau, lines, columns, 2));

}
