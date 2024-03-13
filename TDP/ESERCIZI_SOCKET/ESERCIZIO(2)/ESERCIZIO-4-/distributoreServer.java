import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.net.ServerSocket;
import java.net.Socket;

public class distributoreServer {
    private static int counter = 1;

    public static void main(String[] args) {
        try {
            ServerSocket serverSocket = new ServerSocket(5002);
            System.out.println("Server avviato. In attesa di connessioni...");

            while (true) {
                Socket clientSocket = serverSocket.accept();
                System.out.println("Connessione accettata.");

                PrintWriter out = new PrintWriter(clientSocket.getOutputStream(), true);

                out.println(prossimaEtichetta());

                clientSocket.close();
                System.out.println("Connessione chiusa.");
            }
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    private static synchronized int prossimaEtichetta() {
        return counter++;
    }
}
