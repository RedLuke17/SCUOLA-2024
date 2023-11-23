import java.text.DecimalFormat;

public class ContoBancario {
    private float saldo = 104;

    public synchronized void deposito(float importo) {
        saldo += importo;
        System.out.println("hai depositato:" + String.format("%.2f", importo) + "\n" +
                            "adesso il saldo e':" + String.format("%.2f", saldo));
    }

    public synchronized void prelievo(float importo) {
        if (saldo >= importo) {
            saldo -= importo;
            System.out.println("hai prelevato:" + String.format("%.2f", importo) + "\n" +
                                "adesso il saldo e':" + String.format("%.2f", saldo));
        } else {
            System.out.println("saldo insufficiente, non puoi prelevare:" + String.format("%.2f", importo));
        }
    }
}
