//#include <stdio.h>

char my_putchar(char c)
{
  write (1, &c, 1);
}

/*int my_putstr(char *str)
{
  int i;

  i = 0;
  while (str[i] != '\0')
    {
      my_putchar(str[i]);
      i++;
    }
}*/

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


char *my_revstr(char *str)
{
  int i;
  int j;
  int temp;
  int size;
  
  i = 0;
  j = my_strlen(str) - 1;
  size = my_strlen(str);
  while(i < j)
    {
      temp = str[i];
      str[i] = str[j];  
      str[j] = temp;
      i++;
      j--;
      // my_putchar(str[i]);
    }
  return (str);
}



/*int main()
{
  char str[6] = "Hello";
  printf("%s\n", my_revstr(str));
  }*/

