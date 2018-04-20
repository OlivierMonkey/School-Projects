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

void my_show_str(char **str)
{
  int i;

  i = 0;
  while (str[i] != NULL)
    {
      printf("%s\n", str[i]);
      i++;
    }		   
}

/*int main()
{
  char *tab[] = {
    "Hello",
    "Students",
    NULL
  };

  my_show_str(tab);
  return(0);
  }*/
