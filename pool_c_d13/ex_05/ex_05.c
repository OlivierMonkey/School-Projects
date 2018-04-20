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

int erase3_human_putstr(char *str)
{
  int i;
  int j;
  int k;
  int size;

  size = my_strlen(str) - 1;
  i = 0;
  j = 0;
  k = size;
  while(str[i])
    {
      my_putchar(str[i]);
      i++;
      sleep(1);
    }
  
  while(j <= (size/2) && k >= (size/2))
    {
      my_putchar('\r');
      str[j] = ' ';
      str[k] = ' ';
      i = j;
      i = 0;
      while(str[i])
	{
	  my_putchar(str[i]);
	  i++;
	}
      j++;
      k--;
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

    erase3_human_putstr(argv[1]);
    my_putchar('\n');
    return(0);
}
