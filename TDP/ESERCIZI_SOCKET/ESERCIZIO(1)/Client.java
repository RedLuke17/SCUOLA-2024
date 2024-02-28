import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.Socket;

public class Client {
    /*
    public Client(String indirizzo, int port) {
        try {
            socket = new Socket(indirizzo, port);
            System.out.println("connesso");
        } catch (UnknownHostException e) {
            throw new RuntimeException(e);
        } catch (IOException e) {
            throw new RuntimeException(e);
        }
    }*/
    public static void main(String[] args) {
        try {
            Socket socketClient = new Socket("localhost", 4999);
            InputStreamReader in = new InputStreamReader(socketClient.getInputStream());
            BufferedReader bf = new BufferedReader(in);

            String str = bf.readLine();
            System.out.println(str);
            socketClient.close();
        } catch (Exception e) {
            // TODO: handle exception
        }
    }
}
