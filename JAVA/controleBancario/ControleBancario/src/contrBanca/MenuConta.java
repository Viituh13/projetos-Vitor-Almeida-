package contrBanca;

import javax.swing.JOptionPane;

public class MenuConta extends Menu {
	private ContaCorrente contaCC;
	private ContaPoupanca contaCP;

	int respPrinc, respCC, respCP;
	double valorDep;

	public MenuConta() {
		this.contaCC = new ContaCorrente(500, 1000);
		this.contaCP = new ContaPoupanca(5000, 0.01);

	}

	protected void executarMenu() {
		String principal[] = { "Sair", "Conta Corrente", "Conta Poupança" };
		respPrinc = JOptionPane.showOptionDialog(null, "Menu Principal", "Entrada", 0, JOptionPane.QUESTION_MESSAGE,
				null, principal, principal[0]);
		avaliarOpcaoEscolhida();
	}

	protected void avaliarOpcaoEscolhida() {
		while (respPrinc != 0) {
			if (respPrinc == 0) {
				System.exit(1);
			} else if (respPrinc == 1) {
				operarContaCC();
			} else if (respPrinc == 2) {
				operarContaCP();
			}
		}
	}// FIM WHILE PRICIPAL

	private void operarContaCC() {
		String opcoesCC[] = { "Voltar", "Consultar Saldo", "Depositar", "Sacar", "Atualizar Saldo" };
		respCC = JOptionPane.showOptionDialog(null, "Submenu", "Entrada", 0, JOptionPane.QUESTION_MESSAGE, null,
				opcoesCC, opcoesCC[0]);

		if (respCC == 0) {
			executarMenu();
		} else if (respCC == 1) {
			JOptionPane.showMessageDialog(null, contaCC.toString(), null, JOptionPane.INFORMATION_MESSAGE);
		} else if (respCC == 2) {
			try {
				contaCC.depositar(Double.parseDouble(JOptionPane.showInputDialog(null, "Digite o valor do depósito",
						"DepÃ³sito", JOptionPane.QUESTION_MESSAGE)));
			} catch (DivisaoNegativa e) {
				JOptionPane.showMessageDialog(null, "Valor Inválido", "ERRO!!", JOptionPane.INFORMATION_MESSAGE);
				e.printStackTrace();

			} catch (DivisaoPorZero d) {
				JOptionPane.showMessageDialog(null, "Valor Inválido", "ERRO!!", JOptionPane.INFORMATION_MESSAGE);
			} catch(NumberFormatException e) {
				JOptionPane.showMessageDialog(null, "Digite um número", "ERRO!", JOptionPane.INFORMATION_MESSAGE);
			}
		} else if (respCC == 3) {
			try {
				contaCC.sacar(Double.parseDouble(JOptionPane.showInputDialog(null, "Digite o valor de saque", "SAQUE",
						JOptionPane.QUESTION_MESSAGE)));
			} catch (NumberFormatException e) {

			} catch (DivisaoPorZero e) {
				JOptionPane.showMessageDialog(null, "Valor Inválido", "ERRO!!", JOptionPane.INFORMATION_MESSAGE);

			} catch (DivisaoNegativa e) {
				JOptionPane.showMessageDialog(null, "Apenas valores positivos!", "ERRO!!",
						JOptionPane.INFORMATION_MESSAGE);

			} catch (Exception e) {
				JOptionPane.showMessageDialog(null, "Ocorreu uma exceção", "ERRO!!", JOptionPane.INFORMATION_MESSAGE);
			}
		}

		else if (respCC == 4) {
			try {
				contaCC.atualizarSaldo();
			} catch (DivisaoNegativa e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			} catch (DivisaoPorZero e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			} catch (Exception e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
		}

	}// FIM OPERAR CONTA CC

	private void operarContaCP() throws NumberFormatException {
		String opcoesCP[] = { "Voltar", " Consultar Saldo", " Depositar", " Sacar", " Atualizar Saldo" };
		respCP = JOptionPane.showOptionDialog(null, "Submenu", "Entrada", 0, JOptionPane.QUESTION_MESSAGE, null,
				opcoesCP, opcoesCP[0]);

		if (respCP == 0) {
			executarMenu();
		} if (respCP == 1) {
			JOptionPane.showMessageDialog(null, contaCP.toString(), null, JOptionPane.INFORMATION_MESSAGE);
		} if(respCP==2) {
			try {
				contaCP.depositar(Double.parseDouble(JOptionPane.showInputDialog(null, "Digite o valor do depósito",
						"Depósito", JOptionPane.QUESTION_MESSAGE)));
			} catch (NumberFormatException e) {
				JOptionPane.showMessageDialog(null, "Digite um número", "ERRO!", JOptionPane.INFORMATION_MESSAGE);
			}
			catch (DivisaoNegativa e) {
				JOptionPane.showMessageDialog(null, "Valor Inválido", "ERRO!!", JOptionPane.INFORMATION_MESSAGE);
				e.printStackTrace();

			} catch (DivisaoPorZero d) {
				JOptionPane.showMessageDialog(null, "Valor Inválido", "ERRO!!", JOptionPane.INFORMATION_MESSAGE);
			}
		} if(respCP==3) {
			try {
				contaCP.sacar(Double.parseDouble(JOptionPane.showInputDialog(null, "Digite o valor de saque", "SAQUE",
						JOptionPane.QUESTION_MESSAGE)));
			}  catch (DivisaoPorZero e) {
				JOptionPane.showMessageDialog(null, "Valor Inválido", "ERRO!!", JOptionPane.INFORMATION_MESSAGE);

			} catch (DivisaoNegativa e) {
				JOptionPane.showMessageDialog(null, "Apenas valores positivos!", "ERRO!!",
						JOptionPane.INFORMATION_MESSAGE);

			}catch (Exception e) {
				JOptionPane.showMessageDialog(null, "Não há mais valor para sacar", "ERRO!!", JOptionPane.INFORMATION_MESSAGE);
			}  
		} if(respCP==4) {
			try {
				contaCP.atualizarSaldo(Double.parseDouble(JOptionPane.showInputDialog(null, "Digite o valor de reajuste ", "SAQUE",
						JOptionPane.QUESTION_MESSAGE)));
			} catch (DivisaoNegativa e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			} catch (DivisaoPorZero e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
		}

	}

}
