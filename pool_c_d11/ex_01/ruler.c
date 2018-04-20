#include <stdio.h>
#include <stdlib.h>
#include "rubiks.h"

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
  return (count);
}

void print_tab(int **table)
{
  int y;

  y = 0;
  while ( y < 4 )
    {
      printf("-----------------\n");
      printf("| %d | %d | %d | %d |\n", table[y][0], table[y][1], table[y][2], table[y][3]);
      y++;
    }
  printf("-----------------\n");
}

int check_square(int **table)
{
  int	i;	
  int	j;
  int	ret;

  ret = 0;
  i = 0;
  j = 0;
  while (j < 4)
    {
      while (i < 4)
	{
	  if (table[i][j] == table[i+1][j] && table[i][j] == table[i][j+1] && table[i][j] == table[i+1][j+1])
	    ret = ret;
	  else
	    ret = 1;
	  i = i+2;
	}
      i = 0;
      j = j+2;
    }
  return (ret);
}

/*int main()
{
  int i;
  int **tableau;

  i = 0;
  tableau = malloc(4 *sizeof(tableau));
  while ( i < 4 )
    {
      tableau[i] = malloc(4 * sizeof(*tableau));
      i++;
    }
  tableau[0][0] = 0;
  tableau[0][1] = 0;
  tableau[0][2] = 1;
  tableau[0][3] = 1;
  tableau[1][0] = 0;
  tableau[1][1] = 0;
  tableau[1][2] = 1;
  tableau[1][3] = 1;
  tableau[2][0] = 2;
  tableau[2][1] = 2;
  tableau[2][2] = 3;
  tableau[2][3] = 3;
  tableau[3][0] = 2;
  tableau[3][1] = 2;
  tableau[3][2] = 3;
  tableau[3][3] = 3;

  print_tab(tableau);
  printf("%d\n", check_square(tableau));

  i = 0;
  while ( i < 4 )
    {
      free(tableau[i]);
      i++;
    }
  free(tableau);
  }*/
