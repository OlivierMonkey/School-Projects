//#include <stdio.h>

int my_putchar(char c)
{
  write(1, &c, 1);
}


void my_init(int *ptr)
{
  *ptr = 42;
}
/*int main()
{
  int i;

  i = 0;
  my_init(&i);
  printf("%d\n", i);
  }*/
