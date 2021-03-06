#include <stdio.h>
#include <stdlib.h>
#include "rubiks.h"

int is_in_line(int **table, int line, int value)
{
  int i;
  int ret;

  i = 0;
  ret = 1;
  while (i < 4)
    {
      if (table[line][i] != value)
	ret = ret;
      else
	return(0);
      i++;
    }
  return(ret);
}

int is_in_col(int **table, int column, int value)
{
  int i;
  int ret;

  i = 0;
  ret = 1;
  while (i < 4)
    {
      if (table[i][column] != value)
	ret = ret;
      else
	return(0);
      i++;
    }
  return(ret);
}

/*int main()
{
  int **tableau;
  tableau = init_tab();
  // print_tab(tableau);
  algo_line(tableau, 0);
  algo_column(tableau, 0);
  algo_square(tableau, 0);

  algo_square_reverse(tableau, 0);
  algo_column_reverse(tableau, 0);
  algo_line_reverse(tableau, 0);
  
  printf("%d - %d\n", is_in_line(tableau, 0, 1), is_in_col(tableau, 2, 3));
  printf("%d - %d\n", is_in_line(tableau, 3, 1), is_in_col(tableau, 2, 0));
  
}*/
