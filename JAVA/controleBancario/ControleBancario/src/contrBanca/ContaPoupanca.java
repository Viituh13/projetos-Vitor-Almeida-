package contrBanca;

public class ContaPoupanca extends Conta {

	private double reajusteMensal = 0.01;

	ContaPoupanca(double saldo, double reajuste) {
		super(saldo);
		this.reajusteMensal = reajuste;
	}

	public void atualizarSaldo(double reajuste) throws DivisaoNegativa, DigiteNumeros, DivisaoPorZero {

		if (getSaldo() == 0) {
			throw new DivisaoPorZero();
		} else if (getSaldo() < 0) {
			throw new DivisaoNegativa();
		}

		else {
			setSaldo(getSaldo() + (reajuste / 100) * getSaldo());
		}

	}

	public String toString() {
		return "Seu saldo é: R$" + getSaldo();

	}

}
