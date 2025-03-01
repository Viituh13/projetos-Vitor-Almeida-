from datetime import date
at = date.today().year
na = int(input('Ano do Nascimento: '))
id =  at - na
print('Quem nasceu em {} tem {} anos em {} '.format(na,id,at))
if id == 18:
    print('Deve se alistar estee ano')
elif id < 18:
    sa = 18 - id
    print('Ainda faltam {} anos para o alistamento'. format(sa))
elif id > 18:
    sa = id - 18
    print('Você devia ter se alistado há {} anos'.format(sa))
