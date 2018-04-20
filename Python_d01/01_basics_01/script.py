#!/usr/bin/env python3

# print ("Hello, World!")

# sentence = "Hello World!"
# print (len(sentence))

# word = input("Enter a word:")

# print(word)

import sys

# print len(sys.argv)
# print str(sys.argv)
# print sys.argv
# i = 1
# nbr = 0

# if (len(sys.argv) >= 2):
#     while (i < len(sys.argv)):
#         nbr = nbr + len(sys.argv[i])
#         i = i + 1

# print nbr

i = 1
nb = 0

if (len(sys.argv) >= 2):
    while (i < len(sys.argv)):
        for x in sys.argv[i]:
            if x.isalpha():
                nb = nb + 1
        i = i + 1

print (nb)
