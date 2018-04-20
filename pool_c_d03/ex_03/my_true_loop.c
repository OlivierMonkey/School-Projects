int my_putchar(char c)
{
  write(1, &c, 1);
}

void my_true_loop(unsigned int n)
{
  char c;
  c = 43;
  while ( n > 0 )
    {
      my_putchar(c);
      n = n - 1 ;
    }
  my_putchar(10);
}

/*int main()
{
  my_true_loop(5);
  return(0);
  }*/
