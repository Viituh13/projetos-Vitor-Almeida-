casin = float(input('qual o valor da casa: R$ '))
sal =  float(input('Qual seu salario?'))
anos = int(input('Em quantos anos?'))

pres = casin /(anos * 12)
min =  sal * 30 / 100
print('Para pagar uma casa de R${:.2f} em {} anos '. format(casin,anos), end='')
print('A prestação será de R{:.2f}'.format(pres))
if pres <= min:
    print('Empréstimo pode ser concedido')
else:
    print('Emprestimo não pode ser concedido ')

