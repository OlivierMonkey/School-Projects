import math
from Calculator.add import add
from Calculator.sub import sub
from Calculator.multiply import multiply
from Calculator.division import division
from Calculator.power import power
from Calculator.modulo import modulo
from Calculator.cosinus import cosinus
from Calculator.sinus import sinus
from Calculator.tangent import tangent
from Calculator.exponentiel import exponentiel
from Calculator.logarythm import logarythm


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
        print('You have not typed a valid command, please try again.')
        again()

    if operation == '+':
        print(add(number_1, number_2))
    elif operation == '-':
        print(sub(number_1, number_2))
    elif operation == '*':
        print(multiply(number_1, number_2))
    elif operation == '/':
        print(division(number_1, number_2))
    elif operation == '**':
        print (power(number_1, number_2))
    elif operation == '%':
        print(modulo(number_1, number_2))
    elif operation == 'cos':
        print(cosinus(number_1, number_2))
    elif operation == 'sin':
        print(sinus(number_1, number_2))
    elif operation == 'tan':
        print(tangent(number_1,number_2))
    elif operation == 'exp':
        print(exponentiel(number_1, number_2))
    elif operation == 'log':
        print(logarythm(number_1, number_2))

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
#calculate()



