/*#include <stdlib.h>
  #include <stdio.h>*/

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

char *my_concat_str(char **str)
{
  int i;
  int j;
  int m;
  int size;
  char *res;
  
  i = 0;
  j = 0;
  m = 0;
  size = 0;

  while (str[i])
    {
      size = my_strlen(str[i]) + size;
      i++;
    }
  res = malloc(size * sizeof(char) +1);
  i = 0;
  while (str[i])
    {
      res[j] = str[i][m];
      while (str[i][m])
	{
	  res[j] = str[i][m];
	  m++;
	  j++;
	}
      m = 0;
      i++;
    }
  return (res);
}

/*int main()
{
  char *tab[] = {
    "Hello",
    "Students",
    NULL
  };
  char *str;
  
  str = my_concat_str(tab);
  my_putstr(str);
  return(0);
  free(str);
}*/
