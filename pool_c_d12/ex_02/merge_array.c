#include <stdio.h>
#include <stdlib.h>

int *merge_array(int *arr1, int *arr2, int size1, int size2)
{
  int i;
  int j;
  int k;
  int size;
  int *res;

  i = 0;
  j = 0;
  k = 0;
  size = size1 + size2;
  res = malloc(size * sizeof(int));
  while (i < size1)
    {
      res[k] = arr1[i];
      i++;
      k++;
    }
  while (j < size2)
    {
      res[k] = arr2[j];
      j++;
      k++;
    }
  /* k = 0;
  while (k < size)
    {
      printf("%d,", res[k]);
      k++;
    }*/
  return(res); 
}


/*int main()
{
  int tab1[] = {0, 1, 2, 3, 4, 5, 6};
  int tab2[] = {1, 3, 5, 7, 9};

  merge_array(tab1, tab2, 7, 5);

  return(0);
  }*/
