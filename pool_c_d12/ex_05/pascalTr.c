#include <stdio.h>
#include <stdlib.h>

int **pascalTr(int size)
{
  int i;
  int x;
  int y;
  int tmp;
  int **tab;

  i = 0;
  y = 0;
  x = 0;
  tab = malloc(size * sizeof(int*));
  while ( i < size )
    {
      tab[i] = malloc((i + 1) * sizeof(int));
      i++;
    }
  while (y < size)
    {
      while (x < size)
	{
	  tab[y][x] = 1;
	  x++;
	}
      x = 0;
      y++;
    }
  tmp = 2;
  x = 1;
  while(x < (size-1))
    {
      y = tmp;
      while(y < (size))
	{
	  tab[y][x] = tab[y-1][x]+tab[y-1][x-1];
	  y++;
	}
      tmp++;
      x++;
    }
  return(tab);
}

/*int main(int argc, char **argv)
{
  int **res;
  int size;

  size = atoi(argv[1]);
  printf("%d\n", size);
  res = pascalTr(size);
  int max = 0;
  for (int i = 0; i < size; i++)
    {
      max++;
      for(int n = 0; n < max; n++)
	{
	  printf("%d", res[i][n]);
	}
      printf("\n");
    }
}*/
