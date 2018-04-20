def my_args_handler(*args):
    i = 0
    words = ""
    while (i < len(args)):
        if (i == 0):
            words = args[i]
        else:
            words = words + ", " + args[i]
        i = i + 1
    return words

#print(my_args_handler("a", "b", "c", "poke", "jour", "nuit"))
