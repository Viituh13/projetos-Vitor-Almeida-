import os
#nome
nome = str(input("Qual seu nome?"))

input("\nPressione Enter para começar")

#questoes
perguntas = [
    {
        "pergunta": "Qual foi a segunda capital do Brasil?",
        "opcoes": ["A) Brasília", "B) São Paulo", "C)  Rio de Janeiro", "D) Salvador"],
        "resposta": "C"
    },
    {
        "pergunta": "Quantos planetas existem no nosso sistema solar?",
        "opcoes": ["A) 7", "B) 8", "C) 9", "D) 10"],
        "resposta": "B"
    },
    {
        "pergunta": "Quem pintou a Mona Lisa?",
        "opcoes": ["A) Van Gogh", "B) Picasso", "C) Da Vinci", "D) Monet"],
        "resposta": "C"
    },
    {
        "pergunta": "Quem foi Napoleão Bonaparte?",
        "opcoes": [
            "A) Um imperador francês",
            "B) Um filósofo alemão",
            "C) Um rei inglês",
            "D) Um general romano"
        ],
        "resposta": "A"
    },
    {
        "pergunta": "Quem criou a linguagem de programação Python?",
        "opcoes": [
            "A) Dennis Ritchie",
            "B) James Gosling",
            "C) Guido van Rossum",
            "D) Bjarne Stroustrup"
        ],
        "resposta": "C"
    },
    {
        "pergunta": "De qual idioma o português tem sua origem?",
        "opcoes": ["A) Francês", "B) Latim", "C) Grego", "D) Espanhol"],
        "resposta": "B"
    },
    {
        "pergunta": "Quem foi o primeiro presidente do Brasil?",
        "opcoes": [
            "A) Getúlio Vargas",
            "B) Marechal Deodoro da Fonseca",
            "C) Juscelino Kubitschek",
            "D) Dom Pedro II"
        ],
        "resposta": "B"
    },
    {
        "pergunta": "Que fato levou ao fim da Segunda Guerra Mundial?",
        "opcoes": [
            "A) A invasão da Polônia",
            "B) A rendição da Alemanha",
            "C) O lançamento das bombas atômicas no Japão",
            "D) A morte de Adolf Hitler"
        ],
        "resposta": "C"
    }
]


def limpar_tela():
    os.system('cls' if os.name == 'nt' else 'clear')


def mostrar_pergunta(questao):
    print(questao["pergunta"])
    for opcao in questao["opcoes"]:
        print(opcao)

    resposta = input("\nSua resposta (A/B/C/D): ").upper()

    while resposta not in ["A", "B", "C", "D"]:
        print("Opção inválida! Digite A, B, C ou D.")
        resposta = input("\nSua resposta (A/B/C/D): ").upper()

    return resposta


def quiz():
    pontuacao = 0
    limpar_tela()

    for questao in perguntas:
        resposta = mostrar_pergunta(questao)
        if resposta == questao["resposta"]:
            print("\n Correto!")
            pontuacao += 1
        else:
            print(f"\nErrado! A resposta correta era {questao['resposta']}")
        input("\nPressione Enter para continuar...")
        limpar_tela()

    print(f"Quiz finalizado! Pontuação: {pontuacao}/{len(perguntas)}")
    if pontuacao == len(perguntas):
        print("Parabéns!!")
        print(f"\n Muito obrigado(a){nome}!")
    elif pontuacao >= len(perguntas) / 2:
        print("Bom, mas melhore!")
        print(f"\n Muito obrigado(a){nome}!")
    else:
        print("Você precisa estudar mais!")
        print(f"\n Muito obrigado(a){nome}!")



if __name__ == "__main__":
    quiz()
