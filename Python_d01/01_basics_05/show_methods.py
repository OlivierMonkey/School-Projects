#OBJ = "I am a string."
def show_methods(arg):

    for method in dir(arg):
        print ("| {0: <20}".format(method),)

# show_methods("I am")
