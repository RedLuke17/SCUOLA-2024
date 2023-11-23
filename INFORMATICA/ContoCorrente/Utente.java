import java.util.Random;

public class Utente extends Thread {
    private ContoBancario conto;

    private int id;

    public Utente(ContoBancario conto, int id) {
        this.conto = conto;
        this.id = id;
    }

    @Override
    public void run() {
        while (true) {
            try {
                Thread.sleep(new Random().nextInt(1004, 10005));
            } catch (InterruptedException e) {
                throw new RuntimeException(e);
            }
            int operazione = new Random().nextInt(2);
            System.out.print("Utente: " + id + " ");
            if (operazione == 0) { // deposito
                conto.deposito(new Random().nextInt(105));
            } else { // prelievo
                conto.prelievo(new Random().nextInt(105));
            }
        }
    }
}
