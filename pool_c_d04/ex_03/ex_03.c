//#include<stdio.h>

int my_putchar(char c)
{
  write(1, &c, 1);
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

/*int main()
{
  return (my_strlen("Geckos"));
  }*/
