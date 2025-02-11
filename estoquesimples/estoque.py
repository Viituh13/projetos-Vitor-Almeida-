estoque = []


def adicionar_item():
    id_item = input("Digite o ID do item: ")
    # Verifica se o item já existe no estoque
    for item in estoque:
        if item["id"] == id_item:
            print("Erro: Item já existe no estoque!")
            return

    nome = input("Digite o nome do item: ")
    while True:
        try:
            quantidade = int(input("Digite a quantidade: "))
            preco = float(input("Digite o preço unitário: R$ "))
            break
        except ValueError:
            print("Valor inválido! Digite números para quantidade e preço.")

    novo_item = {
        "id": id_item,
        "nome": nome,
        "quantidade": quantidade,
        "preco": preco
    }

    estoque.append(novo_item)
    print(f"Item '{nome}' adicionado com sucesso!")


def atualizar_estoque():
    id_item = input("Digite o ID do item para atualizar: ")
    for item in estoque:
        if item["id"] == id_item:
            while True:
                try:
                    nova_quantidade = int(input("Digite a nova quantidade: "))
                    item["quantidade"] = nova_quantidade
                    print("Quantidade atualizada com sucesso!")
                    return
                except ValueError:
                    print("Digite um número inteiro válido!")
    print("Erro: Item não encontrado no estoque!")


def remover_item():
    id_item = input("Digite o ID do item para remover: ")
    for item in estoque:
        if item["id"] == id_item:
            estoque.remove(item)
            print("Item removido com sucesso!")
            return
    print("Erro: Item não encontrado no estoque!")


def listar_estoque():
    if not estoque:
        print("Estoque vazio!")
        return

    print("\n{:<10} {:<20} {:<10} {:<10}".format(
        "ID", "Nome", "Quantidade", "Preço(R$)"))
    for item in estoque:
        print("{:<10} {:<20} {:<10} {:<10.2f}".format(
            item["id"],
            item["nome"],
            item["quantidade"],
            item["preco"]
        ))
    print(f"\nTotal de itens: {len(estoque)}")


def buscar_item():
    termo = input("Digite o ID ou nome do item para buscar: ").lower()
    resultados = []

    for item in estoque:
        if termo in item["id"].lower() or termo in item["nome"].lower():
            resultados.append(item)

    if resultados:
        print("\nResultados da busca:")
        print("{:<10} {:<20} {:<10} {:<10}".format(
            "ID", "Nome", "Quantidade", "Preço(R$)"))
        for item in resultados:
            print("{:<10} {:<20} {:<10} {:<10.2f}".format(
                item["id"],
                item["nome"],
                item["quantidade"],
                item["preco"]
            ))
    else:
        print("Nenhum item encontrado!")


def menu():
    while True:
        print("\n--- Sistema de Controle de Estoque ---")
        print("1. Adicionar item")
        print("2. Atualizar quantidade")
        print("3. Remover item")
        print("4. Listar todos os itens")
        print("5. Buscar item")
        print("6. Sair")

        escolha = input("Escolha uma opção: ")

        if escolha == "1":
            adicionar_item()
        elif escolha == "2":
            atualizar_estoque()
        elif escolha == "3":
            remover_item()
        elif escolha == "4":
            listar_estoque()
        elif escolha == "5":
            buscar_item()
        elif escolha == "6":
            print("Saindo do sistema...")
            break
        else:
            print("Opção inválida! Tente novamente.")


if __name__ == "__main__":
    menu()