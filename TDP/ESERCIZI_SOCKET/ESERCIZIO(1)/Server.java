import java.io.PrintWriter;
import java.net.ServerSocket;
import java.net.Socket;

public class Server {
    public static void main(String[] args) {
        try {
            ServerSocket serverSocket = new ServerSocket(4999);
            
            while (true) {
                Socket socketClient = serverSocket.accept();
                System.out.println("client connesso");

                PrintWriter pr = new PrintWriter(socketClient.getOutputStream());
                pr.println("ciao client");
                pr.flush();
            }
        } catch (Exception e) {
            // TODO: handle exception
        }
    }
}
