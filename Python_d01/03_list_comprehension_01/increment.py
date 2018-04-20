def increment(tab):
    #tab = [3, 4, 9, 'a', "qvb", {}]
    i = 0
    while (i < len(tab)):
        if (isinstance(tab[i], int )):
            tab[i] = tab[i] + 1
        i = i + 1
    return tab
    #print(tab)
    
#increment()
