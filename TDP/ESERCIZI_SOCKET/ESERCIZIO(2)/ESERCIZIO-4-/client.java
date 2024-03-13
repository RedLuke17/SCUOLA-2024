import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.net.Socket;

public class client {
    public static void main(String[] args) {
        try {
            Socket socket = new Socket("localhost", 5002);

            BufferedReader in = new BufferedReader(new InputStreamReader(socket.getInputStream()));

            String etichetta = in.readLine();
            System.out.println("Hai ottenuto l'etichetta numerata: " + etichetta);

            socket.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
