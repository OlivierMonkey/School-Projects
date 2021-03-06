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
  dest[i] = '\0';
  return (dest);
}

char *my_strdup( char *str)
{
  int size;
  char *res;

  size = my_strlen(str);
  res = malloc (size * sizeof(char)+1);
  res = my_strcpy(res, str);
  //printf("%s\n", res);
  return(res);
}

/*int main()
{
  char string[] = "hello";
  char *result;
  
  //string = "hello";
  result = my_strdup(string);
  free(result);
  }*/
