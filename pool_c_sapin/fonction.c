#include <stdlib.h>
#include <stdio.h>
#include <string.h>

int my_putchar(char c)
{
  write(1, &c, 1);
}

int nb_line(int size)
{
  int i;
  int line;
  int line0;

  i = 0;
  line0 = 4;
  line = 0;
  while (i < size)
    {
      line = line + line0;
      line0 = line0 + 1;
      i++;
    }
  printf("le nombre de lignes %d\n" , line);
}

int nb_star(int size)
{
  int step;
  int diff;
  int block;
  int tmp;
  int star;
  int i;

  step = 0;
  i = 1;
  diff = 2;
  star = 7;
  block = 5;
  while ( i  < size )
    {
      if (step == 2)
	{
	  diff = diff + 2;
	  step = 0;
	}
      tmp = star - diff;
      star = (block-1)*2 + tmp;
      i++;
      block++;
      step++;
    }
  printf("le nombre de star %d\n" , star);
  return star;
}

int nb_foot(int size)
{
  int step;
  int foot;
  
  step = 1;
  foot = 1;
  while (size >= 1)
    {
      if (step == 2)
	{
	  foot += 2;
	  step = 0;
	}
      size--;
      step++;
    }
  printf("le nombre de foot %d\n" , foot);
  return (foot);
}


int draw_block(int star, int line, int maxStars)
{
  int col;
  int i;

  while (line >= 1)
    {
      i = 0;
      col = ((maxStars / 2) - star / 2) + 1;
      while(col > 1)
	{
	  my_putchar(' ');
	  col--;
	}
      while(i < star)
	{
	  my_putchar('*');
	  i++;
	}
      my_putchar('\n');      
      line--;
      star += 2;   
    }
  return (star - 2);
}

int draw_foot(int foot, int size, int maxStars)
{
  int col;
  int i;
  int step;

  step = 1;
  i = 0;
  while (size >= 1)
    {
      col = ((maxStars / 2) - foot / 2) + 1;
      while(col > 1)
	{
	  my_putchar(' ');
	  col--;
	}
      while(i < foot)
	{
	  my_putchar('|');
	  i++;
	}
      size--;
    }    
  return (foot);
}
