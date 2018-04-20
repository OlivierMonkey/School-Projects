def display_all(arg):
    #d = {'a': 1, 'b': 2, 'c': "lol"}
    word = ""
    for key, value in arg.items():
        word = word + ('{0}->({1}: {2})'.format(str(key), type(value), str(value))) + "\n"
    word = word[:-1]
    #print(word)
    return word

#display_all()

