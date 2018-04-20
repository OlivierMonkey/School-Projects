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
  while (i < argc)
    {
    my_putstr(argv[i]);
    my_putchar('\n');
    i++;
    }
  if (argc == 1)
    {
      my_putchar('\n');
    }
}