//#include <stdio.h>

/*char my_putchar(char c)
{
  write (1, &c, 1);
}*/

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


int my_strcmp(char *str1, char *str2)
{
  int i;
  int res;
  int size;
  
  i = 0;
  res = 0;
  if (my_strlen(str1) <= my_strlen(str2))
    {
      size = my_strlen(str2);
    }
  else if (my_strlen(str1) >= my_strlen(str2))
    {
      size = my_strlen(str1);
    }
  while (str1[i] == str2[i] && i <= size)
    {      
      i++; 
    }
  if  (str1[i] != str2[i])
    {
      res = str1[i] - str2[i];
    }
  return (res);  
}


/*int main()
{
  char str1[20] = "Hello";
  char str2[20] = "HelloA";
  printf("%d\n", my_strcmp(str1, str2));
  }*/

