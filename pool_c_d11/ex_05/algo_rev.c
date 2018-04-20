#include <stdio.h>
#include <stdlib.h>
#include "rubiks.h"


void algo_line_reverse(int **table, int line)
{
  int i;
  int tmp;
  
  i = 3;
  tmp = table[line][i];
  while (i > 0)
    {
      table[line][i] = table[line][i-1];
      i--;
    }
  table[line][i] = tmp;
  printf("Rotate Right line %d.\n", line);
  print_tab(table);
  
}

void algo_column_reverse(int **table, int column)
{
  int i;
  int tmp;

  i = 3;
  tmp = table[i][column];
  while (i > 0)
    {
      table[i][column] = table[i-1][column];
      i--;
    }
  table[i][column] = tmp;
  printf("Rotate Down column %d.\n", column);
  print_tab(table);
  
}

void algo_square_reverse(int **table, int square)
{
  int i;
  int j;
  int tmp;

  if (square == 0)
    {
      i = 0;
      j = 0;
    }
  if (square == 1)
    {
      i = 0;
      j = 2;
    }
  if (square == 2)
    {
      i = 2;
      j = 0;
    }
  if (square == 3)
    {
      i = 2;
      j = 2;
    }
  tmp			= table[i][j];
  table[i][j]		= table[i][j+1];
  table[i][j+1]		= table[i+1][j+1];
  table[i+1][j+1]	= table[i+1][j];
  table[i+1][j]		= tmp;

  printf("Rotate Counter Clockwise square %d.\n", square);
  print_tab(table);
  
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
  
}*/
