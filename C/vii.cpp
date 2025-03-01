#include <stdio.h>

int main(){
	int num1[5], num2[5], num3[5], num4[5], i;

	printf("Entre com os 5 valores inteiros do vetor1: \n");			
	for(int i=0; i < 5; i++)
	{
		scanf("%d", &num1[i]);	
	}		
	
		printf("Entre com os 5 valores inteiros do vetor2: \n");			
		for(int i=0; i < 5; i++)
	{
		scanf("%d", &num2[i]);	
	}		
	
		printf("Soma dos vetores 1 e 2:\n");			
		for(int i=0; i < 5; i++)
	{
		num3[i] = num1[i] + num2[i];
	}
	
		printf("\nVetor num1: ");
		for(i=0; i < 5; i++)
		{
		
		printf("%d \t", num1[i]);
	}
		
		printf("\nVetor num2: ");
		for(i=0; i < 5; i++){
		
		printf("%d \t", num2[i]);
	}
	
		printf("\nVetor num3: ");
		for(i=0; i < 5; i++){
		
		printf("%d \t", num3[i]);
	}

}
