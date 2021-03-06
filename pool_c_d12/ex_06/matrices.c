#include <stdio.h>
#include <stdlib.h>

int matrices_addition(int **table, int column_offset, int row_offset, int size, int direction)
{
  int i;
  int j;
  int sum;

  sum = 0;
  i = row_offset;
  j = column_offset;

  if (column_offset < size && row_offset < size && direction >=0 && direction <= 11)
    {
      if (direction == 0)
	{
	  while (i >= 0)
	    {
	      sum = table[i][j] + sum;
	      i--;
	    }
	}
      if (direction == 6)
	{
	  while (i < size)
	    {
	      sum = table[i][j] + sum;
	      i++;
	    }
	}
      if (direction == 3)
	{
	  while (j < size)
	    {
	      sum = table[i][j] + sum;
	      j++;
	    }
	}
      if (direction == 9)
	{
	  while (j >= 0)
	    {
	      sum = table[i][j] + sum;
	      j--;
	    }
	}
      if (direction == 1 || direction == 2)
	{
	  while (j < size && i >= 0)
	    {
	      sum = table[i][j] + sum;
	      j++;
	      i--;
	    }
	}
      if (direction == 4 || direction == 5)
	{
	  while (i < size && j < size)
	    {
	      sum = table[i][j] + sum;
	      i++;
	      j++;
	    }
	}
      if (direction == 7 || direction == 8)
	{
	  while (j >= 0 && i < size)
	    {
	      sum = table[i][j] + sum;
	      i++;
	      j--;
	    }
	}
      if (direction == 10 || direction == 11)
	{
	  while (i >= 0 && j >= 0)
	    {
	      sum = table[i][j] + sum;
	      i--;
	      j--;
	    }
	}
      return(sum);
}
  else
    return(0);
}


/*int main()
{
  int mat[5][5] =
    {
      {0, 1, 2, 3, 4},
      {5, 6, 7, 8, 9},
      {10, 11, 12, 13, 14},
      {15, 16, 17, 18, 19},
      {20, 21, 22, 23, 24}
    };

  int *tab[5];

  tab[0] = mat[0];
  tab[1] = mat[1];
  tab[2] = mat[2];
  tab[3] = mat[3];
  tab[4] = mat[4];
  printf("%d\n", matrices_addition(tab, 0, 0, 5, 3));
  printf("%d\n", matrices_addition(tab, 0, 0, 5, 6));
  printf("%d\n", matrices_addition(tab, 0, 0, 5, 0));
  printf("%d\n", matrices_addition(tab, 3, 3, 5, 11));
  printf("%d\n", matrices_addition(tab, 3, 3, 5, -2));
  printf("%d\n", matrices_addition(tab, 3, 22, 5, 2));
  return(0);
}*/
