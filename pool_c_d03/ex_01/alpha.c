int my_putchar(char c)
{
  write(1, &c, 1);
}
void alpha()
{
  char c;
  c = 65;
  my_putchar(c);
  
  while(c < 90)
    { c = c + 1;
      my_putchar(c);
    }
  my_putchar(10);  
}

/*int main()
{
  alpha();
  return (0);
  }*/
