num =  int(input('Digite um numero inteiro:'))
print(''' Escolha uma das bases para conversão:
[ 1 ] Converter para Binário 
[ 2 ] Converter para Octal
[ 3 ] converter para Hexadecimal 
''')
op = int(input('Sua opção:'))
if op == 1:
    print('{} convertido para Binário é igual a {}'.format(num,bin(num)))
elif op == 2:
    print('{} convertido para Octal é igual a {}'.format(num,oct(num)))
elif op == 3:
    print('{} convertido para Hexadecimal é igual a {}'.format(num,hex(num)))

