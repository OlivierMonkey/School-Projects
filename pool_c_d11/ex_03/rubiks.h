#ifndef RUBIKS_H_
#define RUBIKS_H_
//#define MAGIC_SQR_DBG_ 0xADe4Db33

//fonctions basiques
int my_putchar(char c);
int my_putstr(char *str);
int my_strlen(char *str);

//exo1
void print_tab(int **table);
int check_square(int **table);
int **init_tab();

//exo2
void algo_line(int **table, int line);
void algo_column(int **table, int column);
void algo_square(int **table, int square);

//exo3
void algo_line_reverse(int **table, int line);
void algo_column_reverse(int **table, int column);
void algo_square_reverse(int **table, int square);


#endif
