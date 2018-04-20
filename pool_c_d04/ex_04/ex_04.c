#include<stdio.h>

int my_putchar(char c)
{
  write(1, &c, 1);
}

void my_sort_int_tab(int *tab, int size)
{
  int i;
  int j;
  int min;
  int temp;

  i = 0;
  j = 0;
  min = 0;
  while ( i < size )
    {
      while ( j < size )
	{
	  if (tab[j] < tab[min])
	    {
	      min = j;
	    }
	  j++;
	}
      temp = tab[i];
      tab[i] = tab[min];
      tab[min] = temp;
      i++;
      j = i;
      min = i;
    }  
}

/*int main()
{
  int test[]={6,1,4,2,8};
  int nb1;
  int i;

  nb1 = 5;
  i = 0;

  my_sort_int_tab(test, nb1);
  while (i < nb1)
    {
      my_putchar(test[i]+48);
      i++;
    }
		 
    return (0);
    }*/
