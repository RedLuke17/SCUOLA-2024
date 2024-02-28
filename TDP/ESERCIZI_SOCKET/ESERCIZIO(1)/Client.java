import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.Socket;

public class Client {
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
