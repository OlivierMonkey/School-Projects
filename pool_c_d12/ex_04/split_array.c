#include <stdio.h>
#include <stdlib.h>

int **split_array(int *arr, int size, int *new_size1, int *new_size2)
{
  int i;
  int j;
  int k;
  int counter_odd;
  int counter_even;
  int **number;

  i = 0;
  j = 0;
  k = 0;
  counter_odd = 0;
  counter_even = 0;
  while( i < size )
    {
      if (arr[i] %2 == 0)
	counter_odd++;
      else
	counter_even++;
      i++;
    }
  number = malloc(2 * sizeof(int*));
  *new_size1 = counter_odd;
  *new_size2 = counter_even;
  number[0] = malloc(counter_odd * sizeof(int));
  number[1] = malloc(counter_even * sizeof(int));
  i = 0;
  while ( i < size )
    {
      if(arr[i] %2 == 0)
	{
	  number[1][j] = arr[i];
	  j++;
	}
      else
	{
	  number[0][k] = arr[i];
	  k++;
	}
      i++;    
    }
  return(number);
}


/*int main()
{
  int i;
  int j;
  int tab[] = {0, 1, 2, 3, 4, 5, 6, 7, 9};
  int newtab1;
  int newtab2;
  int **res;
  i = 0;
  j = 0;
  res = split_array(tab, 9, &newtab1, &newtab2);
  //printf("%d", newtab1);
  while (i < newtab1)
    {
      printf("%d,", res[1][i]);
      i++;
    }
    }*/
