#include <stdio.h>

int main()
{
	int num1[5], i;
	float soma1, soma2, div;
	
	//entrada de dados com vetor
	printf("Entre com 5 valores inteiros: \n");
	
	for(i=0; i < 5; i++)
	{
		scanf("%d", &num1[i]);
	}	
	
	soma1 = num1[0] + num1[4];
	soma2 = num1[1] + num1[2] + num1[3];
	
	printf("Valor da soma 1 = %.0f \n", soma1);
	printf("Valor da soma 1 = %.0f \n", soma1);
	
	if(soma1 == 0)
	{
		printf("Impossivel dividir um numero por 0!!\n");
	}
	else
	{
		div = soma2 / soma1;
		printf("Resultado da divisao = %.1f", div);
	}
}
