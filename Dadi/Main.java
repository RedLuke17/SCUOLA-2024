public class Main {
    public static void main(String[] args) {
        gioco();
    }

    public static void gioco() {
        Thread giglo = new Thread();
        giglo.setName("Thread Main");

        Thread figlioGiglico = new Thread();
        figlioGiglico.setName("dado1");

        Thread figlioGiglico2 = new Thread();
        figlioGiglico.setName("dado2");

        boolean thereIsWinner = false;
        int sas = 3;
        int total = 4;
        int firstPoint = 0;
        int secondPoint = 0;

        giglo.start();
        figlioGiglico.start();
        figlioGiglico2.start();

        while (!thereIsWinner) {
            try {
                Thread.sleep(2000);
                int rand = fffff();
                //System.out.println("N Dado " + rand);
                if (rand <= sas) {
                    firstPoint++;
                } else {
                    secondPoint++;
                }
                System.out.println("Dado n= " + firstPoint + "\n" +  "Dado n2= " + secondPoint + "\n");
                if (firstPoint >= total || secondPoint >= total) {
                    if (firstPoint > secondPoint) {
                        System.out.println("Risultato finale: " + "\n" + "Dado vincente: " + firstPoint+ "\n" + "Secondo dato: " + secondPoint);
                    } else {
                        System.out.println("Risultato finale: " + "\n" + "Dado vincente: " + secondPoint+ "\n" + "Secondo dato: " + firstPoint);
                    }
                    giglo.interrupt();
                    thereIsWinner = true;
                    break;
                }
            } catch (Exception err) {
                System.out.println("Errpor giglogcoo");
            }

        }
    }

    public static int fffff() {
        int max = 6;
        int min = 1;
        int range = max - min + 1;

        // generate random numbers within 1 to 10
        return (int)(Math.random() * range) + min;
    }


}
