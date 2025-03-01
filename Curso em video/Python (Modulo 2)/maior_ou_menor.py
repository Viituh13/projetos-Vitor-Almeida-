n1  = int(input('digite um numero: '))
n2  = int(input('gite outro numero: '))
print('A resposta é ')
if n1 > n2:
    print('{} O primeiro maior que {}'.format(n1,n2))
elif  n2 > n1:
    print('{} O segundo é maior que {}'.format(n2,n1))
elif n1 == n2:
    print(' são iguais ')
