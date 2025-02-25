package contrBanca;

public class ContaCorrente extends Conta {

	private double limiteEspecial;

	ContaCorrente(double saldo, double limite) {
		super(saldo);
		this.limiteEspecial = limite;
	}

	public void sacar(double valor) throws DivisaoNegativa, DivisaoPorZero, Exception {

		if (valor < 0) {
			throw new DivisaoNegativa();
		} else if (valor == 0) {
			throw new DivisaoPorZero();
		}

		else if (getSaldo() - valor < -1000) {
			throw new Exception();
		} else if (getSaldo() < 0) {
			limiteEspecial -= valor;
		}else if(getSaldo()-valor<0) {
			limiteEspecial = (limiteEspecial-valor)+getSaldo();
			setSaldo(getSaldo()-valor);
		}
		else {
			setSaldo(getSaldo() - valor);
		}
	}

	public String toString() {
		return "Seu saldo: R$" + getSaldo() + "\nLimite Especial: R$" + limiteEspecial;

	}
}
