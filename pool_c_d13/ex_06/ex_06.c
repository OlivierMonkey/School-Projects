#include <stdio.h>
#include <stdlib.h>
#include <time.h>


int my_putchar(char c)
{
  write(1, &c, 1);
}

int my_putstr(char *str)
{
  int i;

  i = 0;
  while (str[i])
    {
      my_putchar(str[i]);
      i++;
    }
}

int my_strlen(char *str)
{
  int i;

  i = 0;
  while(str[i])
    {
      i++;
    }
  return(i);
}

int double_human_putstr(char *str)
{
  int i;
  int j;
  int k;
  int size;
  int hsize;

  size = my_strlen(str);
  hsize = size/2;
  i = 0;
  if (size % 2 == 0 )
    j = hsize-1;
  else
    j = hsize;
  k = hsize;
  while(str[i])
    {
      my_putchar(' ');
      i++;
    }
  while(j >= 0 && k <= size)
    {
      i = j;
      my_putchar('\r');
      while(i > 0)
	{
	  my_putchar(' ');
	  i--;
	}
      i = j;
      while(i >= j && i <= k)
	{
	  my_putchar(str[i]);
	  i++;
	}
      j--;
      k++;
      sleep(1);
    }
}

int main(int argc,char **argv)
{   
    if (argc != 2)
      {
	my_putstr("enter a sentence\n");
	return(0);
      }

    double_human_putstr(argv[1]);
    my_putchar('\n');
    return(0);
}
