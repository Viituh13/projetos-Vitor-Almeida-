#include <stdio.h>
#include <stdlib.h>
#include <time.h>

#define CARACTERES "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+"

void gerar_senha(int tamanho) {
    int i;
    int comprimento = sizeof(CARACTERES) - 1;
    
    srand(time(NULL)); // Inicializa o gerador de números aleatórios
    
    for (i = 0; i < tamanho; i++) {
        printf("%c", CARACTERES[rand() % comprimento]);
    }
    printf("\n");
}

int main() {
    int tamanho;
    printf("Digite o tamanho da senha: ");
    scanf("%d", &tamanho);
    
    if (tamanho <= 0) {
        printf("Tamanho não consta!\n");
        return 1;
    }
    
    printf("Senha criada: ");
    gerar_senha(tamanho);
    
    return 0;
}
