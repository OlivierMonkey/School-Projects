//#include <stdio.h>

char my_putchar(char c)
{
  write (1, &c, 1);
}

int my_putstr(char *str)
{
  int i;

  i = 0;
  while (str[i] != '\0')
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

char *my_strstr(char *str1, char*str2)
{
  int i;
  int j;
  int size;
  char res;
  char *str3;
  
  i = 0;
  j = 0;
  size = my_strlen(str1);

  if (my_strlen(str2) > my_strlen(str1))
    {
      return NULL;
    }
  while (i < size)
    {
      while (str1[i] == str2[j] && str2[j] != 0)
	{
	  puts("hello");
	  i++;
	  j++;
	}
      if (str2[j] == 0)
	{
	  return (str1 + i - j);
	}
      j = 0;
      i++;
    }
  return (NULL);
}

/*int main()
{
  char str1[14] = "olivier@gmail";
  char str2[14] = "@gmai\0";
  
  printf("%s\n", my_strstr(str1, str2));
  // printf("%s\n", strstr(str1,str2));
  }*/

