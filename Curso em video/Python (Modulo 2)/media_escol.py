n1 =  float(input('Qual a primeira nota: '))
n2 =  float(input('Qual a segunda nota: '))
n3 = float(input('Qual a terceira nota: '))
n4 = float(input('Qual a quarta nota: '))

med = (n1+n2+n3+n4) / 4
print('Tirando {:.1f} ,{:.1f}, {:.1f} e {:.1f} , a média do aluno é {:.1f}'.format(n1,n2,n3,n4,med))
if 7 > med >= 5:
    print('O aluno está de RECUPERAÇÃO')
elif med < 5:
    print('O aluno está REPROVADO')
elif med >= 7:
    print('O aluno está APROVADO')

