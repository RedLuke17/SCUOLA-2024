import java.util.ArrayList;
import java.util.List;

public class Main {
    public static void main(String[] args) {
        ContoBancario contoBancario = new ContoBancario();
        List<Utente> utenti = new ArrayList<>();

        for (int i = 0; i < 6; i++) {
            utenti.add(new Utente(contoBancario, i));
            utenti.get(i).start();
        }
    }
}
