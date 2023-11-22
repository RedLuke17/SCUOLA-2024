public class ContoBancario {
    private float saldo;

    public ContoBancario(float saldoIniziale) {
        this.saldo = saldoIniziale;
    }

    public synchronized void deposito(float importo) {
        saldo += importo;
        System.out.println("hai depositato:" + importo + "\n" +
                            "adesso il saldo e':" + saldo);
    }

    public synchronized void prelievo(float importo) {
        if (saldo >= importo) {
            saldo -= importo;
            System.out.println("hai prelevato:" + importo + "\n" +
                                "adesso il saldo e':" + saldo);
        } else {
            System.out.println("saldo insufficiente, non puoi prelevare:" + importo);
        }
    }
}
