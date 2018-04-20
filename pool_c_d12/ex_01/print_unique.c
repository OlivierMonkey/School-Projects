#include <stdio.h>
#include <stdlib.h>

void	print_unique(int *array, int size)
{
  int i;
  int j;
  int k;

  k = 0;
  i = 0;
  j = 0;
  while (j < size)
    {
      while (i < size)
	{
	  if (array[i] == array[j] && i != j)
	    {
	      break;
	    }
	  i++;
	}
      if (array[i] != array[j])
	{
	  if (k == 0)
	    {
	      k = 1;
	      printf("%d", array[j]);
	    }
	  else
	    printf(",%d", array[j]);
	}
      i = 0;
      j++;
    }
  printf("\n");
}

/*int main()
{
  int	tab[] = {0, 0, 2, 3, 4, 3, 6, 1};

  print_unique(tab, 8);
  return(0);
}*/
