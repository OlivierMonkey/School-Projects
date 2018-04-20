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
  while (str[i]) // while (str[i]) ;
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
}

/*int main()
{
  char word1[5] = "abcd\0";
  char word2[5];

  my_strcpy( word2, word1);
  printf("%s\n", word2);
  }*/
