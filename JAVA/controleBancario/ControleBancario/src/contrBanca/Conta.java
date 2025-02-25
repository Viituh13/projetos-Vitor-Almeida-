package contrBanca;

public abstract class Conta {
	private double saldo;

	Conta(double saldo) {
		this.saldo = saldo;
	}

	public double getSaldo() {
		return saldo;

	}

	public void setSaldo(double saldo) {
		this.saldo = saldo;

	}

	public void depositar(double valor) throws DivisaoNegativa, DivisaoPorZero, NumberFormatException{
		if (valor > 0) {
			saldo += valor;
		} else if (valor < 0) {
			throw new DivisaoNegativa();
		} else if (valor ==0){
			throw new DivisaoPorZero();
		} else {
			throw new NumberFormatException();
		}

	}

	public void sacar(double valor) throws DivisaoNegativa, DivisaoPorZero, Exception {

		

		if (valor<0)
			throw new DivisaoNegativa();

		else if (valor == 0)
			throw new DivisaoPorZero();

		else if(saldo-valor<0) {
			throw new Exception();
		}else{
			saldo -= valor;
		}

	}

	public void atualizarSaldo() throws DivisaoNegativa, DivisaoPorZero {
		if (saldo < 0) {
			saldo += (saldo * 0.08);
		}
	}

}
