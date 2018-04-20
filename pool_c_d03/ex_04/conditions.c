int my_putchar(char c)
{
  write(1, &c, 1);
}

void conditions(int n)
{
  char c;
  if ( n > 0 )
    {
      my_putchar(43);
    }
  else if ( n < 0 )
    {
      my_putchar(45);
    }
  else
    {
      my_putchar(48);
    }
}

/*int main()
{
  conditions(-564);
  conditions(564);
  conditions(0);
  return(0);
  }
