import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.net.Socket;

public class client {
    public static void main(String[] args) {
        try {
            Socket socket = new Socket("localhost", 5001);

            PrintWriter out = new PrintWriter(socket.getOutputStream(), true);
            BufferedReader in = new BufferedReader(new InputStreamReader(socket.getInputStream()));

            int num1 = 5;
            int num2 = 10;

            out.println(num1);
            out.println(num2);

            String risposta = in.readLine();
            System.out.println("Il prodotto dei due numeri è: " + risposta);

            socket.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}

