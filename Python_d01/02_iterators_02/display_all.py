def display_all(arg):
    #d = {'a': 1, 'b': 2, 'c': "lol"}
    word = ""
    for key, value in arg.items():
        word = word + ('({0}: {1})'.format(type(value), str(value))) + "\n"
    word = word[:-1]
    return word

# display_all()

