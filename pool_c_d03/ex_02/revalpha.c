int my_putchar(char c)
{
  write(1, &c, 1);
}

void revalpha()
{
  char c;
  c = 90;
  my_putchar(c);
  
  while(c > 65)
    { c = c - 1;
      my_putchar(c);
    }
  my_putchar(10);
}

/*int main()
{
  revalpha();
  return(0);
  }*/
