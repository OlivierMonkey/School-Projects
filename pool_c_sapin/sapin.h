#ifndef SAPIN_H_
#define SAPIN_H_

int my_putchar(char c);

int nb_line(int size);

int nb_star(int size);

int nb_foot(int size);
	    
int draw_block(int star, int line, int maxStars);

int draw_foot(int foot, int size, int maxStars);
  
#endif
