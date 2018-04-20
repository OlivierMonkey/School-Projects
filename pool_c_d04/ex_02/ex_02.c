
int my_putchar(char c)
{
  write(1, &c, 1);
}

void my_putstr(char *str)
{
  int i = 0; 
  while ( str[i] != '\0' )
    {
      my_putchar(str[i]);
      i++;
    }
}

/*int main()
{
  char tab[6] = {'h','e','l','l','o','\0'};
   
  my_putstr(tab);
  return (0);
  }*/
