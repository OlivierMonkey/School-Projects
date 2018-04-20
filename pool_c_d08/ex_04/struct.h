#ifndef STRUCT_H
#define STRUCT_H

struct s_my_struct
{
  int id;
  char *str;
};

typedef struct s_my_struct t_struct;

void  my_init(t_struct *identity, int number, char *copy);

/*t_struct *new_identity(int id, char* str);

int free_identity(t_struct *identity);*/
  
#endif
