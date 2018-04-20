import math
from Calculator.add import add
from Calculator.sub import sub
from Calculator.multiply import multiply

def calculate():
    operation = input('''
Please type in the math operation you would like to complete:
+ for addition
- for subtraction
* for multiplication
/ for division
** for power
% for modulo
cos for cosinus
sin for sinus
tan for tangent
exp for exponentiel
log for logarithm
''')
    
    #Correct operator
    if operation in ('+', '-', '*', '/', '**', '%', 'cos', 'sin', 'tan', 'exp', 'log'):
        number_1 = float(input('Enter your first number: '))
        number_2 = float(input('Enter your first number: '))
        
    else:    
        print('You have not typed a valid operator, please try again.')

    if operation == '+':
        print(add(number_1, number_2))
    elif operation == '-':
        print(sub(number_1, number_2))
    elif operation == '*':
        print(multiply(number_1, number_2))
# def add(number_1, number_2):
#     print ('{} + {} = '.format(number_1, number_2))
#     print (number_1 + number_2)
#     add(number_1, number_2)
        
# def sub(x, y):
#     print ('{} - {} = '.format(number_1, number_2))
#     print (number_1 - number_2)
#     sub(x, y)
    
# def multiply(x, y):
#     print ('{} * {} = '.format(number_1, number_2))
#     print (number_1 * number_2)
#     multiply(x, y)

# def division(x, y):
#     print ('{} / {} = '.format(number_1, number_2))
#     print (number_1 / number_2)
#     divion(x, y)
    
# def power(x, y):
#     print ('{} ** {} = '.format(number_1, number_2))
#     print (number_1 ** number_2)
#     power(x, y)

# def modulo(x, y):
#     print ('{} % {} = '.format(number_1, number_2))
#     print (number_1 % number_2)
#     modulo(x, y)
    
# def cosinus(x, y):
#     print ('cos{} = '.format(number_1))
#     print ('cos{} = '.format(number_2))
#     print (math.cos(number_1))
#     print (math.cos(number_2))
#     cosinus(x, y)

# def sinus(x, y):
#     print ('sin{} = '.format(number_1))
#     print ('sin{} = '.format(number_2))
#     print (math.sin(number_1))
#     print (math.sin(number_2))
#     sinus(x, y)

    
# def tangent(x, y):
#     print ('tan{} = '.format(number_1))
#     print ('tan{} = '.format(number_2))
#     print (math.tan(number_1))
#     print (math.tan(number_2))
#     tangent(x, y)

# def exponentiel(x, y):
#     print ('exp{} = '.format(number_1))
#     print ('exp{} = '.format(number_2))
#     print (math.exp(number_1))
#     print (math.exp(number_2))
#     exp(x, y)

# def logarythm(x, y):
#     print ('log{} = '.format(number_1))
#     print ('log{} = '.format(number_2))
#     print (math.log1p(number_1))
#     print (math.log1p(number_2))
#     log(x, y)

def again():
    calc_again = input('''
Do you want to calculate again?
Please type Y for YES or N for NO.
''')

    if calc_again.upper() == 'Y':
        calculate()

    elif calc_again.upper() =='N':
        print ('See you later.')

    else:
        again()

def welcome():
    print('''
Welcome to Calculator
''')

#welcome()    
calculate()



