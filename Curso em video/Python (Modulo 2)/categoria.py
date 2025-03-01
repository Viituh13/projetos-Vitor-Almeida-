from datetime import date
at = date.today().year
na = int(input('Ano de Nascimento: '))
id =  at - na
print('O atleta tem {} anos'.format(id))
if id <= 9:
    print('Categoria Mirim')
if id <= 14:
    print('Categoria Infantil')
if id <= 19:
    print('Categoria Junior')
if id <= 25:
    print('Categoria Sênior')
if id >= 25:
    print('Categoria Master')

