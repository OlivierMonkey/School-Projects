#include <stdio.h>
#include <stdlib.h>
#include "rubiks.h"
//#define MAGIC_SQR_DBG_ 0xADe4Db33

void algo_line(int **table, int line)
{
  int i;
  int tmp;
  
  i = 0;
  tmp = table[line][i];
  while (i < 3)
    {
      table[line][i] = table[line][i+1];
      i++;
    }
  table[line][i] = tmp;
  printf("Rotate Left line %d.\n", line);
  print_tab(table);
}

void algo_column(int **table, int column)
{
  int i;
  int tmp;

  i = 0;
  tmp = table[i][column];
  while (i < 3)
    {
      table[i][column] = table[i+1][column];
      i++;
    }
  table[i][column] = tmp;
  printf("Rotate Top column %d.\n", column);
  print_tab(table);
}

void algo_square(int **table, int square)
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
  table[i][j]		= table[i+1][j];
  table[i+1][j]		= table[i+1][j+1];
  table[i+1][j+1]	= table[i][j+1];
  table[i][j+1]		= tmp;

  printf("Rotate Clockwise square %d.\n", square);
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
  }*/
