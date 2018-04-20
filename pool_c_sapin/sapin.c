#include <stdlib.h>
#include <stdio.h>
#include <string.h>
#include "fonction.c"


int main(int argc , char **argv)
{
  int	maxFoot;
  int	maxStar;
  int	maxLine;
  int	lines;
  int	stars;
  int	i;
  int	size;
  int	diff;
  int	step;
  int	foots;

  i = 0;
  step = 0;
  diff = 2;
  stars = 1;
  foots = 1;
  lines = 4;
  size = atoi(argv[1]);
  maxStar = nb_star(size);
  maxLine = nb_line(size);
  maxFoot = nb_foot(size);
  while (i != size)
    {
      stars = draw_block(stars, lines, maxStar);
      if (step == 2)
	{
	  diff = diff + 2;	  
	  step = 0;
	}
      stars = stars - diff;
      i++;
      lines++;
      step++;
    }
  i = 0;
  while (i != size)
    {
       foots = draw_foot(maxFoot, size, maxStar);
       my_putchar('\n');
       i++;
    } 
}
