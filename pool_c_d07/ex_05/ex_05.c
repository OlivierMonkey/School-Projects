#include <stdlib.h>
#include <stdio.h>
#include <fcntl.h>

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

int main(int argc, char **argv)
{
  int fd;
  int ret;
  char buffer[4];
  
  ret = 3;
  fd = open(argv[1], O_RDONLY);
  if (fd == -1)
    {
      my_putstr("Error.");
      my_putchar('\n');
      return(1);
    }
  while (ret == 3)
    {
      ret = read(fd, buffer, 3);
      buffer[ret] = '\0';
      my_putstr(buffer);
    }
  close(fd);
  return(0);
}
