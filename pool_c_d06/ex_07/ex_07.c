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

char *my_reset_ptr(char **ptr)
{
  int i;

  i = 0;
  while (ptr[i])
    {
      free(ptr[i]);
      i++;
    }
  free(ptr);
  ptr = NULL;
}

/*int main()
{
  char *tab[] = {
    "Hello",
    "Students",
    NULL
  };
  char **str;

  str = malloc(3 * sizeof(*char) +1);
  while (tab[i])
    str[i] = malloc(((my_strlen(tab[i]))*sizeof(char) + 1);
  my_reset_ptr(tab);
  return(0);
}*/
