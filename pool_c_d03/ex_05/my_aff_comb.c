int my_putchar(char c)
{
  write(1, &c, 1);
}

int my_aff_comb()
{
  int a;
  a = 48;
  int b;
  b = 49;
  int c;
  c = 50;
  while ( a <= 57 )
    {
      while  ( b <= 57 )
	{
	  while ( c <= 57)
	    {
	      my_putchar(a);
	      my_putchar(b);
	      my_putchar(c);
	      my_putchar(',');
	      my_putchar(' ');
	      c++;
	    }
	  b++;
	  c = b + 1;
	}
      a++;
      b = a + 1;
      c = b + 1;
    }
  my_putchar(127);
  my_putchar(127);
}

/*int main()
{
  my_aff_comb();
  return(0);
  }*/
