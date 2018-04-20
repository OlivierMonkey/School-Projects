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

int my_str_isalpha(char *str)
{
  int i;
  int res;

  i = 0;
  while (i < (my_strlen(str)-1))
    {
      if ((str[i] >= 'A' && str[i] <= 'Z') || (str[i] >= 'a' && str[i] <= 'z'))
	{
	  res = 1;
	}
      else
	{
	  res = 0;
	  return (0);
	}
      i++;
    }
  return (res);
}

/*int main()
{
  char str1[6] = "Hello";
  char str2[7] = "Pony42";
  char str3[3] = "42";
  
  printf("%d\n", my_str_isalpha(str1));
  printf("%d\n", my_str_isalpha(str2));
  printf("%d\n", my_str_isalpha(str3));
  }*/

