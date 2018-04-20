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

int *my_up(int nbr)
{
  int *result; 
  
  result =  malloc(2 * sizeof(int));
  result[0] = nbr;
  result[1] = nbr*2;
  // printf("%d%d\n", result[0], result[1]);
  return(result);   
}

/*int main()
{
  int num;
  int *res;
  
  num = 3;
  res = my_up(num);
  free(res);
}*/
