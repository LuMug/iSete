// java.lang.ClassNotFoundException: com.mysql.jdbc.Driver
import com.pi4j.io.gpio.*;
import java.io.IOException;
import java.util.logging.Level;
import java.util.logging.Logger;
import java.util.ArrayList;

import java.sql.*; // import classe per sql

public class ServoMotoreModulare {

    final GpioController gpio = GpioFactory.getInstance();
    private GpioPinDigitalOutput myServo;
    private Pin[] pinRasp = new Pin[]{
        RaspiPin.GPIO_00,
        RaspiPin.GPIO_01,
        RaspiPin.GPIO_02,
        RaspiPin.GPIO_03,
        RaspiPin.GPIO_04,
        RaspiPin.GPIO_05,
        RaspiPin.GPIO_06,
        RaspiPin.GPIO_07,
        RaspiPin.GPIO_08,
        RaspiPin.GPIO_09,
        RaspiPin.GPIO_10,
        RaspiPin.GPIO_11,
        RaspiPin.GPIO_12,
        RaspiPin.GPIO_13,
        RaspiPin.GPIO_14,
        RaspiPin.GPIO_15,
        RaspiPin.GPIO_16,
        RaspiPin.GPIO_17,
        RaspiPin.GPIO_18,
        RaspiPin.GPIO_19,
        RaspiPin.GPIO_20,
        RaspiPin.GPIO_21,
        RaspiPin.GPIO_22,
        RaspiPin.GPIO_23,
        RaspiPin.GPIO_24
    };

    // JDBC driver name and database URL
    String JDBC_DRIVER = "com.mysql.jdbc.Driver";
    String DB_URL = "jdbc:mysql://192.168.1.253";
    public ArrayList<String> nomiCapsule= new ArrayList<>();

    //  Database credentials
    static final String USER = "iSete";
    static final String PASS = "isete1";

    // costruttore
    public ServoMotoreModulare(int n, String t) { // costruttore
        this.connected(); // connessione al db
        this.setTypeCapsula(t); // settaggio del pin
        this.rotation(n); // rotazione del servo motore
    }

    // rotazione servo motore
    public void rotation(int n) {
        try {

            for (int i = 0; i < 5; i++) {
                myServo.high();
                java.lang.Thread.sleep(2);
                myServo.low();
                java.lang.Thread.sleep(18);
            }
        } catch (InterruptedException ex) {
        }
        System.out.println("start");
        for (int cnt = 0; cnt < n; cnt++) {
            try {
                System.out.println("avanti");
                for (int i = 0; i < 20; i++) {
                    myServo.high();
                    java.lang.Thread.sleep(0);
                    myServo.low();
                    java.lang.Thread.sleep(20);
                }
                //aspetta un momento prima di cambiare posizione
                System.out.println("ok");
                for (int i = 0; i < 50; i++) {
                    java.lang.Thread.sleep(20);
                }
                System.out.println("indietro");
                for (int i = 0; i < 25; i++) {
                    myServo.high();
                    java.lang.Thread.sleep(2);
                    myServo.low();
                    java.lang.Thread.sleep(18);
                }
                System.out.println("ok");
                for (int i = 0; i < 50; i++) {
                    java.lang.Thread.sleep(20);
                }

            } catch (InterruptedException ex) {
            }
        }
    }

    public void setTypeCapsula(String tipo) { // tipo della capsula
        int p = nomiCapsule.indexOf(tipo); // mi ritorna la posizione dove value=tipo
        myServo = gpio.provisionDigitalOutputPin(pinRasp[p], // pin del servo motore corrispondente
                "My LED", // PIN FRIENDLY NAME (optional)
                PinState.LOW);;
    }
	

	public void connected(){
		Connection conn = null;
		Statement stmt = null;
   try{
      //STEP 2: Register JDBC driver
      Class.forName("com.mysql.jdbc.Driver");

      //STEP 3: Open a connection
      System.out.println("Connecting to database...");
      conn = DriverManager.getConnection(DB_URL,USER,PASS);

      //STEP 4: Execute a query
      System.out.println("Creating statement...");
      stmt = conn.createStatement();
      String sql;
	  sql = "use isete";
      ResultSet rs = stmt.executeQuery(sql);
      sql = "SELECT ca_tipo FROM capsula";
      rs = stmt.executeQuery(sql);

      //STEP 5: Extract data from result set
      while(rs.next()){
        nomiCapsule.add(rs.getString("ca_tipo"));
      }
      //STEP 6: Clean-up environment
      rs.close();
      stmt.close();
      conn.close();
   }catch(SQLException se){
      //Handle errors for JDBC
      se.printStackTrace();
   }catch(Exception e){
      //Handle errors for Class.forName
      e.printStackTrace();
   }finally{
      //finally block used to close resources
      try{
         if(stmt!=null)
            stmt.close();
      }catch(SQLException se2){
      }// nothing we can do
      try{
         if(conn!=null)
            conn.close();
      }catch(SQLException se){
         se.printStackTrace();
      }//end finally try
   }//end try
		
		
	}
    public static void main(String[] args) {
        ServoMotoreModulare s = new ServoMotoreModulare(Integer.parseInt(args[0]), args[1]);
    }

}
