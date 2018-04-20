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

int human_putstr(char *str)
{
  int i;

  i = 0;	       
  while(str[i])
    {
      my_putchar(str[i]);
      i++;
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

    human_putstr(argv[1]);
    my_putchar('\n');
    return(0);
}
