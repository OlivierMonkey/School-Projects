#include <stdlib.h>
#include <stdio.h>

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
  int count;

  count = 0;
  while ( str[count] != '\0' )
    {     
      count++;
    }
  // printf("%d\n", count);
  return (count);
}

char *my_strcpy(char *dest, char *src)
{
  int i;

  i = 0;
  while (src[i] != '\0')
    {
      dest[i] = src[i];
      i++;
    }
  return (dest);
}

int main(int argc, char **argv)
{
  int i;

  i = 1;
  if (argc == 2)
    {
      if (atoi(argv[1]) == 0)
	{
	  my_putstr("Error.");
	  my_putchar('\n');
	}
      else if (atoi(argv[1]) < 0)
	{
	  my_putstr("Error.");
	  my_putchar('\n');
	}
      while (i <= atoi(argv[1]))
	{
	  my_putstr("Hello");
	  my_putchar('\n');
	  i++;
	}
    }
  else
    {
      my_putstr("Error.");
      my_putchar('\n');
    }
}
