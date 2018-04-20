def shows(arg):
    #arg = ({"test": "hello", "t": 43, "pi": 3.14})
    word = []
    for key, value in arg.items():
        word.append(str('{0} -> ({1}: {2})'.format(str(key), type(value), str(value))))
    #print (word)
    return word
#shows()
